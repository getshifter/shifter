<?php

namespace Apollo\Modules;

/**
 * Create modular, reusable HTML components
 *
 * @since  1.0.0
 */

/**
 * Post Module
 * Use within loop
 *
 * @since  1.0.0
 */
function post_module() {

  $categories    = get_the_category();
  $category_name = $categories[0]->name;

  ?>
    <article <?php post_class('blog__post _white container-fluid'); ?>>
      <figure class="blog__thumbnail">
        <img class="img-r" src="//placehold.it/600x600" alt="">
      </figure>
      <div class="blog__content">
        <header>
          <h2 class="md-sans blog__title"><a class="black" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="blog__meta sm-caps xs-sans">
            <time datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
            <a href="#">#<?= $category_name ?></a>
          </div>
        </header>
        <div class="entry-summary xs-sans">
          <?php the_excerpt(); ?>
        </div>
        <a class="sm-caps blog__link" href="<?= the_permalink() ?>">Read More &rsaquo;</a>
      </div>
    </article>
  <?php

}
