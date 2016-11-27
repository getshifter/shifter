<?php
/**
 * Index
 */

use Apollo\Modules;
?>

<section class="blog _gradient">
  <div class="container">
    <div class="blog__archive">
      <?php
      $categories = get_categories( array(
        'orderby' => 'name',
        'order'   => 'ASC'
      )); ?>
      <div class="blog__categories">
      <?php foreach( $categories as $category ) {
        $category_link = sprintf(
          '<a href="%1$s" alt="%2$s">%3$s</a>',
          esc_url( get_category_link( $category->term_id ) ),
          esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
          esc_html( $category->name )
        ); ?>

        <?= $category_link ?>
      <?php } ?>
      </div>

      <?php
      if ( !have_posts() ) : ?>
        <div class="alert alert-warning">
          No posts exist.
        </div>
        <?php get_search_form(); ?>
      <?php endif; ?>

      <?php while ( have_posts() ) : the_post(); ?>
        <?php Modules\post_module(); ?>
      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>
    </div>
  </div>
</section>
