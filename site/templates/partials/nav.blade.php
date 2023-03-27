<header class="w-full fixed z-50">
    <div class="bg-gray-900 items-center hidden md:flex py-2 mx-auto text-xs text-white px-5">
            <div class="w-2/3 flex space-x-3">
                <div class="flex items-center space-x-2">
                    <img class="h-5" src="/images/marker.svg" alt="">
                    <p class="">{{ $site->direccion() }}</p>
                </div>
                <div class="flex items-center space-x-2">
                    <img class="h-5" src="/images/mobile.svg" alt="">
                    <p class="">{{ $site->telefono() }}</p>
                </div>
                <div class="flex items-center space-x-2">
                    <img class="h-5" src="/images/bell.svg" alt="">
                    <p class="">{{ $site->horario() }}</p>
                </div>
            </div>
            <div class="flex w-1/3 justify-end space-x-4">
              <a class="text-xl" href="{{ $site->facebook() }}" target="blank"><i class="lni lni-facebook-fill text-white hover:text-yellow-500 transition duration-300"></i></a>
              <a class="text-xl" href="{{ $site->instagram() }}" target="blank"><i class="lni lni-instagram text-white hover:text-yellow-500 transition duration-300"></i></a>
              <a class="text-xl" href="{{ $site->tiktok() }}" target="blank"><i class="lni lni-tiktok-alt text-white hover:text-yellow-500 transition duration-300"></i></a>
              <a class="text-xl" href="{{ $site->youtube() }}" target="blank"><i class="lni lni-youtube text-white hover:text-yellow-500 transition duration-300"></i></a>
          </div>

    </div>
    <nav
      class="flex items-center justify-between flex-wrap p-2"
      x-data="{ isOpen: false }"
      @keydown.escape="isOpen = false"
      :class="{ 'shadow-xl bg-stone-100' : isOpen , 'bg-white shadow-sm' : !isOpen}"
    >
      <!--Logo etc-->
      <div class="flex items-center flex-shrink-0 text-white mr-6">
        <a href="{{ $site->url() }}">
        <img class="w-10 md:w-12 ml-5" src="/images/logo-diacma.svg" alt="">
        </a>
      </div>

      <!--Toggle button (hidden on large screens)-->
      <button
        @click="isOpen = !isOpen"
        type="button"
        class="block lg:hidden px-2 text-stone-700 hover:text-azul focus:outline-none focus:text-azul"
        :class="{ 'transition transform-180': isOpen }"
      >
        <svg
          class="h-6 w-6 fill-current"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
        >
          <path
            x-show="isOpen"
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
          />
          <path
            x-show="!isOpen"
            fill-rule="evenodd"
            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
          />
        </svg>
      </button>

      <!--Menu-->
      <div
        class="w-full flex-grow lg:flex lg:items-center lg:w-auto"
        :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
        @click.away="isOpen = false"
        x-show.transition="true"
      >
      <ul
          class="lg:pt-0 list-reset lg:flex justify-end lg:flex-1 items-center mt-10 md:mt-0 text-center md:text-left"
        >
        @foreach ($site->children()->listed() as $subpage)
          <li class="mr-3">
            <a
              class="inline-block py-2 px-4 text-stone-500 no-underline hover:text-azul uppercase tracking-wider md:border md:border-white md:hover:border-amber-400 hover:text-amber-400 transition"
              href="{{ $subpage->url() }}"
              @click="isOpen = false"
              >{{ $subpage->title() }}
            </a>
          </li>
        @endforeach
      </ul>
      </div>
    </nav>

</header>