<section class="py-12 container mx-auto">
    <div class="text-center space-y-1 wow fadeInUp">
        <x-headings.h4>{{ $page->headline() }}</x-headings.h4>
        <x-headings.h2 class="uppercase">{{ $page->sub() }}</x-headings.h2>
        <x-layout.divider class="mx-auto"></x-layout.divider>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-5 items-center py-12 gap-10">
        <?php $images = $page->gallery()->toFiles();
                        foreach($images as $image): ?>
        <div class="wow fadeInUp">
            <img class="mx-auto" src="{{ $image->url() }}" alt="" >
        </div>
        
        <?php endforeach ?>
    </div>
</section>