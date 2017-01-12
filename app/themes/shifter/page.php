<?php while (have_posts()) : the_post(); ?>
  <div class="_gradient section-padding">
    <div class="container">
      <article <?php post_class('single__article _white'); ?>>
        <div class="single__content">
          <div class="entry-content">
            <?php
              // https://github.com/j2made/acf-type
              // get_template_part('templates/type/_type-main');
              the_content();
            ?>
          </div>
        </div>
      </div>
    </article>
  </div>
  <?php get_template_part('templates/global/signup'); ?>
<?php endwhile; ?>
