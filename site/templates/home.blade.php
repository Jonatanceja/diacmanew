@extends('layouts.default')
@section('content')

@foreach($page->children()->listed() as $part)
@include('blocks.' . $part->intendedTemplate(), ['page' => $part])
@endforeach

@if($page->template() == 'equipo')
    @include('controllers.equipo')
@endif

@endsection
