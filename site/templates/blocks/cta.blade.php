<section class="bg-yellow-500 py-12 wow fadeIn">
    <div class="container mx-auto block md:flex space-y-6 md:space-y-0 px-5 md:px-0">
        <div class="w-full md:w-2/3 text-center md:text-left">
            <x-headings.h2>{{ $page->headline() }}</x-headings.h2>
        </div>
        <div class="w-full md:w-1/3 flex justify-center md:justify-end">
            <x-buttons.line>{{ $page->button() }}</x-buttons.line>
        </div>
    </div>
</section>