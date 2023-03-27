<button {!! $attributes->merge(['class' => 'bg-transparent hover:bg-gray-900 border border-gray-900 px-5 py-3 uppercase text-gray-900 hover:text-white text-sm transition duration-300 rounded']) !!}>
    {{ $slot }}
</button>

