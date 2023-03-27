<div class="relative justify-center items-center z-50">
    <div id="menu" class="w-full h-full bg-gray-900 bg-opacity-80 top-0 fixed sticky-0 flex items-center">
      <div class="md:container md:mx-auto px-2 md:px-24 flex justify-center items-center">
        <div class="w-full md:w-3/4 dark:bg-gray-800 relative flex flex-col justify-center items-center bg-white">
          <div role="banner">
            @if ($image = $page->popup()->toFile())
               <a href="/promociones"><img src="{{ $image->url() }}" alt=""></a>
            @endif  
         
          <button onclick="showMenu(true)" class="text-gray-900 absolute top-2 md:top-4 right-2 md:right-4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 bg-white p-1 rounded-full shadow-lg" aria-label="close">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 6L6 18" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M6 6L18 18" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
  @once
  @push('scripts')
    <script>
      let menu = document.getElementById("menu");
      const showMenu = (flag) => {
        menu.classList.toggle("hidden");
      };
    </script>   
  @endpush
      
  @endonce
  
