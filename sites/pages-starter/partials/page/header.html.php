<header class="relative flex flex-wrap items-center justify-between px-2 py-1 lg:py-3 navbar-expand-lg bg-white lg:mb-3" 
     x-data="scrollToReveal()" 
     x-ref="navbar"
     x-on:scroll.window="scroll()"
     x-bind:class="{
                   'sticky z-50 top-0 shadow-lg': sticky,
                   'relative': !sticky
                   }">
  <!-- Navbar -->
  <div class="w-full text-gray-700">
    <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-2 mx-auto lg:items-center lg:justify-between lg:flex-row">
      <div class="p-4 flex flex-row items-center justify-between">
        <?= import('/partials/logos/site-logo',['text_class'=>'dark:text-gray-100 ml-3 text-xl', 'logo_color'=>'#fff']); ?>
        <!-- Button Mobile Nav -->
        <?= import('/partials/icons/svg/icon-hamburger.php'); ?>
        <!-- End Button Mobile Nav -->
      </div>
      <!-- Navbar Mobile -->
      <nav role="navigation" aria-label="Main" :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden bg-white pb-4 lg:pb-0 lg:flex lg:justify-end lg:flex-row">
        <?= import('/partials/navigation/mainmenu',['levels'=>1,]); ?>
      </nav>
    </div>
  </div>
  <!-- End Navbar -->
</header>
<script type="text/javascript">
  function scrollToReveal() {
  return {
    sticky: false,
    lastPos: window.scrollY + 0,
    scroll() {
      this.sticky = window.scrollY > this.$refs.navbar.offsetHeight && this.lastPos > window.scrollY;
      this.lastPos = window.scrollY;
    }
  }
}
</script>