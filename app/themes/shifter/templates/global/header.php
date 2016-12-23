<?php
  use Shifter\Extend\Util;
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
    <a href="#" class="nav__toggle nav__open js__nav-toggle">
      &#9776;
    </a>
  </div>

</header>

<nav class="nav__drawer">
  <div class="nav__close js__nav-toggle">
    <a href="#">&times;</a>
  </div>
  <div class="nav__items">
    <?php
      echo Util\Listless_WP_Nav('primary_navigation');
    ?>
  </div>
</nav>

<div style="height:100px"></div>
