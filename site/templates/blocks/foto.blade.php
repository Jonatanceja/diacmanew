<section class="wow fadeIn">
    @if ($image = $page->photo()->toFile())
        <img class="w-full" src="{{ $image->url() }}" alt="">
    @endif
</section>