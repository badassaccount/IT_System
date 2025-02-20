<nav
aria-label="top bar"
class="flex-none flex justify-between bg-white h-16"
>
<!-- top bar left -->
<ul aria-label="top bar left" aria-orientation="horizontal" class="flex">
  <!-- add button -->
  <li class="group relative">
    <button
      aria-controls="add"
      aria-expanded="false"
      aria-haspopup="listbox"
      class="flex items-center h-full px-4 text-sm"
    >
      <i>
        <svg
          class="fill-current w-3 h-3 mx-auto"
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
        >
          <path d="M24 10h-10v-10h-2v10h-10v2h10v10h2v-10h10z" />
        </svg>
      </i>
      <span class="ml-2">Add</span>
    </button>
    <span class="absolute p-1 hidden group-hover:block">
      <ul
        id="add"
        role="listbox"
        class="outline-none py-2 bg-white border rounded-md w-screen max-w-md w-dropdown-large shadow-lg focus:outline-none leading-relaxed"
      >
        <li role="separator" class="mb-2">
          <label class="block px-4 py-3 font-semibold"> New </label>
          <hr />
        </li>
        <li
          role="option"
          class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer"
        >
          Ticket
        </li>
        <li
          role="option"
          class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer"
        >
          User
        </li>
        <li
          role="option"
          class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer"
        >
          Organization
        </li>
        <li
          role="option"
          class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer"
        >
          Search
        </li>
        <li role="separator" class="mb-2">
          <label class="block px-4 py-3 font-semibold"
            >Recently Viewed</label
          >
          <hr />
        </li>
        <li
          role="option"
          class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer"
        >
          <div class="flex">
            <div class="pr-2">
              <span
                style="padding: 2px 5px; font-size: 0.7rem"
                class="font-mono rounded-sm bg-red-600 text-white leading-none"
                >O</span
              >
            </div>
            <div class="flex-1">
              <p>Vertias - ams opps issue</p>
              <p class="text-gray-600">
                <span>#ticket/14352</span>
                <span class="mx-1 font-black">&#183;</span>
                <span>Nico Braun</span>
              </p>
            </div>
          </div>
        </li>
        <li
          role="option"
          class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer"
        >
          <div class="flex">
            <div class="pr-2">
              <span
                style="padding: 2px 5px; font-size: 0.7rem"
                class="font-mono rounded-sm bg-yellow-400 text-black leading-none"
                >N</span
              >
            </div>
            <div class="flex-1">
              <p>Vertias - ams opps issue</p>
              <p class="text-gray-600">
                <span>#ticket/14352</span>
                <span class="mx-1 font-black">&#183;</span>
                <span>Nico Braun</span>
              </p>
            </div>
          </div>
        </li>
        <li
          role="option"
          class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer"
        >
          <div class="flex">
            <div class="pr-2">
              <span
                style="padding: 2px 5px; font-size: 0.7rem"
                class="font-mono rounded-sm bg-gray-500 text-white leading-none"
                >S</span
              >
            </div>
            <div class="flex-1">
              <p>Vertias - ams opps issue</p>
              <p class="text-gray-600">
                <span>#ticket/14352</span>
                <span class="mx-1 font-black">&#183;</span>
                <span>Nico Braun</span>
              </p>
            </div>
          </div>
        </li>
        <li
          role="option"
          class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer"
        >
          <div class="flex">
            <div class="pr-2">
              <span
                style="padding: 2px 5px; font-size: 0.7rem"
                class="font-mono rounded-sm bg-blue-600 text-white leading-none"
                >P</span
              >
            </div>
            <div class="flex-1">
              <p>Vertias - ams opps issue</p>
              <p class="text-gray-600">
                <span>#ticket/14352</span>
                <span class="mx-1 font-black">&#183;</span>
                <span>Nico Braun</span>
              </p>
            </div>
          </div>
        </li>

        <li
          role="option"
          class="px-6 py-1 my-1 focus:outline-none focus:bg-blue-100 hover:bg-blue-100 cursor-pointer"
        >
          <div class="flex">
            <div class="pr-2">
              <span
                style="padding: 2px 5px; font-size: 0.7rem"
                class="font-mono rounded-sm bg-gray-800 text-white leading-none"
                >H</span
              >
            </div>
            <div class="flex-1">
              <p>Vertias - ams opps issue</p>
              <p class="text-gray-600">
                <span>#ticket/14352</span>
                <span class="mx-1 font-black">&#183;</span>
                <span>Nico Braun</span>
              </p>
            </div>
          </div>
        </li>
      </ul>
    </span>
  </li>
</ul>

