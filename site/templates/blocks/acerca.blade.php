<section class="py-24 bg-gray-100">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-20 px-5 md:px-0">
        @foreach ($page->children() as $subpage)
            <div class="flex space-x-10 wow fadeInUp" data-wow-delay="{{ $loop->iteration * 250 }}ms">
                @if ($image = $subpage->icon()->toFile())
                    <img src="{{ $image->url() }}" alt="">
                    <div class="space-y-2">
                       <x-headings.h3>{{ $subpage->title() }}</x-headings.h3> 
                       <x-layout.divider/>
                       <x-text.regular>{!! $subpage->text()->kti() !!}</x-text.regular>
                    </div>
                @endif
            </div>
            
        @endforeach

    </div>
</section>
