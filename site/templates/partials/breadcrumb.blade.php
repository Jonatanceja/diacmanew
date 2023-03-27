<div class="text-white pb-12">
    <?php foreach($site->breadcrumb() as $crumb): ?>
    <a class="text-white hover:text-yellow-200 transition duration-300" href="<?= $crumb->url() ?>" <?= e($crumb->isActive(), 'aria-current="page"') ?>>
        <?= html($crumb->title()) ?> 
    </a>
    /
    <?php endforeach ?>
</div>