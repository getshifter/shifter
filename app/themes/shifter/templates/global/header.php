<?php
  use Apollo\Extend\Util;
?>

<header class="navigation" role="banner">
  <div class="container">
    <a href="<?= esc_url(home_url('/')); ?>" class="logo">
      <img class="image" width="75" height="auto" src="<?= get_template_directory_uri();?>/assets/images/shifter-logo--white.svg" alt="<?php bloginfo('name'); ?>">
    </a>
    <nav role="navigation">
      <?= Util\Listless_WP_Nav('primary_navigation'); ?>
    </nav>
  </div>
</header>
