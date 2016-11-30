<?php
  use Apollo\Extend\Util;
?>

<header class="global-header" role="banner">
  <div class="container-flex">
    <div class="logo">
      <a href="<?= esc_url(home_url('/')); ?>">
        <img width="130" height="auto" src="<?= get_template_directory_uri();?>/dist/images/shifter-logo--white.svg" alt="<?php bloginfo('name'); ?>">
      </a>
    </div>
    <nav class="global-nav" role="navigation">
      <div class="primary-nav">
        <?= Util\Listless_WP_Nav('primary_navigation'); ?>
      </div>
      <div class="btn-group signup-links">
        <a class="btn-outline--white" href="https://go.getshifter.io/">Login</a>
        <a class="btn-outline--white" href="https://go.getshifter.io/#register">Sign up</a>
      </div>
    </nav>
    <a href="#" class="nav__toggle" id="js__nav-toggle">
      <div class="open">&#9776;</div>
      <div class="close">&times;</div>
    </a>
  </div>

</header>

<nav class="nav__drawer">
  <?php
    echo Util\Listless_WP_Nav('primary_navigation');
  ?>
</nav>

<div style="height:100px"></div>
