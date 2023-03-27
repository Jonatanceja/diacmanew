<section>
    @if ($image = $page->photo()->toFile())
    <div class="bg-cover bg-center pt-96 text-white wow fadeIn" style="background-image: url({{ $image->url() }})">
    @endif
    <div class="container mx-auto px-5 md:px-0 text-center md:text-left">
        <h1 class="text-4xl md:text-6xl uppercase font-bold py-12">{{ $page->headline() }}</h1>
    </div>
        
    </div>
</section>