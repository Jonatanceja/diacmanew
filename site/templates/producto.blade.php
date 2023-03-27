@extends('layouts.default')
@section('content')
<section>
    <div class="h-20 md:h-36"></div>
    <div class="container px-5 md:px-0 mx-auto grid grid-cols-1 md:grid-cols-2 gap-24 py-12 md:py-24">
        <div class="wow fadeInRight">
            <x-layout.swiperthumbs>
                <?php $images =  $page->photos()->toFiles();
                    foreach($images as $image): ?>  
                    <div class="swiper-slide">
                        <img class="mx-auto w-full" src="{{ $image->crop(750, 550)->url() }}" alt="">
                    </div>
                <?php endforeach ?>
            </x-layout.swiperthumbs>

            <div class="swiper-container slider-thumbnail">
                <div class="swiper-wrapper space-x-5 pt-5">
                    <?php $images =  $page->photos()->toFiles();
                    foreach($images as $image): ?>  
                    <div class="swiper-slide cursor-pointer"><img src="{{ $image->crop(200, 150)->url() }}" alt=""></div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="space-y-4 wow fadeInLeft">
            <x-headings.h2>
                {{ $page->title() }}
            </x-headings.h2>
            <x-headings.h4>
                Detalles
            </x-headings.h4>
            <x-text.regular>
                {!! $page->details()->kti() !!}
            </x-text.regular>
            <div>
                <a href="{{ $site->whatsapp() }}">
                    <x-buttons.solid>Cotizar Material</x-buttons.solid>
                </a>
            </div>
            
            
        </div>

    </div>
</section>
@if ($page->ficha()->isNotEmpty())
<section class="bg-gray-100 py-24 wow fadeIn">
    <div class="w-full md:w-1/2 mx-auto px-5 md:px-0 space-y-10">
        <x-headings.h3>
            Ficha Técnica
        </x-headings.h3>
        <?php $images =  $page->ficha()->toFiles();
                        foreach($images as $image): ?>  
        <img class="mx-auto w-full" src="{{ $image->url() }}" alt="">
        <?php endforeach ?>
    </div>
</section>
@endif

@endsection