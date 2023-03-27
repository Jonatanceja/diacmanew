<div class="swiper-container slider">
    <div class="swiper-wrapper">
      {{ $slot }}
    </div>

</div>


@push('styles')
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
@endpush
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
  var sliderThumbnail = new Swiper('.slider-thumbnail', {
  slidesPerView: 4,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});

var slider = new Swiper('.slider', {
    effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  autoplay: {
   delay: 10000,
  },
  thumbs: {
    swiper: sliderThumbnail
  }
});
</script>
@endpush
