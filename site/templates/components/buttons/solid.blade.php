<button {!! $attributes->merge(['class' => 'bg-yellow-500 px-5 py-3 uppercase text-white text-sm transition hover:bg-yellow-600 duration-300 rounded']) !!}>
    {{ $slot }}
</button>

