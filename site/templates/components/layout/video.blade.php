@props(['video'])

<div {{ $attributes->class(['aspect-w-16 aspect-h-9']) }}>
    {!! video($video, 
        [
            'youtube' => [
            'autoplay' => 1,
            'controls' => 0,
            'mute'     => 0
            ],
        ],
    ) !!}
    
</div>