<section class="bg-yellow-500 py-12">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-10">
        @foreach ($page->contadores()->toStructure() as $item)
            <div class="text-center wow fadeInUp" data-wow-delay="{{ $loop->iteration * 250 }}ms">
               <x-headings.h2>{{ $item->number() }}</x-headings.h2>
               <p class="text-white">{{ $item->text() }}</p> 
            </div>
        @endforeach
    </div>
</section>

@push('scripts')
@endpush