<x-app-layout>

  <style>
    .status.active {
      background: rgba(22, 192, 152, 0.4);
      border: 1px solid #00b087;
      border-radius: 4px;
      color: #008767;
    }

    .status.inactive {
      background: #ffc5c5;
      border: 1px solid #df0404;
      border-radius: 4px;
      color: #df0404;
    }
  </style>

  <div class="py-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="flex justify-between items-center p-5 border-b border-gray-300">
          <h2 class="text-[1.375rem] font-bold m-0">{{ __ ('Cashiers') }}</h2>
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
            <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" onclick="showModal()">
              {{ __ ('Add') }}
            </a>
          </div>
        </div>
        <table class="w-full border-collapse">
          <thead class="bg-[#f4f4f4]">
            <tr>
              <th class="p-4 text-left border-b border-gray-300 font-medium">{{ __('Name') }}</th>
              <th class="p-4 text-left border-b border-gray-300 font-medium">{{ __('Last name') }}</th>
              <th class="p-4 text-left border-b border-gray-300 font-medium">{{ __('Middle name') }}</th>
              <th class="p-4 text-left border-b border-gray-300 font-medium">{{ __('Email') }}</th>
              <th class="p-4 text-left border-b border-gray-300 font-medium">{{ __('Created by') }}</th>
              <th class="p-4 text-left border-b border-gray-300 font-medium">{{ __('Status') }}</th>
              <th class="p-4 text-left border-b border-gray-300 font-medium">{{ __('Actions') }}</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($cashiers as $cashier)
            <tr>
              <td class="p-4 text-left border-b border-gray-300 font-medium">{{ $cashier->name }}</td>
              <td class="p-4 text-left border-b border-gray-300 font-medium">{{ $cashier->last_name }}</td>
              <td class="p-4 text-left border-b border-gray-300 font-medium">{{ $cashier->middle_name }}</td>
              <td class="p-4 text-left border-b border-gray-300 font-medium">{{ $cashier->email }}</td>
              <td class="p-4 text-left border-b border-gray-300 font-medium">{{ $cashier->creator->name }} {{ $cashier->creator->last_name }}</td>
              <td class="p-4 text-left border-b border-gray-300 font-medium"><span class="status px-2.5 py-1.5 rounded-full text-white text-[0.9em] {{ $cashier->status }}">{{ __($cashier->status) }}</span></td>
              <td class="p-4 text-left border-b border-gray-300 font-medium">
                <div class="flex items-center gap-2.5">

                  <x-action-button class="bg-[#267EB2] text-white hover:bg-[#154E7A]" data-id="{{ $cashier->id }}" onclick="openEditModal(this)">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.5" d="M20.8487 8.71306C22.3844 7.17735 22.3844 4.68748 20.8487 3.15178C19.313 1.61607 16.8231 1.61607 15.2874 3.15178L14.4004 4.03882C14.4125 4.0755 14.4251 4.11268 14.4382 4.15035C14.7633 5.0875 15.3768 6.31601 16.5308 7.47002C17.6848 8.62403 18.9133 9.23749 19.8505 9.56262C19.888 9.57563 19.925 9.58817 19.9615 9.60026L20.8487 8.71306Z" fill="currentColor" />
                      <path d="M14.4386 4L14.4004 4.03819C14.4125 4.07487 14.4251 4.11206 14.4382 4.14973C14.7633 5.08687 15.3768 6.31538 16.5308 7.4694C17.6848 8.62341 18.9133 9.23686 19.8505 9.56199C19.8876 9.57489 19.9243 9.58733 19.9606 9.59933L11.4001 18.1598C10.823 18.7369 10.5343 19.0255 10.2162 19.2737C9.84082 19.5665 9.43469 19.8175 9.00498 20.0223C8.6407 20.1959 8.25351 20.3249 7.47918 20.583L3.39584 21.9442C3.01478 22.0712 2.59466 21.972 2.31063 21.688C2.0266 21.4039 1.92743 20.9838 2.05445 20.6028L3.41556 16.5194C3.67368 15.7451 3.80273 15.3579 3.97634 14.9936C4.18114 14.5639 4.43213 14.1578 4.7249 13.7824C4.97307 13.4643 5.26165 13.1757 5.83874 12.5986L14.4386 4Z" fill="currentColor" />
                    </svg>
                  </x-action-button>

                  @php
                  $deleteRoute = route('cashier.delete', ['id' => $cashier->id]);
                  @endphp

                  <x-action-button class="bg-[#ff0000] hover:bg-[#df0404] text-white" onclick="showDeleteModal('{{ $deleteRoute }}')">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </x-action-button>
                </div>


              </td>
            </tr>
            @empty
            <tr>
              <td colspan="7" class="text-center py-6">
                {{ __('There are no cashiers') }}
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>

  <x-danger-modal actionUrl="" />

  <div id="createUserModal" class="hidden fixed top-0 left-0 w-full h-full justify-center items-center" style="background: rgba(0, 0, 0, 0.5);">
    <div class="bg-white p-5 rounded-lg w-[500px] max-w-[90%]">
      <h3 class="text-lg font-semibold mb-4">{{ __('Create cashier') }}</h3>

      <form method="POST" action="{{ route('cashier.store') }}">
        @csrf
        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
          <input id="name" name="name" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
          <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mb-4">
          <label for="last_name" class="block text-sm font-medium text-gray-700">{{ __('Last name') }}</label>
          <input id="last_name" name="last_name" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
          <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <div class="mb-4">
          <label for="middle_name" class="block text-sm font-medium text-gray-700">{{ __('Middle name') }}</label>
          <input id="middle_name" name="middle_name" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
          <x-input-error :messages="$errors->get('middle_name')" class="mt-2" />
        </div>

        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
          <input id="email" name="email" type="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
          <input id="password" name="password" type="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end">
          <x-secondary-button onclick="hideModal()" type="button">{{ __('Cancel') }}</x-secondary-button>
          <x-primary-button type="submit" class="ml-2">{{ __('Create') }}</x-primary-button>
        </div>
      </form>
    </div>
  </div>


</x-app-layout>

<script>
  function showModal() {
    document.getElementById('createUserModal').classList.add('flex');
    document.getElementById('createUserModal').classList.remove('hidden');
  }

  function hideModal() {
    document.getElementById('createUserModal').classList.remove('flex');
    document.getElementById('createUserModal').classList.add('hidden');
  }

</script>