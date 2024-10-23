<x-app-layout>
  <header>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight max-w-7xl mx-auto pt-6">
        {{ __('Welcome') }} {{ Auth::user()->name }}
      </h2>
    </div>
  </header>

  <div class="flex flex-col max-w-7xl md:flex-row justify-center items-center overflow-hidden sm:rounded-lg space-y-4 md:space-y-0 md:space-x-4 p-4 mx-auto sm:px-6 lg:px-8">
  <!-- Contenedor 1 -->
  <div class="flex items-center bg-white justify-between p-4 rounded-lg shadow-md w-full md:w-1/3">
    <div class="flex flex-col">
      <h2 class="text-lg md:text-xl font-semibold">{{ __('Registered patients') }}</h2>
      <span class="text-xl md:text-2xl font-bold">{{ $total }}</span>
    </div>
    <div class="relative max-w-[70px] md:max-w-[90px] min-w-[40px] flex-1">
      <svg class="w-16 h-[70px] md:w-20 md:h-[90px]" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="none">
        <circle cx="31.89" cy="22.71" r="5.57" fill="#43C9F5"/>
        <path d="M43.16,43.74A11.28,11.28,0,0,0,31.89,32.47h0A11.27,11.27,0,0,0,20.62,43.74Z" fill="#43C9F5"/> <!-- Color fuerte -->
        <circle cx="48.46" cy="22.71" r="5.57" fill="#77EBFF"/> <!-- Color fuerte -->
        <path d="M46.87,43.74H59.73A11.27,11.27,0,0,0,48.46,32.47h0a11.24,11.24,0,0,0-5.29,1.32" fill="#77EBFF"/> <!-- Color fuerte -->
        <circle cx="15.54" cy="22.71" r="5.57" fill="#528FDD"/> <!-- Color fuerte -->
        <path d="M17.13,43.74H4.27A11.27,11.27,0,0,1,15.54,32.47h0a11.24,11.24,0,0,1,5.29,1.32" fill="#528FDD"/> <!-- Color claro -->
      </svg>
    </div>
  </div>
  
  <!-- Contenedor 2 -->
  <div class="flex items-center bg-white justify-between p-4 rounded-lg shadow-md w-full md:w-1/3">
    <div class="flex flex-col">
      <h2 class="text-lg md:text-xl font-semibold">{{ __('Female') . 's' }}</h2>
      <span class="text-xl md:text-2xl font-bold">{{ $female }}</span>
    </div>
    <div class="relative max-w-[70px] md:max-w-[90px] min-w-[40px] flex-1">
      <?php
        $femalePercentage = round(($total > 0) ? ($female / $total) * 100 : 0, 2);
      ?>
      <svg class="w-16 h-[70px] md:w-20 md:h-[90px]" viewBox="0 0 36 36">
        <path class="fill-none" stroke="#6f5684" stroke-width="1.2" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
        <path class="fill-none" stroke="#ff7dcb" stroke-width="1.6" stroke-linecap="round" style="animation: progress 1s ease-out forwards;"
          stroke-dasharray="{{ $femalePercentage }}, 100" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
        <text x="18" y="20.35" class="fill-black font-normal" font-size="0.5em" text-anchor="middle">{{ $femalePercentage }}%</text>
      </svg>
    </div>
  </div>

  <!-- Contenedor 3 -->
  <div class="flex items-center bg-white justify-between p-4 rounded-lg shadow-md w-full md:w-1/3">
    <div class="flex flex-col">
      <h2 class="text-lg md:text-xl font-semibold">{{ __('Male') . 's' }}</h2>
      <span class="text-xl md:text-2xl font-bold">{{ $male }}</span>
    </div>
    <div class="relative max-w-[70px] md:max-w-[90px] min-w-[40px] flex-1">
      <?php
        $malePercentage = round(($total > 0) ? ($male / $total) * 100 : 0, 2);
      ?>
      <svg class="w-16 h-[70px] md:w-20 md:h-[90px]" viewBox="0 0 36 36">
        <path class="fill-none" stroke="#557b88" stroke-width="1.2" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
        <path class="fill-none" stroke="#00cfde" stroke-width="1.6" stroke-linecap="round" style="animation: progress 1s ease-out forwards;"
          stroke-dasharray="{{ $malePercentage }}, 100" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831"></path>
        <text x="18" y="20.35" class="fill-black font-normal" font-size="0.5em" text-anchor="middle">{{ $malePercentage }}%</text>
      </svg>
    </div>
  </div>
</div>




  <div class="py-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="flex justify-between items-center p-5 border-b border-gray-300">
          <h2 class="text-[1.375rem] font-bold m-0">{{ __ ('Patients') }}</h2>
          @if(Session::has('success'))
          <div role="alert">
            {{ Session::get('success') }}
          </div>
          @endif
          <div class="flex gap-2.5">
            <div class="flex leading-7 items-center relative max-w-48 ">
              <svg class="absolute left-4 fill-[#9e9e9e] w-4 h-4" aria-hidden="true" viewBox="0 0 24 24">
                <g>
                  <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                </g>
              </svg>
              <input placeholder="{{ __ ('Search') }}" type="search" class="w-full h-10 leading-7 py-4 pl-10 border-2 border-transparent rounded-lg outline-none bg-gray-100 text-black transition ease-in-out duration-300 placeholder:text-[#9197B3]">
            </div>
          </div>
        </div>
        <table class="w-full border-collapse">
          <thead class="bg-[#f4f4f4]">
            <tr>
              <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Name') }}</th>
              <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Last name') }}</th>
              <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Middle name') }}</th>
              <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Gender') }}</th>
              <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Created by') }}</th>
              <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Created at') }}</th>
              <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Actions') }}</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($patients as $patient)
            <tr>
              <td class="p-4 text-left border-b border-gray-300 font-medium">{{ $patient->name }}</td>
              <td class="p-4 text-left border-b border-gray-300 font-medium">{{ $patient->last_name }}</td>
              <td class="p-4 text-left border-b border-gray-300 font-medium">{{ $patient->middle_name }}</td>
              <td class="p-4 text-left border-b border-gray-300 font-medium">
              {{ 
                $patient->gender === 'male' ? __('Male') :
                ($patient->gender === 'female' ? __('Female') :
                __('Not specified'));
              }}
              </td>
              <td class="p-4 text-left border-b border-gray-300 font-medium">{{ $patient->creator->name }} {{ $patient->creator->last_name }}</td>
              <td class="p-4 text-left border-b border-gray-300 font-medium">{{ $patient->created_at->format('d/m/Y') }}</td>
              <td class="p-4 text-left border-b border-gray-300 font-medium">
                <div class="flex items-center gap-2.5">

                  <x-action-button class="bg-[#267EB2] text-white hover:bg-[#154E7A]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[15px] h-[15px]" viewBox="0 0 512 512" fill="currentColor"><path d="M416 221.25V416a48 48 0 01-48 48H144a48 48 0 01-48-48V96a48 48 0 0148-48h98.75a32 32 0 0122.62 9.37l141.26 141.26a32 32 0 019.37 22.62z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M256 56v120a32 32 0 0032 32h120" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                  </x-action-button>

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
  </div>


  <style>
    @keyframes progress {
      0% {
        stroke-dasharray: 0 100;
      }
    }

    
  </style>

</x-app-layout>