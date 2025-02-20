<nav class="flex flex-col grid px-[10px] gap-x-[10px] items-start justify-between content-start w-[90px] h-screen bg-[#171923]">
  <div class="flex flex-col grid gap-y-15 items-center justify-start w-[70px] h-[226px]">
      <x-logo class="relative w-[40px] h-[34px]" />
      <div class="flex grid gap-[10px] items-center justify-center w-[70px] h-[60px]">
        <div class="relative size-[24px]">
          <div class="absolute size-[8px]"></div>
          <div class="absolute w-[12px] h-[9px]"></div>
       </div>
     </div>
     {{-- Dashboard --}}
      <div class="flex grid gap-[10px] items-center justify-center w-[70px] h-[60px] fill-white">
        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="h-16 px-6 items-center text-white w-full">
          <i class="mx-auto">
            <svg
            class="fill-current h-5 w-5 fill-white"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
          >
          <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
          <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
          </svg>
          </i>
      </x-nav-link>
     </div>
     {{-- Inventory --}}
      <div class="flex grid gap-[10px] items-center justify-center w-[70px] h-[60px] fill-white">
        
        <x-nav-link href="{{ route('inventory') }}" :active="request()->routeIs('inventory')" class="h-16 px-6 flex items-center text-white w-full">
          <i class="mx-auto">
            <svg
            class="fill-current h-5 w-5 fill-white"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
          >
            <path
              d="M18.546 3h-13.069l-5.477 8.986v9.014h24v-9.014l-5.454-8.986zm-3.796 12h-5.5l-2.25-3h-4.666l4.266-7h10.82l4.249 7h-4.669l-2.25 3zm-9.75-4l.607-1h12.787l.606 1h-14zm12.18-3l.607 1h-11.573l.607-1h10.359zm-1.214-2l.606 1h-9.144l.607-1h7.931z"
            />
          </svg>
          </i>
      </x-nav-link>
     </div>
     {{-- Tickets --}}
     <div class="flex grid gap-[10px] items-center justify-center w-[70px] h-[60px] fill-white">
      <div class="relative size-[24px]">
        <svg
          class="fill-current h-5 w-5 fill-white"
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
        >
        <path
        d="M5 19h-4v-4h4v4zm6 0h-4v-8h4v8zm6 0h-4v-13h4v13zm6 0h-4v-19h4v19zm1 2h-24v2h24v-2z"
      />
        </svg>
     </div>
 </div>
  <div class="flex flex-col grid gap-5 items-start justify-start w-[70px] h-[94px]">
    <div class="flex grid gap-x-[10px] items-center justify-center w-[70px] h-[30px]">
      <div class="relative size-[24px]">
        <div class="absolute size-[20px]"></div>
     </div>
   </div>
    <div class="relative w-[70px] h-[0px] border-1 border-[#171923]"></div>
    <div class="flex grid gap-[10px] items-center justify-center w-[70px] h-[24px]">
      <div class="relative size-[24px]">
        <div class="absolute w-[6px] h-[16px]"></div>
        <div class="absolute w-[14px] h-[13px]"></div>
     </div>
   </div>
 </div>
</nav>