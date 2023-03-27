@extends('layouts.default')
@section('content')
@include('partials.portada')

<section>
    <div class="container px-5 md:px-0 mx-auto grid grid-cols-2 md:grid-cols-4 gap-10 py-12">
        @foreach ($page->children() as $subpage)
        <x-layout.cards :image="$subpage->photos()->toFile()" :link="$subpage->url()" class="wow fadeInUp" data-wow-delay="{{ $loop->iteration * 250 }}ms">
            <x-slot name="button">Ver detalles</x-slot>
            <x-slot name="title">{{ $subpage->title() }}</x-slot>
            {{ $subpage->description() }}
        </x-layout.cards>
        
        @endforeach
    </div>
    
</section>

@endsection