<?php
/**
 * Page Header: Tax
 */

 $page_for_posts = get_option( 'page_for_posts' );

 $title         = get_the_title($page_for_posts);
 $custom_title  = get_field('custom_title', $page_for_posts);
 $subtitle      = get_field('page_subtitle', $page_for_posts);
 $categories    = get_the_category();
 $category_name = $categories[0]->name;

 if ($category_name) {
   $title = $category_name;
 }
?>

<section class="page-header _white bkg-cover">
  <article class="container">
    <div class="page-header__content">
      <h1 class="page-header__title xl-sans black"><?= $title ?></h1>
      <?php if ($subtitle): ?>
        <h3 class="xs-sans"><?= $subtitle ?></h3>
      <?php endif; ?>
    </div>
  </article>
</section>
