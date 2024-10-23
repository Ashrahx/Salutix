<x-app-layout>
<div class="min-h-screen flex flex-col items-center pt-8">
        <!-- Header -->
        <header class="flex items-center space-x-4">
            <img src="logo.png" alt="Logo" class="h-12">
            <h1 class="text-4xl font-semibold text-[#2B3172]">Salutix</h1>
        </header>

        <!-- Gestión y Paciente -->
        <div class="flex justify-center space-x-8 mt-12">
            <!-- Gestionar turno -->
            <div class="bg-white rounded-lg shadow-lg p-6 w-64 flex flex-col items-center">
                <div class="bg-blue-100 p-4 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-6h3m-3 0H9" />
                    </svg>
                </div>
                <button class="mt-4 text-xl font-semibold text-blue-600">Finalizar</button>
            </div>

            <!-- Información del paciente -->
            <div class="bg-white rounded-lg shadow-lg p-6 w-64 flex flex-col items-center">
                <div class="bg-gray-200 p-4 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A5 5 0 016.344 4.12m11.313 13.684A5 5 0 0117.656 4.12m0 0A5 5 0 014.12 6.344m0 0a5 5 0 0113.684 11.313M5.12 17.804l-.707-.707m-.707-.707l-.707-.707m-.707-.707l-.707-.707" />
                    </svg>
                </div>
                <div class="mt-4 text-center">
                    <p class="font-semibold">Nombre: Jane Cooper</p>
                    <p class="text-sm text-gray-600">Motivo: Consulta</p>
                    <p class="text-sm text-gray-600">Turno: 045</p>
                </div>
            </div>
        </div>

        <!-- Datos del Paciente -->
        <div class="bg-white rounded-lg shadow-lg p-8 mt-12 w-2/3">
            <h2 class="text-2xl font-semibold text-center text-[#2B3172]">Datos del Paciente</h2>
            <form class="grid grid-cols-3 gap-6 mt-8">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Sexo</label>
                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Peso</label>
                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Apellido Paterno</label>
                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Apellido Materno</label>
                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Fecha de nacimiento</label>
                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
                </div>
                <div class="col-span-2">
                    <label class="block text-sm font-medium text-gray-700">Alergias</label>
                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
                </div>
                <div class="col-span-3">
                    <label class="block text-sm font-medium text-gray-700">Historial Médico</label>
                    <textarea class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500" rows="4"></textarea>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>