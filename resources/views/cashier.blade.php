<x-app-layout>
<style>
    .status.attending {
      background: rgba(22, 192, 152, 0.4);
      border: 1px solid #00b087;
      border-radius: 4px;
      color: #008767;
    }

    .status.attended {
      background: #ffc5c5;
      border: 1px solid #df0404;
      border-radius: 4px;
      color: #df0404;
    }
</style>
    <div class="flex justify-center items-center px-4 sm:px-6 lg:px-8">
        <div class="bg-white p-8 sm:p-12 lg:p-16 rounded-lg shadow-lg w-full max-w-5xl">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-center mb-6 lg:mb-8">
                {{ __('Complete patient information') }}
            </h2>
            <p class="text-center text-gray-600 text-lg sm:text-xl mb-6 lg:mb-10">
                {{ __("Please enter the patient's information to create the shift") }}.
            </p>

            <form action="{{ route('patients.store') }}" method="POST" class="space-y-6 lg:space-y-8">
                @csrf
                <!-- Name and Last Name -->
                <div class="grid grid-cols-2 gap-6 lg:gap-8">
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" class="block text-lg sm:text-xl font-medium text-gray-700" />
                        <x-text-input type="text" name="name" id="name" class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-base sm:text-lg" placeholder="{{ __('Enter name') }}" />
                    </div>

                    <!-- Last Name -->
                    <div>
                        <x-input-label for="last_name" :value="__('Last name')" class="block text-lg sm:text-xl font-medium text-gray-700" />
                        <x-text-input type="text" name="last_name" id="last_name" class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-base sm:text-lg" placeholder="{{ __('Enter last name') }}" />
                    </div>
                </div>

                <!-- Middle Name and Reason -->
                <div class="grid grid-cols-2 gap-6 lg:gap-8">
                    <!-- Middle Name -->
                    <div>
                        <x-input-label for="middle_name" :value="__('Middle name')" class="block text-lg sm:text-xl font-medium text-gray-700" />
                        <x-text-input type="text" name="middle_name" id="middle_name" class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-base sm:text-lg" placeholder="{{ __('Enter middle name') }}" />
                    </div>

                    <div class="flex flex-col items">
                        <x-input-label for="gender" :value="__('Gender')" class="text-left block text-lg sm:text-xl font-medium text-gray-700" />
                        <select id="gender" name="gender" class="mt-2 block w-full px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-base sm:text-lg">
                            <option value="male">{{ __('Male') }}</option>
                            <option value="female">{{ __('Female') }}</option>
                        </select>
                    </div>
                </div>

                     <!-- Reason -->
                    <div class="flex flex-col items">
                        <x-input-label for="reason" :value="__('Reason')" class="text-left block text-lg sm:text-xl font-medium text-gray-700" />
                        <select id="reason" name="reason" class="mt-2 block w-2/4 px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-base sm:text-lg">
                            <option value="consultation">{{ __('Consultation') }}</option>
                            <option value="application">{{ __('Application') }}</option>
                        </select>
                    </div>

                <!-- Submit Button -->
                <div class="flex justify-center mt-10 lg:mt-12">
                    <x-primary-button type="submit" class="py-3 px-8 sm:py-4 sm:px-10 rounded-lg shadow-md w-full sm:w-auto text-lg sm:text-xl lg:px-12">
                        {{ __('Create shift') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
