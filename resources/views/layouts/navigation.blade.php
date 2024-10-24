<nav id="sidebar" class="box-border h-screen w-[250px] p-[5px] px-4 bg-white sticky top-0 self-start transition-all duration-300 ease-in-out overflow-hidden whitespace-nowrap flex flex-col justify-between">
    <div class="sidebar-content h-screen flex flex-col justify-between">
        <ul class="list-none mb-[0.2rem]">
            <li class="flex justify-end mb-4">
                <span class="flex-grow">
                    <x-application-logo width="150" height="50" class="flex-shrink-0 fill-[#9197b3]"/>
                </span>
                <button onclick=toggleSidebar() id="toggle-btn" class="dropdown-btn ml-auto p-[1em] border-0 rounded-[0.5em] bg-transparent cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class=" fill-[#9197b3] transition-transform duration-150 ease-in-out hover:fill-black"  height="24px" viewBox="0 -960 960 960" width="24px">
                        <path d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z" />
                    </svg>
                </button>
            </li>
            <li class="mb-[0.2rem]">
                <a href="{{ route('home') }}" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white {{ Request::routeIs('dashboard') ? 'bg-[#267eb2] text-white' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 fill-current" width="24" height="24" viewBox="0 0 512 512">
                        <path d="M80 212v236a16 16 0 0016 16h96V328a24 24 0 0124-24h80a24 24 0 0124 24v136h96a16 16 0 0016-16V212" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                        <path d="M480 256L266.89 52c-5-5.28-16.69-5.34-21.78 0L32 256M400 179V64h-48v69" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                    </svg>
                    <span class="flex-grow">{{ __('Home') }}</span>
                </a>
            </li>
            @auth
                @if (auth()->user()->role === 'admin')
            <li class="mb-[0.2rem]">
                <button onclick=toggleSubMenu(this) class="dropdown-btn rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] w-full text-left bg-transparent border-0 font-inherit cursor-pointer hover:bg-[#267eb2] hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 fill-current" height="24px" width="24px" fill="#e8eaed" viewBox="0 0 512 512"><path d="M402 168c-2.93 40.67-33.1 72-66 72s-63.12-31.32-66-72c-3-42.31 26.37-72 66-72s69 30.46 66 72z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M336 304c-65.17 0-127.84 32.37-143.54 95.41-2.08 8.34 3.15 16.59 11.72 16.59h263.65c8.57 0 13.77-8.25 11.72-16.59C463.85 335.36 401.18 304 336 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path d="M200 185.94c-2.34 32.48-26.72 58.06-53 58.06s-50.7-25.57-53-58.06C91.61 152.15 115.34 128 147 128s55.39 24.77 53 57.94z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M206 306c-18.05-8.27-37.93-11.45-59-11.45-52 0-102.1 25.85-114.65 76.2-1.65 6.66 2.53 13.25 9.37 13.25H154" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"/></svg>
                    <span  class="flex-grow">
                      {{ __('Users') }}
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 fill-current" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                        <path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z" />
                    </svg>
                </button>
                <ul class="sub-menu grid transition-all duration-300 ease-in-out">
                    <div class="overflow-hidden">
                        <li class="mb-[0.2rem]">
                            <a href="{{ route('admins') }}" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white pl-[2em] {{ Request::routeIs('admins') ? 'bg-[#267eb2] text-white' : '' }}">
                                {{ __('Admins') }}
                            </a>
                        </li>
                        <li class="mb-[0.2rem]">
                            <a href="{{ route('doctors') }}" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white pl-[2em] {{ Request::routeIs('doctors') ? 'bg-[#267eb2] text-white' : '' }}">
                                {{ __('Doctors') }}
                            </a>
                        </li>
                        <li class="mb-[0.2rem]">
                            <a href="{{ route('cashiers') }}" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white pl-[2em] {{ Request::routeIs('cashiers') ? 'bg-[#267eb2] text-white' : '' }}">
                                {{ __('Cashiers') }}
                            </a>
                        </li>
                    </div>
                </ul>
            </li>
                @endif
            @endauth
            @auth
                @if (auth()->user()->role === 'cashier')
            <li class="mb-[0.2rem]">
                <a href="{{ route('cashier') }}" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white {{ Request::routeIs('cashier') ? 'bg-[#267eb2] text-white' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 fill-current" height="24px" width="24px" fill="#e8eaed" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" d="M366.05 146a46.7 46.7 0 01-2.42-63.42 3.87 3.87 0 00-.22-5.26l-44.13-44.18a3.89 3.89 0 00-5.5 0l-70.34 70.34a23.62 23.62 0 00-5.71 9.24h0a23.66 23.66 0 01-14.95 15h0a23.7 23.7 0 00-9.25 5.71L33.14 313.78a3.89 3.89 0 000 5.5l44.13 44.13a3.87 3.87 0 005.26.22 46.69 46.69 0 0165.84 65.84 3.87 3.87 0 00.22 5.26l44.13 44.13a3.89 3.89 0 005.5 0l180.4-180.39a23.7 23.7 0 005.71-9.25h0a23.66 23.66 0 0114.95-15h0a23.62 23.62 0 009.24-5.71l70.34-70.34a3.89 3.89 0 000-5.5l-44.13-44.13a3.87 3.87 0 00-5.26-.22 46.7 46.7 0 01-63.42-2.32z"/><path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" stroke-linecap="round" d="M250.5 140.44l-16.51-16.51M294.52 184.46l-11.01-11M338.54 228.49l-11-11.01M388.07 278.01l-16.51-16.51"/></svg>
                    <span class="flex-grow">{{ __('Cashier') }}</span>
                </a>
            </li>
                @endif
            @endauth
            @auth
                @if (auth()->user()->role === 'doctor')
            <li class="mb-[0.2rem]">
                <a href="{{ route('doctor') }}" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white {{ Request::routeIs('cashier') ? 'bg-[#267eb2] text-white' : '' }}">
                <svg class="flex-shrink-0 fill-current" height="24px" width="24px" fill="#e8eaed" version="1.1"
                    id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 512 512" xml:space="preserve">
                    <g>
                        <g>
                            <g>
                                <path d="M362.667,240h-53.333v-53.333c0-5.891-4.776-10.667-10.667-10.667h-85.333c-5.891,0-10.667,4.776-10.667,10.667V240
                                    h-53.333c-5.891,0-10.667,4.776-10.667,10.667V336c0,5.891,4.776,10.667,10.667,10.667h53.333V400
                                    c0,5.891,4.776,10.667,10.667,10.667h85.333c5.891,0,10.667-4.776,10.667-10.667v-53.333h53.333
                                    c5.891,0,10.667-4.776,10.667-10.667v-85.333C373.333,244.776,368.558,240,362.667,240z M352,325.333h-53.333
                                    c-5.891,0-10.667,4.776-10.667,10.667v53.333h-64V336c0-5.891-4.776-10.667-10.667-10.667H160v-64h53.333
                                    c5.891,0,10.667-4.776,10.667-10.667v-53.333h64v53.333c0,5.891,4.776,10.667,10.667,10.667H352V325.333z"/>
                                <path d="M450.571,112H341.333V81.472c0-24.341-20.16-44.139-44.939-44.139h-84.608c-23.829,0-41.12,18.56-41.12,44.139V112
                                    H61.429C27.517,112.035,0.035,139.517,0,173.429v239.808c0.035,33.912,27.517,61.394,61.429,61.429h389.141
                                    c33.912-0.035,61.394-27.517,61.429-61.429V173.429C511.965,139.518,484.483,112.035,450.571,112z M192,81.472
                                    c0-11.349,6.112-22.805,19.787-22.805h84.608c13.013,0,23.605,10.229,23.605,22.805V112H192V81.472z M490.667,413.205
                                    c-0.006,22.147-17.949,40.104-40.096,40.128H61.429c-22.135-0.023-40.072-17.961-40.096-40.096V173.429
                                    c0.024-22.135,17.961-40.072,40.096-40.096h389.141c22.135,0.024,40.073,17.961,40.096,40.096V413.205z"/>
                            </g>
                        </g>
                    </g>
                </svg>
                    <span class="flex-grow">{{ __('Doctor') }}</span>
                </a>
            </li>
                @endif
            @endauth
        </ul>
        <div class="profile">
            <button onclick=toggleSubMenu(this) class="dropdown-btn py-[5px] px-[6px] rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] w-full text-left bg-transparent border-0 font-inherit cursor-pointer hover:bg-[#267eb2] hover:text-white">

                <div class="flex items-center gap-[1.4rem]">
                    <div class="w-[30px] h-[30px] p-[5px] rounded-full">
                        <img src="{{ asset('images/user.png') }}" draggable="false">
                    </div>

                    <div class="names flex flex-col">
                        <span class="flex-grow">{{ Auth::user()->name }} {{ substr(Auth::user()->last_name, 0, 1) }}.</span>
                        @if (Auth::user()->role === 'admin')
                            <span class="flex-grow text-sm">{{ __('Admin') }}</span>
                        @elseif (Auth::user()->role === 'doctor')
                            <span class="flex-grow text-sm">{{ __('Doctor') }}</span>
                        @elseif (Auth::user()->role === 'cashier')
                            <span class="flex-grow text-sm">{{ __('Cashier') }}</span>
                        @endif

                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 fill-current" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                    <path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z" />
                </svg>
            </button>
            <ul class="sub-menu grid transition-all duration-300 ease-in-out">
                <div class="overflow-hidden">
                    <li class="mb-[0.2rem]">
                        <a href="{{ route('profile.edit') }}" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white pl-[2em] {{ Request::routeIs('profile.edit') ? 'bg-[#267eb2] text-white' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 fill-current" width="24px" height="23px" viewBox="0 0 512 512">
                                <path d="M262.29 192.31a64 64 0 1057.4 57.4 64.13 64.13 0 00-57.4-57.4zM416.39 256a154.34 154.34 0 01-1.53 20.79l45.21 35.46a10.81 10.81 0 012.45 13.75l-42.77 74a10.81 10.81 0 01-13.14 4.59l-44.9-18.08a16.11 16.11 0 00-15.17 1.75A164.48 164.48 0 01325 400.8a15.94 15.94 0 00-8.82 12.14l-6.73 47.89a11.08 11.08 0 01-10.68 9.17h-85.54a11.11 11.11 0 01-10.69-8.87l-6.72-47.82a16.07 16.07 0 00-9-12.22 155.3 155.3 0 01-21.46-12.57 16 16 0 00-15.11-1.71l-44.89 18.07a10.81 10.81 0 01-13.14-4.58l-42.77-74a10.8 10.8 0 012.45-13.75l38.21-30a16.05 16.05 0 006-14.08c-.36-4.17-.58-8.33-.58-12.5s.21-8.27.58-12.35a16 16 0 00-6.07-13.94l-38.19-30A10.81 10.81 0 0149.48 186l42.77-74a10.81 10.81 0 0113.14-4.59l44.9 18.08a16.11 16.11 0 0015.17-1.75A164.48 164.48 0 01187 111.2a15.94 15.94 0 008.82-12.14l6.73-47.89A11.08 11.08 0 01213.23 42h85.54a11.11 11.11 0 0110.69 8.87l6.72 47.82a16.07 16.07 0 009 12.22 155.3 155.3 0 0121.46 12.57 16 16 0 0015.11 1.71l44.89-18.07a10.81 10.81 0 0113.14 4.58l42.77 74a10.8 10.8 0 01-2.45 13.75l-38.21 30a16.05 16.05 0 00-6.05 14.08c.33 4.14.55 8.3.55 12.47z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                            </svg>
                            {{ __('Settings') }}
                        </a>
                    </li>
                    <li class="mb-[0.2rem]">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-nav-link :href="route('logout')"
                             onclick="event.preventDefault();
                             this.closest('form').submit();" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white pl-[2em]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 fill-current" width="24px" height="24px" viewBox="0 0 512 512">
                                    <path d="M304 336v40a40 40 0 01-40 40H104a40 40 0 01-40-40V136a40 40 0 0140-40h152c22.09 0 48 17.91 48 40v40M368 336l80-80-80-80M176 256h256" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                </svg>
                                {{ __('Log Out') }}
                            </x-nav-link>
                        </form>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>

<script>
"use strict";

const toggleButton = document.getElementById('toggle-btn')
const sidebar = document.getElementById('sidebar')

function toggleSidebar() {
    sidebar.classList.toggle('close')
    toggleButton.classList.toggle('rotate')

    closeAllSubMenus()
}

function toggleSubMenu(button) {

    if (!button.nextElementSibling.classList.contains('show')) {
        closeAllSubMenus()
    }

    button.nextElementSibling.classList.toggle('show')
    button.classList.toggle('rotate')

    if (sidebar.classList.contains('close')) {
        sidebar.classList.toggle('close')
        toggleButton.classList.toggle('rotate')
    }
}

function closeAllSubMenus() {
    Array.from(sidebar.getElementsByClassName('show')).forEach(ul => {
        ul.classList.remove('show')
        ul.previousElementSibling.classList.remove('rotate')
    })
}

document.addEventListener("DOMContentLoaded", function () {
    const currentUrl = window.location.pathname;

    const navLinks = document.querySelectorAll('#sidebar a');

    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentUrl) {
            link.classList.add('active');
        }
    });
});
</script>


<style>
.active{
  background: #267eb2;
  color: #fff;
}

#sidebar.close{
  padding: 5px;
  width: 60px;
}

#sidebar .sub-menu{
  display: grid;
  grid-template-rows: 0fr;
  transition: 300ms ease-in-out;

  > div{
    overflow: hidden;
  }
}
#sidebar .sub-menu.show{
  grid-template-rows: 1fr;
}
.dropdown-btn svg{
  transition: 200ms ease;
}
.rotate svg:last-child{
  rotate: 180deg;
}

    @media(max-width: 800px){
  body{
    grid-template-columns: 1fr;
  }
  main{
    padding: 2em 1em 60px 1em;
  }
  .container{
    border: none;
    padding: 0;
  }

  .sidebar-content{
    height: 100%;
    display: grid;
    grid-template-columns: auto 1fr;
  }

  .names{
    display: none;
  }

  .profile{
    display: flex;
    align-items: center;
  }

  #sidebar .sidebar-content ul .content-logo:first-child{
    display: none;
  }
  .sidebar-content ul{
    width: 100%;
    display: flex;
  }
  #sidebar{
    height: 60px;
    width: 100%;
    border-right: none;
    border-top: 1px solid #42434a;
    padding: 0;
    position: fixed;
    top: unset;
    bottom: 0;


    > ul{
      padding: 0;
      display: grid;
      grid-auto-columns: 60px;
      grid-auto-flow: column;
      align-items: center;
      overflow-x: scroll;
    }
    ul li{
      height: 100%;
    }
    ul a, ul .dropdown-btn{
      width: 60px;
      height: 60px;
      padding: 0;
      border-radius: 0;
      justify-content: center;
    }

    ul li span, .sidebar-content ul .content-logo, .dropdown-btn svg:last-child{
      display: none;
    }

    ul li .sub-menu.show, .profile .sub-menu.show{
      position: fixed;
      bottom: 60px;
      left: 0;
      box-sizing: border-box;
      height: 60px;
      width: 100%;
      background-color: #222533;
      border-top: 1px solid #42434a;
      display: flex;
      justify-content: center;

      > div{
        overflow-x: auto;
      }
      li{
        display: inline-flex;
      }
      a{
        box-sizing: border-box;
        padding: 1em;
        width: auto;
        justify-content: center;
      }
    }
  }
}
</style>

