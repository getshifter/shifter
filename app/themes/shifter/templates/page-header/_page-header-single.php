<?php
/**
 * Page Header: Single
 */

 $id    = get_the_ID();
 $title = get_the_title();
 $categories = get_the_category();

 if ($categories) {
   $category_name = $categories[0]->name;
   $category_link = get_category_link($categories[0]->term_id);

   if ($category_name) {
     $term = '#' . $category_name;
   }

   if ($category_link) {
     $term_link = $category_link;
   }
 }

?>

<section class="page-header-single _white bkg-cover">
  <article class="container">
    <div class="page-header-single__content">
      <div class="page-header-single__meta xs-sans sm-caps">
        <time datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
        <?php if ($categories): ?>
          <a class="xs-sans sm-caps" href="<?= $term_link ?>"><?= $term ?></a>
        <?php endif; ?>
      </div>
      <h1 class="page-header-single__title xl-sans black"><?= $title ?></h1>
    </div>
  </article>
</section>
