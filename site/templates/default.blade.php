@extends('layouts.default')
@section('content')

<div class="container max-w-2 px-5 md:px-0 min-h-screen flex items-center mx-auto">
    <div class="prose text-center w-full mx-auto">
        @kt($page->text())
        <a href="{{ $site->url() }}">
            <x-buttons.solid>Volver</x-buttons.solid>
        </a>
    </div>
</div>

@endsection
