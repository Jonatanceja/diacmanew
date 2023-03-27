@extends('layouts.default')
@section('content')

<section>
    <div><div class="h-20 md:h-36"></div></div>
    <div class="container px-5 md:px-0 mx-auto grid grid-cols-1 md:grid-cols-2 gap-24 py-12 md:py-24">
        <div class="space-y-4 wow fadeInRight">
            <x-headings.h3>Información de contacto</x-headings.h3>
            <x-text.regular class="uppercase text-xl">Matriz</x-text.regular>
            <x-layout.divider/>
            <div>
                <x-text.regular>{{ $site->direccion() }}</x-text.regular>
                <x-text.regular>{{ $site->horario() }}</x-text.regular>
                <a href="mailto:{{ $site->mail() }}">
                    <x-text.regular class="hover:text-yellow-500 mt-5 text-xl transition duration-300">{{ $site->mail() }}</x-text.regular>
                </a>
            </div>
        </div>
        <div class="space-y-6 wow fadeInLeft">
            <x-text.regular>{!! $page->text()->kti() !!}</x-text.regular>
            <div>
                <x-text.regular class="uppercase">Llama directamente</x-text.regular>
                <a href="tel:{{ $site->telefono() }}">
                <x-text.regular class="hover:text-yellow-500 text-2xl font-bold transition duration-300">{{ $site->telefono() }}</x-text.regular>
            </a>
            </div>
        </div>
    </div>
</section>
<section class="container mx-auto pb-12 wow fadeIn">
   <x-headings.h3>Nuestras locaciones</x-headings.h3> 
   <x-layout.divider class="my-3"/>
   <div class="grid grid-cols-1 md:grid-cols-3 gap-10 pt-12">
       @foreach ($page->children() as $subpage)
        <div class="space-y-6">
            <div>
                {!! $subpage->map()->value() !!}
            </div>
            <div class="space-y-3">
                <p class="text-xl uppercase text-gray-700">{{ $subpage->title() }}</p>
               <x-text.regular>{!! $subpage->direccion()->kti() !!}</x-text.regular> 
            </div>
        </div>           
       @endforeach

   </div>
</section>
<section class="w-full md:w-1/2 mx-auto pb-12 md:pb-24 px-5">
    <div class="wow fadeInUp">
        <x-headings.h3>Contáctanos</x-headings.h3> 
        <x-layout.divider class="my-3"/>
    </div>
    
</section>

@endsection