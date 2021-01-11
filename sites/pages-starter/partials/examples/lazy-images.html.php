<ktml:images max-width="33%" lazyload="progressive">
<img alt="<?= $weblink->title ?>" class="object-cover object-center bg-center h-full w-full" src="images://agrea-in-the-news/<?= $weblink->image_name ?>" />
</ktml:images>

or at top use

<ktml:images max-width="33%" lazyload="progressive,inline">
</ktml:images>

an example of inline css images 

<style type="text/css">
    section.bg-produce{
        background-image: url(<?= helper('image.url', 'images://background/hero-bg.jpg?auto=compress&q=50&w=1500') ?>);
    }

    .save-data section {
        background-image: none !important;
    }
</style>