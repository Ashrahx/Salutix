<x-app-layout>
    <header>
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight max-w-7xl mx-auto pt-6">
                 Welcome back, {{ Auth::user()->name }}!
            </h2>
        </div>
    </header>
    
    <div class="pb-12 pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center items-center bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
            <div class="flex items-center text-center p-5 w-[30%] justify-center gap-[2rem] border-r-[3px] border-gray-50 total-users">
                <div class="w-20 h-20 rounded-full flex justify-center items-center mb-2.5 text-2xl bg-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" fill="#e8eaed" viewBox="0 0 512 512"><path d="M402 168c-2.93 40.67-33.1 72-66 72s-63.12-31.32-66-72c-3-42.31 26.37-72 66-72s69 30.46 66 72z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M336 304c-65.17 0-127.84 32.37-143.54 95.41-2.08 8.34 3.15 16.59 11.72 16.59h263.65c8.57 0 13.77-8.25 11.72-16.59C463.85 335.36 401.18 304 336 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path d="M200 185.94c-2.34 32.48-26.72 58.06-53 58.06s-50.7-25.57-53-58.06C91.61 152.15 115.34 128 147 128s55.39 24.77 53 57.94z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M206 306c-18.05-8.27-37.93-11.45-59-11.45-52 0-102.1 25.85-114.65 76.2-1.65 6.66 2.53 13.25 9.37 13.25H154" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"/></svg>
                </div>
                <div class="info">
                    <p class="label">Pacientes registrados</p>
                    <p class="value">{{ $total }}</p>
                </div>
            </div>

            <div class="flex items-center text-center p-5 w-[30%] justify-center gap-[2rem] border-r-[3px] border-gray-50 inactive-users">
                 <div class="w-20 h-20 rounded-full flex justify-center items-center mb-2.5 text-2xl bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 512 512"><circle cx="216" cy="296" r="152" fill="none" stroke="#5499fc" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="#5499fc" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M448 160V64h-96M324 188L448 64"/></svg>
                 </div>
                 <div class="info">
                    <p class="label">Pacientes masculinos</p>
                    <p class="value">{{ $male }}</p>
                 </div>
            </div>

            <div class="flex items-center text-center p-5 w-[30%] justify-center gap-[2rem] active-users">
                <div class="w-20 h-20 rounded-full flex justify-center items-center mb-2.5 text-2xl bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 512 512"><circle cx="256" cy="184" r="152" fill="none" stroke="#e722ae" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="#e722ae" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 336v144M314 416H198"/></svg>
                </div>
                <div class="info">
                    <p class="label">Pacientes femeninos</p>
                    <p class="value">{{ $female }}</p>
                </div>
            </div>

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
        <table class="w-full border-collapse block overflow-x-auto ">
          <thead class="bg-[#f4f4f4]">
            <tr>
              <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Name') }}</th>
              <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Last name') }}</th>
              <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Middle name') }}</th>
              <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Gender') }}</th>
              <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Birth date') }}</th>
              <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Weight') }}</th>
              <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Height') }}</th>
              <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Allergies') }}</th>
              <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Medical history') }}</th>
              <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Created by') }}</th>
              <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Created at') }}</th>
              <th class="p-4 px-2 text-left border-b border-gray-300 font-medium">{{ __('Updated at') }}</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($patients as $patient)
            <tr>
              <td class="p-4 text-left border-b border-gray-300 font-medium">{{ $patient->name }}</td>
              <td class="p-4 text-left border-b border-gray-300 font-medium">{{ $patient->last_name }}</td>
              <td class="p-4 text-left border-b border-gray-300 font-medium">{{ $patient->middle_name }}</td>
              <td class="p-4 text-left border-b border-gray-300 font-medium">{{ $patient->creator->name }} {{ $patient->creator->last_name }}</td>
            </tr>
            @empty
            <tr>
              <td colspan="6">
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

</x-app-layout>
