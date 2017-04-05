<?php while (have_posts()) : the_post(); ?>
  <div class="_gradient section-padding">
    <div class="container">
      <article <?php post_class('single__article _white'); ?>>
        <div class="single__content">
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
          <section class="single__share">
            <a href="https://github.com/getshifter" target="_blank">
              <img width="35" height="auto" src="<?= get_template_directory_uri();?>/dist/images/github-icon.svg" alt="">
            </a>
            <a href="https://twitter.com/getshifter" target="_blank">
              <img width="35" height="auto" src="<?= get_template_directory_uri();?>/dist/images/twitter-icon.svg" alt="">
            </a>
            <a href="https://www.facebook.com/getshifter/" target="_blank">
              <img width="35" height="auto" src="<?= get_template_directory_uri();?>/dist/images/facebook-icon.svg" alt="">
            </a>
            <a href="https://www.instagram.com/getshifter/" target="_blank">
              <img width="35" height="auto" src="<?= get_template_directory_uri();?>/dist/images/instagram-icon.svg" alt="">
            </a>
          </section>
        </div>
      </article>
    </div>
  </div>

  <?php get_template_part('templates/global/signup'); ?>

<?php endwhile; ?>
