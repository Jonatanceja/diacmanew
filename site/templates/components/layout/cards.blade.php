@props(['image','link'])
<a href="{{ $link }}">
<div {!! $attributes->merge(['class' => 'border-b-8 border-yellow-500 bg-white shadow-md group bg-white hover:bg-yellow-500 transition duration-300 h-full transform hover:-translate-y-3']) !!}>
    <div class="relative">
        <img src="{{ $image->crop(600, 400)->url() }}" alt="">
        <div class="absolute bg-yellow-500 bg-opacity-30 h-full w-full inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100">
            <div class="bg-transparent hover:bg-white border border-white px-5 py-2 uppercase text-white hover:text-gray-900 text-sm transition duration-300">{{ $button }}</div>
        </div>
    </div>
         
    <div class="py-5 space-y-3 text-center px-6">
        <h3 class="text-lg md:text-xl text-gray-900 font-bold group-hover:text-white">{{ $title }}</h3>   
        <p class="text-gray-700 tracking-wide font-light text-xs md:text-base group-hover:text-white">{{ $slot }}</p>
    </div>
</div>
</a>

