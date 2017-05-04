<?php

namespace Shifter\Modules;

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

  $categories     = get_the_category();
  $category_name  = $categories[0]->name;
  $category_link  = get_category_link($categories[0]->term_id);
  $img            = get_post_thumbnail_id();
  $img_obj        = wp_get_attachment_image_src($img, 'large', true);
  $img_w          = $img_obj[1];
  $img_h          = $img_obj[2];
  $img_url        = $img_obj[0];
  $link           = get_the_permalink();

  ?>

    <?php if (has_post_thumbnail()): ?>
      <article <?php post_class('blog__post _white container-fluid has_thumbnail'); ?>>
        <a href="<?= $link ?>"><div style="background-image: url(<?= $img_url ?>)" class="bkg-cover blog__thumbnail"></div></a>
    <?php else: ?>
      <article <?php post_class('blog__post _white container-fluid'); ?>>
    <?php endif; ?>
      <div class="blog__content">
        <header>
          <h2 class="md-sans blog__title"><a class="black" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="blog__meta sm-caps xs-sans">
            <time datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
            <a href="<?= $category_link ?>">#<?= $category_name ?></a>
          </div>
        </header>
        <div class="entry-summary xs-sans">
          <?php the_excerpt(); ?>
        </div>
        <a class="btn-outline--purple-sm blog__link" href="<?= $link ?>">Read More</a>
      </div>
    </article>
  <?php

}
