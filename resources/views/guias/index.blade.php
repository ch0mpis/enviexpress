<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestión de Guías') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="padding:16px">
                    
                    <div class="flex space-x-2 mb-4">
                        <x-button class="dt-button">
                            <a href="{{ route('guias.create') }}">Nueva Guía</a>
                        </x-button>

                        @if (session('ok'))
                            <p style="color:green">{{ session('ok') }}</p>
                        @endif
                    </div>

                    <table id="guias" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Número Guía</th>
                                <th>QR</th>
                                <th>Tipo Servicio</th>
                                <th>Remitente</th>
                                <th>Destinatario</th>
                                <th>Peso Total (Kg)</th>
                                <th>Valor Declarado</th>
                                <th>Fecha Creación</th>
                                <th>Estado</th>
                                <th>Observaciones</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($guias as $gu)
                                <tr>
                                    <td>{{ $gu->numero_guia }}</td>
                                    <td>{{ $gu->qr_code ?? '-' }}</td>
                                    <td>{{ $gu->tipo_servicio }}</td>
                                    <td>{{ $gu->remitente->nombre ?? '-' }}</td>
                                    <td>{{ $gu->destinatario->nombre ?? '-' }}</td>
                                    <td>{{ $gu->peso_total_kg }}</td>
                                    <td>{{ $gu->valor_declarado }}</td>
                                    <td>{{ $gu->fecha_creacion }}</td>
                                    <td>{{ $gu->estado_actual }}</td>
                                    <td>{{ $gu->observaciones ?? '-' }}</td>
                                    <td>
                                        <x-button class="dt-button">
                                            <a href="{{ route('guias.edit', $gu) }}">Editar</a>
                                        </x-button>

                                        <form action="{{ route('guias.destroy', $guias) }}" method="POST"
                                            style="display:inline" onsubmit="return confirm('¿Eliminar esta guía?')">
                                            @csrf @method('DELETE')
                                            <x-button class="dt-button" type="submit">
                                                Eliminar
                                            </x-button>
                                        </form>
                                    </td>   
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    {{-- jQuery + DataTables (CDN) --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">  
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">   

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>  
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>  
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>  

    <script>
        $(function() {
            $('#guias').DataTable({
                pageLength: 20,
                dom: 'Bfrtip',
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.8/i18n/es-ES.json'
                },
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });
        });
    </script>
</x-app-layout>
