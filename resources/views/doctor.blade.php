<x-app-layout>
    <div class="xl:w-[900px] xl:m-auto">
        <div class="flex gap-x-10 justify-center">
            <div class=" px-6 py-8 bg-white rounded-2xl flex flex-col items-center w-full xl:py-2">
                <h2 class="text-2xl font-bold">Gestor de turnos</h2>
                <a href="" class="py-4 px-8 bg-customBlue rounded-lg mt-5 xl:px-4 xl:py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 xl:w-12" fill="#fff" viewBox="0 0 512 512">
                        <path d="M133 440a35.37 35.37 0 01-17.5-4.67c-12-6.8-19.46-20-19.46-34.33V111c0-14.37 7.46-27.53 19.46-34.33a35.13 35.13 0 0135.77.45l247.85 148.36a36 36 0 010 61l-247.89 148.4A35.5 35.5 0 01133 440z" />
                    </svg>
                </a>
                <span class="mt-3 text-[17px] font-medium">Llamar cliente</span>
            </div>

            <div class=" px-6 py-8 bg-white rounded-2xl flex flex-col items-center gap-y-3 w-full xl:py-2">
                <h2 class="text-2xl font-bold">Paciente</h2>
                <img src="http://127.0.0.1:8000/images/user.png" alt="" class="w-12">
                <h4 class="font-medium">Nombre: <span>Yahir Lopez</span></h4>
                <h4 class="font-medium">Motivo: <span>Consulta</span></h4>
                <h4 class="font-medium">Turno: <span>001</span></h4>
            </div>
        </div>


        <form action="" method="POST" class="lg:p-4 space-y-6 lg:space-y-8 bg-white xl:p-3 xl:mt-5 xl:rounded-xl">
            @csrf
            <!-- Name and Last Name -->
            <div class="grid grid-cols-3 gap-6 lg:gap-8">
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" class="block text-lg sm:text-xl font-medium text-gray-700" />
                    <x-text-input type="text" name="name" id="name" class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-base sm:text-lg" placeholder="{{ __('') }}" />
                </div>

                <div>
                    <x-input-label for="last_name" :value="__('Last name')" class="block text-lg sm:text-xl font-medium text-gray-700" />
                    <x-text-input type="text" name="last_name" id="last_name" class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-base sm:text-lg" placeholder="{{ __('') }}" />
                </div>

                <div>
                    <x-input-label for="middle_name" :value="__('Middle name')" class="block text-lg sm:text-xl font-medium text-gray-700" />
                    <x-text-input type="text" name="middle_name" id="middle_name" class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-base sm:text-lg" />
                </div>

                <div>
                    <x-input-label for="gender" :value="__('Gender')" class="text-left block text-lg sm:text-xl font-medium text-gray-700" />
                    <select id="gender" name="gender" class="mt-2 block w-full px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-base sm:text-lg">
                        <option value="male">{{ __('Male') }}</option>
                        <option value="female">{{ __('Female') }}</option>
                    </select>
                </div>

                <div>
                    <x-input-label for="weight" :value="__('Weight') . '(kg)'" class="block text-lg sm:text-xl font-medium text-gray-700" />
                    <x-text-input type="number" name="weight" id="weight" class="mt-2 block w-2/6 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-base sm:text-lg" />
                </div>


                <div>
                    <x-input-label for="birthdate" :value="__('Birth date')" class="block text-lg sm:text-xl font-medium text-gray-700" />
                    <x-text-input type="date" name="birthdate" id="birthdate" class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-base sm:text-lg" />
                </div>
            </div>


            <div>
                <x-input-label for="allergies" :value="__('Allergies')" class="block text-lg sm:text-xl font-medium text-gray-700" />
                <textarea name="allergies" id="allergies" class="w-full resize-none rounded-md mt-2 focus:border-blue-500 border-gray-300"></textarea>
            </div>

            <div>
                <x-input-label for="medical_history" :value="__('Medical history')" class="block text-lg sm:text-xl font-medium text-gray-700" />
                <textarea name="medical_history" id="medical_history" class="w-full resize-none rounded-md mt-2 focus:border-blue-500 border-gray-300"></textarea>
            </div>

        </form>
    </div>

</x-app-layout>