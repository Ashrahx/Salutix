<nav id="sidebar" class="box-border h-screen w-[250px] p-[5px] px-4 bg-white sticky top-0 self-start transition-all duration-300 ease-in-out overflow-hidden whitespace-nowrap flex flex-col justify-between">
    <div class="sidebar-content h-screen flex flex-col justify-between">
        <ul class="list-none mb-[0.2rem]">
            <li class="flex justify-end mb-4">
                <span class="flex-grow">
                    <x-application-logo class="flex-shrink-0 fill-[#9197b3]"/>
                </span>
                <button onclick=toggleSidebar() id="toggle-btn" class="dropdown-btn ml-auto p-[1em] border-0 rounded-[0.5em] bg-transparent cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class=" fill-[#9197b3] transition-transform duration-150 ease-in-out hover:fill-black"  height="24px" viewBox="0 -960 960 960" width="24px">
                        <path d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z" />
                    </svg>
                </button>
            </li>
            <li class="mb-[0.2rem]">
                <a href="/" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 fill-current" width="24" height="24" viewBox="0 0 512 512">
                        <path d="M80 212v236a16 16 0 0016 16h96V328a24 24 0 0124-24h80a24 24 0 0124 24v136h96a16 16 0 0016-16V212" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                        <path d="M480 256L266.89 52c-5-5.28-16.69-5.34-21.78 0L32 256M400 179V64h-48v69" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                    </svg>
                    <span class="flex-grow">Home</span>
                </a>
            </li>
            <li class="mb-[0.2rem]">
                <button onclick=toggleSubMenu(this) class="dropdown-btn rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] w-full text-left bg-transparent border-0 font-inherit cursor-pointer hover:bg-[#267eb2] hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 fill-current" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                        <path d="M520-640v-160q0-17 11.5-28.5T560-840h240q17 0 28.5 11.5T840-800v160q0 17-11.5 28.5T800-600H560q-17 0-28.5-11.5T520-640ZM120-480v-320q0-17 11.5-28.5T160-840h240q17 0 28.5 11.5T440-800v320q0 17-11.5 28.5T400-440H160q-17 0-28.5-11.5T120-480Zm400 320v-320q0-17 11.5-28.5T560-520h240q17 0 28.5 11.5T840-480v320q0 17-11.5 28.5T800-120H560q-17 0-28.5-11.5T520-160Zm-400 0v-160q0-17 11.5-28.5T160-360h240q17 0 28.5 11.5T440-320v160q0 17-11.5 28.5T400-120H160q-17 0-28.5-11.5T120-160Zm80-360h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z" />
                    </svg>
                    <span  class="flex-grow">Dashboard</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 fill-current" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                        <path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z" />
                    </svg>
                </button>
                <ul class="sub-menu grid transition-all duration-300 ease-in-out">
                    <div class="overflow-hidden">
                        <li class="mb-[0.2rem]">
                            <a href="#" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white pl-[2em]">
                                Admin
                            </a>
                        </li>
                        <li class="mb-[0.2rem]">
                            <a href="#" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white pl-[2em]">
                                Doctor
                            </a>
                        </li>
                        <li class="mb-[0.2rem]">
                            <a href="#" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white pl-[2em]">
                                Cashier
                            </a>
                        </li>
                    </div>
                </ul>
            </li>
            <li class="mb-[0.2rem]">
                <button onclick=toggleSubMenu(this) class="dropdown-btn rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] w-full text-left bg-transparent border-0 font-inherit cursor-pointer hover:bg-[#267eb2] hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 fill-current" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                        <path d="m221-313 142-142q12-12 28-11.5t28 12.5q11 12 11 28t-11 28L250-228q-12 12-28 12t-28-12l-86-86q-11-11-11-28t11-28q11-11 28-11t28 11l57 57Zm0-320 142-142q12-12 28-11.5t28 12.5q11 12 11 28t-11 28L250-548q-12 12-28 12t-28-12l-86-86q-11-11-11-28t11-28q11-11 28-11t28 11l57 57Zm339 353q-17 0-28.5-11.5T520-320q0-17 11.5-28.5T560-360h280q17 0 28.5 11.5T880-320q0 17-11.5 28.5T840-280H560Zm0-320q-17 0-28.5-11.5T520-640q0-17 11.5-28.5T560-680h280q17 0 28.5 11.5T880-640q0 17-11.5 28.5T840-600H560Z" />
                    </svg>
                    <span  class="flex-grow">Todo-Lists</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 fill-current" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                        <path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z" />
                    </svg>
                </button>
                <ul class="sub-menu grid transition-all duration-300 ease-in-out">
                    <div class="overflow-hidden">
                        <li>
                            <a href="#" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white pl-[2em]">
                                Work
                            </a>
                        </li>
                        <li>
                            <a href="#" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white pl-[2em]">
                                Private
                            </a>
                        </li>
                        <li>
                            <a href="#" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white pl-[2em]">
                                Coding
                            </a>
                        </li>
                        <li>
                            <a href="#" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white pl-[2em]">
                                Gardening
                            </a>
                        </li>
                        <li>
                            <a href="#" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white pl-[2em]">
                                School
                            </a>
                        </li>
                    </div>
                </ul>
            </li>
            <li class="mb-[0.2rem]">
                <a href="#" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 fill-current" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                        <path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-40q0-17 11.5-28.5T280-880q17 0 28.5 11.5T320-840v40h320v-40q0-17 11.5-28.5T680-880q17 0 28.5 11.5T720-840v40h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z" />
                    </svg>
                    <span class="flex-grow">Calendar</span>
                </a>
            </li>
        </ul>
        <div class="profile">
            <button onclick=toggleSubMenu(this) class="dropdown-btn py-[5px] px-[6px] rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] w-full text-left bg-transparent border-0 font-inherit cursor-pointer hover:bg-[#267eb2] hover:text-white">

                <div class="flex items-center gap-[1.4rem]">
                    <div class="w-[30px] h-[30px] p-[5px] rounded-full">
                        <img src="{{ asset('images/user.png') }}" alt="user">
                    </div>

                    <div class="names flex flex-col">
                        <span class="flex-grow">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                        <span class="flex-grow text-sm">{{ Auth::user()->role }}</span>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 fill-current" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                    <path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z" />
                </svg>
            </button>
            <ul class="sub-menu grid transition-all duration-300 ease-in-out">
                <div class="overflow-hidden">
                    <li>
                        <a href="{{ route('profile.edit') }}" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white pl-[2em]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 fill-current" width="24px" height="23px" viewBox="0 0 512 512">
                                <path d="M262.29 192.31a64 64 0 1057.4 57.4 64.13 64.13 0 00-57.4-57.4zM416.39 256a154.34 154.34 0 01-1.53 20.79l45.21 35.46a10.81 10.81 0 012.45 13.75l-42.77 74a10.81 10.81 0 01-13.14 4.59l-44.9-18.08a16.11 16.11 0 00-15.17 1.75A164.48 164.48 0 01325 400.8a15.94 15.94 0 00-8.82 12.14l-6.73 47.89a11.08 11.08 0 01-10.68 9.17h-85.54a11.11 11.11 0 01-10.69-8.87l-6.72-47.82a16.07 16.07 0 00-9-12.22 155.3 155.3 0 01-21.46-12.57 16 16 0 00-15.11-1.71l-44.89 18.07a10.81 10.81 0 01-13.14-4.58l-42.77-74a10.8 10.8 0 012.45-13.75l38.21-30a16.05 16.05 0 006-14.08c-.36-4.17-.58-8.33-.58-12.5s.21-8.27.58-12.35a16 16 0 00-6.07-13.94l-38.19-30A10.81 10.81 0 0149.48 186l42.77-74a10.81 10.81 0 0113.14-4.59l44.9 18.08a16.11 16.11 0 0015.17-1.75A164.48 164.48 0 01187 111.2a15.94 15.94 0 008.82-12.14l6.73-47.89A11.08 11.08 0 01213.23 42h85.54a11.11 11.11 0 0110.69 8.87l6.72 47.82a16.07 16.07 0 009 12.22 155.3 155.3 0 0121.46 12.57 16 16 0 0015.11 1.71l44.89-18.07a10.81 10.81 0 0113.14 4.58l42.77 74a10.8 10.8 0 01-2.45 13.75l-38.21 30a16.05 16.05 0 00-6.05 14.08c.33 4.14.55 8.3.55 12.47z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                            </svg>
                            {{ __('Settings') }}
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" class="rounded-[0.5em] p-[0.85em] no-underline text-[#9197b3] flex items-center gap-x-[1.3em] hover:bg-[#267eb2] hover:text-white pl-[2em]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 fill-current" width="24px" height="24px" viewBox="0 0 512 512">
                                    <path d="M304 336v40a40 40 0 01-40 40H104a40 40 0 01-40-40V136a40 40 0 0140-40h152c22.09 0 48 17.91 48 40v40M368 336l80-80-80-80M176 256h256" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                </svg>
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>

<style>
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

<script>
    const toggleButton = document.getElementById('toggle-btn')
const sidebar = document.getElementById('sidebar')

function toggleSidebar(){
  sidebar.classList.toggle('close')
  toggleButton.classList.toggle('rotate')

  closeAllSubMenus()
}

function toggleSubMenu(button){

  if(!button.nextElementSibling.classList.contains('show')){
    closeAllSubMenus()
  }

  button.nextElementSibling.classList.toggle('show')
  button.classList.toggle('rotate')

  if(sidebar.classList.contains('close')){
    sidebar.classList.toggle('close')
    toggleButton.classList.toggle('rotate')
  }
}

function closeAllSubMenus(){
  Array.from(sidebar.getElementsByClassName('show')).forEach(ul => {
    ul.classList.remove('show')
    ul.previousElementSibling.classList.remove('rotate')
  })
}
</script>