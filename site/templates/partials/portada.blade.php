<section class="wow fadeIn">
    @if ($image = $page->cover()->toFile())
    <div class="pt-36 md:pt-96 bg-black bg-cover bg-top" style="background-image: url({{ $image->url() }})">
        <div class="container mx-auto px-5 md:px-0">
            <h1 class="text-4xl md:text-6xl uppercase font-bold pt-12 text-white">{{ $page->title() }}</h1>
            <div class="text-white pb-12">
                <?php foreach($site->breadcrumb() as $crumb): ?>
                <a class="text-white hover:text-yellow-200 transition duration-300" href="<?= $crumb->url() ?>" <?= e($crumb->isActive(), 'aria-current="page"') ?>>
                    <?= html($crumb->title()) ?> 
                </a>
                /
                <?php endforeach ?>
            </div>
        </div>
    </div>   
    @endif
</section>