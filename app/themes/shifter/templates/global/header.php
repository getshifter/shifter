<?php
  use Apollo\Extend\Util;
?>

<header class="global-header" role="banner">
  <div class="container-flex">
    <div class="logo">
      <a href="<?= esc_url(home_url('/')); ?>">
        <img width="130" height="auto" src="<?= get_template_directory_uri();?>/assets/images/shifter-logo--white.svg" alt="<?php bloginfo('name'); ?>">
      </a>
    </div>
    <nav class="global-nav" role="navigation">
      <?= Util\Listless_WP_Nav('primary_navigation'); ?>
      <div class="signup-links">
        <a class="btn-outline--white" href="#">Login</a>
        <a class="btn-outline--white" href="#">Register</a>
      </div>
    </nav>
  </div>
</header>
