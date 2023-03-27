@extends('layouts.default')
@section('content')

<section>
    <div><div class="h-20 md:h-36"></div></div>
    <div class="container px-10 md:px-0 mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 py-10">
        <div class="space-y-5 clear-left wow fadeInLeft">
            <h2 class="text-9xl text-yellow-500 font-bold">{{ $page->super() }}</h2>
            <h3 class="text-2xl font-light text-gray-900">{{ $page->headline() }}</h3>
            <x-layout.divider class="my-3"/>
            <x-text.regular>{!! $page->text()->kti() !!}</x-text.regular>
        </div>
        <div class="wow fadeInUp">
            <div>
                <div class="max-w-4xl mx-auto space-y-4">
                    <form action="/gracias" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 space-y-3">
                      <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                          Nombre
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="name" placeholder="Juan Peréz">
                      </div>
                      <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="email">
                          Email
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" placeholder="juan.p@ejemplo.com">
                      </div>
                      <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="phone">
                          Teléfono
                        </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="tel" name="phone" placeholder="(33) 3356-7890">
                      </div>
                      <div class="relative">
                        <label class="block text-gray-700 font-bold mb-2" for="role">
                            Para que puesto quieres aplicar
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="role" name="role">
                          <option value="">Selecciona un puesto...</option>
                          <option value="Choferes">Choferes</option>
                          <option value="Cajeras">Cajeras</option>
                          <option value="Personal Administrativo">Personal Administrativo</option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="message">
                          Cuentános un poco de tú experiencia
                        </label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" name="message" rows="5"></textarea>
                      </div>
                      <div class="mb-4">
                        <x-buttons.solid type="submit">
                          Enviar
                        </x-buttons.solid>
                      </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>
    
</section>
<section class="w-full md:w-1/2 mx-auto pb-12 md:pb-24 px-5">
    
</section>

@endsection