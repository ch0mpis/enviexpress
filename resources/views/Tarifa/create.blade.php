<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<div style="padding: 20px;">

<div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow">


        <!-- Nombre Tarifa -->
        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre Tarifa</label>
            <input type="text" id="nombre" name="nombre"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <!-- Ubi Origen y Ubi Destino -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
            <div>
                <label for="origen" class="block text-sm font-medium text-gray-700">Ubi Origen</label>
                <input type="text" id="origen" name="origen"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="destino" class="block text-sm font-medium text-gray-700">Ubi Destino</label>
                <input type="text" id="destino" name="destino"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
        </div>

        <!-- Tipo servicio -->
        <div class="mb-4">
            <label for="servicio" class="block text-sm font-medium text-gray-700">Tipo servicio</label>
            <input type="text" id="servicio" name="servicio"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <!-- Peso Min y Peso Max -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
            <div>
                <label for="peso_min" class="block text-sm font-medium text-gray-700">Peso Min</label>
                <input type="number" id="peso_min" name="peso_min"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="peso_max" class="block text-sm font-medium text-gray-700">Peso Max</label>
                <input type="number" id="peso_max" name="peso_max"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
        </div>

        <!-- Tarifa Base y Tarifa Adicional -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
            <div>
                <label for="tarifa_base" class="block text-sm font-medium text-gray-700">Tarifa Base</label>
                <input type="number" id="tarifa_base" name="tarifa_base"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="tarifa_adicional" class="block text-sm font-medium text-gray-700">Tarifa Adicional</label>
                <input type="number" id="tarifa_adicional" name="tarifa_adicional"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
        </div>

        <!-- Tiempo de Entrega -->
        <div class="mb-4">
            <label for="tiempo_entrega" class="block text-sm font-medium text-gray-700">Tiempo Entrega (horas)</label>
            <input type="number" id="tiempo_entrega" name="tiempo_entrega"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <!-- Vigencia Desde y Hasta -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
            <div>
                <label for="vigencia_desde" class="block text-sm font-medium text-gray-700">Vigencia Desde</label>
                <input type="date" id="vigencia_desde" name="vigencia_desde"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="vigencia_hasta" class="block text-sm font-medium text-gray-700">Vigencia Hasta</label>
                <input type="date" id="vigencia_hasta" name="vigencia_hasta"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
        </div>

        <!-- Botón -->
        <div class="mt-6">
            <button type="submit"
                    class="px-6 py-2 bg-indigo-600 text-white font-medium rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                Guardar Tarifa
            </button>
        </div>
    </form>
</div>



</div>

</x-app-layout>