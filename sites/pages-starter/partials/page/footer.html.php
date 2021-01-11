<!-- This example requires Tailwind CSS v2.0+ -->
<footer class="bg-white" aria-labelledby="footerHeading">
  <h2 id="footerHeading" class="sr-only">Footer</h2>
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
    <div class="xl:grid xl:grid-cols-3 xl:gap-8">
      <div class="space-y-8 xl:col-span-1">
        <?= import('/partials/logos/site-logo',['text_class'=>'dark:text-gray-100 ml-3 text-xl', 'logo_color'=>'#fff']); ?>
        <p class="text-gray-500 text-base">
          <?= config()->site->tagline ?>
        </p>

        <div class="flex flex-wrap">
          <?
          $social_link_style = 'text-gray-400 mr-4 mb-4 hover:text-gray-500';
          $social_icon_color = (config()->social->options->{'icon-color'} == 'brand-colors') ? 'brand-colors' : 'site-colors';
          $social_icon_design = (config()->social->options->{'icon-design'} == 'logo-only') ? 'logo-only' : 'logo-block';
          $social_icon_design = config()->social->options->{'icon-design'}; ?>
          <? foreach (config()->social->accounts as $site => $url) {
            if ($url) { ?>
              <a href="<?= $url ?>" target="blank" class="<?= $social_link_style ?>">
                <?= import('/partials/icons/svg/social/' . $social_icon_color . '/' . $social_icon_design . '/icon-' . $site . '.php'); ?>
              </a>
            <? }
          } ?>
        </div>
      </div>
      <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
        <div class="md:grid md:grid-cols-2 md:gap-8">
          <div>
            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
              Column 1
            </h3>
            <ul class="mt-4 space-y-4">
              <? foreach (data('navigation/footer')->column1 as $item) : ?>
                <li<?= strpos(url()->getPath(), '/'.$item->route) === 0 ? ' class="is-active"' : '' ?>>
                    <? if($item->route) : ?>
                        <a class="text-base text-gray-500 hover:text-gray-900" href="<?= route($item->route); ?>"><?= $item->title; ?></a>
                    <? else: ?>
                        <a class="text-base text-gray-500 hover:text-gray-900" rel="nofollow" href="<?= $item->url ?>"><?= $item->title; ?></a>
                    <? endif ?>
                </li>
              <? endforeach ?>
            </ul>
          </div>
          <div class="mt-12 md:mt-0">
            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
              Column 2
            </h3>
            <ul class="mt-4 space-y-4">
              <? foreach (data('navigation/footer')->column2 as $item) { ?>
                <li<?= strpos(url()->getPath(), '/'.$item->route) === 0 ? ' class="is-active"' : '' ?>>
                    <? if($item->route) : ?>
                        <a class="text-base text-gray-500 hover:text-gray-900" href="<?= route($item->route); ?>"><?= $item->title; ?></a>
                    <? else: ?>
                        <a class="text-base text-gray-500 hover:text-gray-900" rel="nofollow" href="<?= $item->url ?>"><?= $item->title; ?></a>
                    <? endif ?>
                </li>
              <? } ?>
            </ul>
          </div>
        </div>
        <div class="md:grid md:grid-cols-2 md:gap-8">
          <div>
            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
              Column 3
            </h3>
            <ul class="mt-4 space-y-4">
              <? foreach (data('navigation/footer')->column3 as $item) { ?>
                <li<?= strpos(url()->getPath(), '/'.$item->route) === 0 ? ' class="is-active"' : '' ?>>
                    <? if($item->route) : ?>
                        <a class="text-base text-gray-500 hover:text-gray-900" href="<?= route($item->route); ?>"><?= $item->title; ?></a>
                    <? else: ?>
                        <a class="text-base text-gray-500 hover:text-gray-900" rel="nofollow" href="<?= $item->url ?>"><?= $item->title; ?></a>
                    <? endif ?>
                </li>
              <? } ?>
            </ul>
          </div>
          <div class="mt-12 md:mt-0">
            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
              Column 4
            </h3>
            <ul class="mt-4 space-y-4">
              <? foreach (data('navigation/footer')->column4 as $item) { ?>
                <li<?= strpos(url()->getPath(), '/'.$item->route) === 0 ? ' class="is-active"' : '' ?>>
                    <? if($item->route) : ?>
                        <a class="text-base text-gray-500 hover:text-gray-900" href="<?= route($item->route); ?>"><?= $item->title; ?></a>
                    <? else: ?>
                        <a class="text-base text-gray-500 hover:text-gray-900" rel="nofollow" href="<?= $item->url ?>"><?= $item->title; ?></a>
                    <? endif ?>
                </li>
              <? } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-12 border-t border-gray-200 pt-8">
      <p class="text-base text-gray-400 xl:text-center">
        &copy; <?php echo (new DateTime)->format("Y"); ?> Website, Inc. All rights reserved.
      </p>
    </div>
  </div>
</footer>