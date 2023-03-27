@extends('layouts.default')
@section('content')

<div class="pt-44 container mx-auto space-y-10">
      @foreach ($page->carrousel()->toStructure() as $item)
      <div class="grid md:grid-cols-2 grid-cols-1 gap-20">
        <div>
          <x-layout.video :video="$item->video()" />
        </div>
        <div class="space-y-6">
          <x-headings.h2>{{ $item->headline() }}</x-headings.h2>
          <x-text.regular>{!! $item->text()->kt() !!}</x-text.regular>
        </div>
      </div>

      @endforeach
  <div>

  </div>
</div>


@endsection