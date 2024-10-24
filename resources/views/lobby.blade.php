<x-guest-layout class="bg-[#F0F4FF]">
    <div class="max-w-4xl mx-auto p-8">
        <div class="flex items-center space-x-4">
            <x-application-logo class="w-96" />
        </div>

        <div class="mt-12 bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-center text-2xl font-bold text-gray-700">{{ __('Current shift') }}</h2>
            <div class="mt-8 text-center">
                <span class="text-7xl font-extrabold text-gray-900">{{ $currentTurn }}</span>
            </div>
        </div>

        <div class="py-8">
            <div class="max-w-7xl mx-auto">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <table class="w-full border-collapse">
                        <thead class="bg-[#f4f4f4]">
                            <tr>
                                <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Patient') }}</th>
                                <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Shift') }}</th>
                                <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Reason') }}</th>
                                <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Status') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($turns as $turn)
                            <tr>
                                <td class="p-4 text-left border-b border-gray-300 font-medium">{{ $turn->patient->name }} {{ $turn->patient->last_name }}</td>
                                <td class="p-4 text-left border-b border-gray-300 font-medium">{{ $turn->turn_number }}</td>
                                <td class="p-4 text-left border-b border-gray-300 font-medium">{{ $turn->reason == 'consultation' ? __('Consultation') : __('Application') }}</td>
                                <td class="p-4 text-left border-b border-gray-300 font-medium">
                                    <span class="px-2.5 py-1.5 text-[0.9em] {{ $turn->status == 'on hold' ? 'bg-[#FFFDC5] border border-[#DF9504] rounded-[4px] text-[#DF9504]' 
                                        : ($turn->status == 'attending' ? 'bg-[#16C09866] border border-[#00b087] rounded-[4px] text-[#008767]' 
                                        : 'bg-gray-400 border border-gray-800 rounded-[4px] text-gray-800') }}">
                                        {{ __($turn->status) }}
                                    </span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center py-6">
                                    {{ __('There are no patients') }}
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</x-guest-layout>