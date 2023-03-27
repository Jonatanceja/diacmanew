<section>
    <div class="grid grid-cols-1 md:grid-cols-3">
        <x-layout.block class="wow fadeInUp">
            <x-headings.h4>{{ $page->heading() }}</x-headings.h4>
            <x-headings.h2>{{ $page->sub() }}</x-headings.h2>
            <x-layout.divider/>
            <x-text.regular>{{ $page->text() }}</x-text.regular>
            <div class="h-3"></div>
            <x-buttons.solid>
                {{ $page->button() }}
            </x-buttons.solid>
        </x-layout.block>
        <?php
        $related = $page->catalogos()->toPages();
        if ($related->count() > 0):
        ?>
        @foreach($related as $producto)
        <x-layout.block class="wow fadeInUp" data-wow-delay="{{ $loop->iteration * 250 }}ms">
            <div class="flex space-x-3 items-center">
                <?php if($image = $producto->icono()->toFile()): ?>
                <img class="" src="{{ $image->url() }}" alt="Icono">
                <?php endif ?> 
                <div class="space-y-2">
                    <x-headings.h3>{{ $producto->title() }}</x-headings.h3>
                    <x-layout.divider/>
                </div>
                
            </div>
            <x-text.regular>{!! $producto->description()->kti() !!}</x-text.regular>   
        </x-layout.block>
        @endforeach
        <?php endif ?>      
    </div>
</section>