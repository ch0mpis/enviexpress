<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table id="Asignaciones" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th class ="border px-4 py-2 text-left">#</th>
                            <th class ="border px-4 py-2 text-left">Id Guia</th>
                            <th class ="border px-4 py-2 text-left">Id vehiculo</th>
                            <th class ="border px-4 py-2 text-left">Id Empleado</th>
                            <th class ="border px-4 py-2 text-left">Fecha Asig</th>
                            <th class ="border px-4 py-2 text-left">Estado Asig</th>
                            <th class ="border px-4 py-2 text-left">Observaciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($asignaciones as $index => $asi)
                            <tr>
                                <td class ="border px-4 py-2">{{ $index + 1 }}</td>
                                <td class ="border px-4 py-2">{{ $asi->id_guia }}</td>                                
                                <td class ="border px-4 py-2">{{ $asi->id_vehiculo}}</td>
                                <td class ="border px-4 py-2">{{ $asi->id_empleado}}</td>
                                <td class ="border px-4 py-2">{{ $asi->fecha_asignacion }} </td>
                                <td class ="border px-4 py-2">{{ $asi->estado_asignacion }}</td>
                                <td class ="border px-4 py-2">{{ $asi->observaciones }}</td>
                            </tr>
                
                        @endforeach 		

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- jQuery + DataTables (CDN) -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
<link rel="stylesheet"
href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
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
$('#Asignaciones').DataTable({
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
