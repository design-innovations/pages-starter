<a role="banner" class="<?= $display_class = $display_class ?? ''; ?>flex items-center mb-4 lg:mb-0 focus:outline-none focus:shadow-outline" href="/" title="<?= config()->site->name ?> homepage">
  <?= import('/theme/images/logo/site-logo.php');?>
  <span class="<?= $text_class = $text_class ?? ''; ?> font-agrea uppercase"><?= config()->site->name ?></span>
</a>