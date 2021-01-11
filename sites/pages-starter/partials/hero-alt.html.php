<section class="relative hero-alt mb-12 <?= $class ?>">
  <div class="container px-5 py-12 md:py-24 mx-auto">
    <? foreach(data('heroes') as $hero) : ?>
      <div class="flex flex-col-reverse lg:flex-row">
        <div class="lg:w-3/5">
          <div class="hero-text">
            <h1 class="font-title uppercase sm:text-5xl text-3xl mb-0 font-medium text-dark-green-800 text-opacity-50 leading-none"><a class="leading-none" href="<?= $hero->link ?>" title="<?= $hero->title ?>"><?= $hero->title ?></a></h1>
            <div class="my-4 text-lg text-dark-green-800 text-opacity-50"><?= $hero->subtitle ?></div>
          </div>
        </div>
        <div class="hero-image mb-16 lg:absolute lg:top-0 lg:right-0 lg:h-full lg:w-2/5">
          <a class="" href="<?= $hero->link ?>" title="<?= $hero->title ?>">
            <img class="rounded lg:h-full lg:object-cover lg:object-right lg:bg-right" src="<?= $hero->src ?>" alt="<?= $hero->title; ?>" data-max-width="800" data-lazyload="progressive,inline">
          </a>
        </div>
      </div>
    <? endforeach ?>
  </div>
</section>