<!-- to bar right  -->
<ul
  aria-label="top bar right"
  aria-orientation="horizontal"
  class="px-8 flex items-center"
>
  <li class="relative">
    <input
      title="Search Bar"
      aria-label="search bar"
      role="search"
      class="pr-8 pl-4 py-2 rounded-md cursor-pointer transition-all duration-300 ease-in-out focus:border-black focus:cursor-text w-4 focus:w-64 placeholder-transparent focus:placeholder-gray-500"
      type="text"
      placeholder="Search Chi Desk Support"
    />
    <i
      class="pointer-events-none absolute top-0 right-0 h-full flex items-center pr-3"
    >
      <svg
        class="fill-current w-4 h-4 mx-auto"
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
      >
        <path
          d="M21.172 24l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z"
        />
      </svg>
    </i>
  </li>

  <li class="h-8 w-8 ml-3">
    <button
      title="Notifications"
      aria-label="notifications"
      class="w-full h-full text-white bg-gray-600 rounded-md focus:outline-none focus:shadow-outline"
    >
      <i>
        <svg
          class="fill-current w-4 h-4 mx-auto"
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
        >
          <path
            d="M15.137 3.945c-.644-.374-1.042-1.07-1.041-1.82v-.003c.001-1.172-.938-2.122-2.096-2.122s-2.097.95-2.097 2.122v.003c.001.751-.396 1.446-1.041 1.82-4.667 2.712-1.985 11.715-6.862 13.306v1.749h20v-1.749c-4.877-1.591-2.195-10.594-6.863-13.306zm-3.137-2.945c.552 0 1 .449 1 1 0 .552-.448 1-1 1s-1-.448-1-1c0-.551.448-1 1-1zm3 20c0 1.598-1.392 3-2.971 3s-3.029-1.402-3.029-3h6z"
          />
        </svg>
      </i>
    </button>
  </li>

  <li class="h-8 w-8 ml-3">
    <button
      title="v2 REPL"
      aria-label="repl"
      class="w-full h-full text-white bg-gray-600 rounded-md focus:outline-none focus:shadow-outline"
    >
      <i>
        <svg
          class="fill-current w-4 h-4 mx-auto"
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
        >
          <path
            d="M22 6v16h-20v-16h20zm2-6h-24v24h24v-24zm-11 11v1.649l3.229 1.351-3.229 1.347v1.653l5-2.201v-1.599l-5-2.2zm-7 2.201v1.599l5 2.2v-1.653l-3.229-1.347 3.229-1.351v-1.649l-5 2.201z"
          />
        </svg>
      </i>
    </button>
  </li>

  <li class="h-8 w-8 ml-3">
    <button
      title="Products"
      aria-label="chi desk products"
      class="w-full h-full rounded-md focus:outline-none focus:shadow-outline"
    >
      <i class="text-gray-600">
        <svg
          class="fill-current w-5 h-5 mx-auto"
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
        >
          <path
            d="M11 11h-11v-11h11v11zm13 0h-11v-11h11v11zm-13 13h-11v-11h11v11zm13 0h-11v-11h11v11z"
          />
        </svg>
      </i>
    </button>
  </li>
  <li>
    <!-- component -->
<div class="h-screen flex justify-center items-center ">
  <div x-data="{ open: false }" class="bg-white  w-64  shadow flex justify-center items-center">
      <div @click="open = !open" class="relative border-b-4 border-transparent py-3" :class="{'border-indigo-700 transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
        <div class="flex justify-center items-center space-x-3 cursor-pointer">
          <div class="w-12 h-12 rounded-full overflow-hidden border-2 dark:border-white border-gray-900">
            {{-- <img src="https://images.unsplash.com/photo-1610397095767-84a5b4736cbd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="" class="w-full h-full object-cover"> --}}
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div class="shrink-0 me-3">
                <img class="size-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
            </div>
            @endif
          </div>
          <div class="font-semibold text-lg">
            <div class="cursor-pointer">{{ Auth::user()->name }}</div>
          </div>
        </div>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute w-60 px-5 py-3  bg-white rounded-lg shadow border dark:border-transparent mt-5">
          <ul class="space-y-3 ">
            <li class="font-medium">
              <a href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                <div class="mr-3">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                Account
              </a>
            </li>
            <li class="font-medium">
              <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                <div class="mr-3">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                Setting
              </a>
            </li>
            <hr class="dark:border-gray-700">
            <li class="font-medium">
              <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
              <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
                <div class="mr-3 text-red-600">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                </div>
                Logout
                
              </a>
              </form>
            </li>
          </ul>
        </div>
      </div>
  </div>
</div>
  </li>
</ul>
</nav>