<section class="py-12">
    <div class="container mx-auto flex items-center space-x-10 wow fadeInUp">
        <div>
            @if ($image = $page->icon()->toFile())
                <img src="{{ $image->url() }} " alt="">
            @endif
        </div>
        <div>
            <x-headings.h3>{{ $page->title() }}</x-headings.h3>
            <x-layout.divider/> 
        </div>
    </div>
    <div class="items-center container mx-auto grid grid-cols-2 md:grid-cols-7">
        <?php $images = $page->icons()->toFiles(); foreach($images as $image): ?> 
        <div class="py-12">
            <div class="wow fadeInUp">
                <img class="bg-yellow-500 p-5 rounded-full w-24 h-24 items-center mx-auto" src="{{ $image->url() }}" alt="">
            </div>
            <div class="wow fadeInUp">
                <x-text.regular class="text-center pt-5">{{ $image->heading() }}</x-text.regular>
            </div>
        </div>
        <?php endforeach ?>
    </div>
    
</section>