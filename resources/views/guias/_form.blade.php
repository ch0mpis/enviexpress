@php
    // Para edición, $guia llega definido; en creación es null.
    $val = fn($key, $default = '') => old($key, isset($guia) ? ($guia->{$key} ?? $default) : $default);
@endphp


<!-- Número de Guía -->
<div class="mb-4">
    <label for="numero_guia" class="block text-sm font-medium text-gray-700">Número Guía*</label>
    <input type="text" name="numero_guia" id="numero_guia"
           value="{{ old('numero_guia', $guia->numero_guia ?? '') }}"
           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
</div>

<!-- Código QR -->
<div class="mb-4">
    <label for="qr_code" class="block text-sm font-medium text-gray-700">QR</label>
    <input type="text" name="qr_code" id="qr_code"
           value="{{ old('qr_code', $guia->qr_code ?? '') }}"
           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
</div>

<!-- Tipo de Servicio -->
<div class="mb-4">
    <label for="tipo_servicio" class="block text-sm font-medium text-gray-700">Tipo Servicio*</label>
    <input type="text" name="tipo_servicio" id="tipo_servicio"
           value="{{ old('tipo_servicio', $guia->tipo_servicio ?? '') }}"
           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
</div>

<!-- Remitente -->
<div class="mb-4">
    <label for="id_remitente" class="block text-sm font-medium text-gray-700">Remitente*</label>
    <select id="id_remitente" name="id_remitente"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        <option value="">Seleccione Remitente</option>
        @foreach($remitentes as $rem)
            <option value="{{ $rem->id_persona }}"
                {{ old('id_remitente', $guia->id_remitente ?? '') == $rem->id_persona ? 'selected' : '' }}>
                {{ $rem->nombres }} {{ $rem->apellidos }}
            </option>
        @endforeach
    </select>
</div>

<!-- Destinatario -->
<div class="mb-4">
    <label for="id_destinatario" class="block text-sm font-medium text-gray-700">Destinatario*</label>
    <select id="id_destinatario" name="id_destinatario"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        <option value="">Seleccione Destinatario</option>
        @foreach($destinatarios as $dest)
            <option value="{{ $dest->id_persona }}"
                {{ old('id_destinatario', $guia->id_destinatario ?? '') == $dest->id_persona ? 'selected' : '' }}>
                {{ $dest->nombres }} {{ $dest->apellidos }}
            </option>
        @endforeach
    </select>
</div>

<!-- Peso Total -->
<div class="mb-4">
    <label for="peso_total_kg" class="block text-sm font-medium text-gray-700">Peso Total (Kg)*</label>
    <input type="number" step="0.01" name="peso_total_kg" id="peso_total_kg"
           value="{{ old('peso_total_kg', $guia->peso_total_kg ?? '') }}"
           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
</div>

<!-- Valor Declarado -->
<div class="mb-4">
    <label for="valor_declarado" class="block text-sm font-medium text-gray-700">Valor Declarado*</label>
    <input type="number" step="0.01" name="valor_declarado" id="valor_declarado"
           value="{{ old('valor_declarado', $guia->valor_declarado ?? '') }}"
           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
</div>

<!-- Fecha Creación -->
<div class="mb-4">
    <label for="fecha_creacion" class="block text-sm font-medium text-gray-700">Fecha Creación*</label>
    <input type="datetime-local" name="fecha_creacion" id="fecha_creacion"
           value="{{ old('fecha_creacion', isset($guia->fecha_creacion) ? \Carbon\Carbon::parse($guia->fecha_creacion)->format('Y-m-d\TH:i') : '') }}"
           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
</div>

<!-- Estado -->
<div class="mb-4">
    <label for="estado_actual" class="block text-sm font-medium text-gray-700">Estado*</label>
    <input type="text" name="estado_actual" id="estado_actual"
           value="{{ old('estado_actual', $guia->estado_actual ?? '') }}"
           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
</div>

<!-- Observaciones -->
<div class="mb-4">
    <label for="observaciones" class="block text-sm font-medium text-gray-700">Observaciones</label>
    <textarea name="observaciones" id="observaciones" rows="3"
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('observaciones', $guia->observaciones ?? '') }}</textarea>
</div>