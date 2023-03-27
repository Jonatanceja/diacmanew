<section class="wow fadeIn">
    <x-layout.swiper>
        <?php $images = $page->gallery()->toFiles();
                        foreach($images as $image): ?>  
            <div class="swiper-slide">
                <div class="bg-cover bg-center h-screen flex items-center relative" style="background-image: url({{ $image->url() }})">
                    <div class="bg-black absolute bg-opacity-20 h-full w-full z-0"></div>
                    <div class="container mx-auto p-6 md:p-0 z-40">
                        <div class="w-5/6 mx-auto md:w-full space-y-6 text-center text-white mt-32">
                            <h1 class="text-4xl md:text-6xl uppercase font-bold">{{ $image->heading() }}</h1>
                            <h2 class="text-2xl md:text-3xl font-bold">{{ $image->sub() }}</h2>
                            <div class="h-1 w-20 md:w-56 bg-yellow-500 mx-auto"></div>
                            <p class="md:w-2/3 w-full mx-auto text-sm md:text-base">{{ $image->text() }}</p>
                            @if ($image->boton()->isNotEmpty())
                            <div class="flex justify-center text-center w-full">
                                <a href="{{ $image->enlace() }}">
                                    <x-buttons.solid>{{ $image->boton() }}</x-buttons.solid>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </x-layout.swiper>
    
</section>