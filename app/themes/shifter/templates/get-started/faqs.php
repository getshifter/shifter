<?php
/**
 * Get Started: FAQs
 */
?>

<section class="_gray-light section-padding">
  <div class="container">
    <article class="faqs">
      <header class="faqs__lead section-lead">
        <h1 class="lg-sans black">Frequently Asked Questions</h1>
      </header>

      <section class="accordion__list faqs__list">
        <article class="accordion__item _white">
          <button data-target="#beta-availablility" aria-expanded="false" aria-expanded="false" class="xs-sans black accordion__title tuck-toggle">
            When will beta be available?
            <img class="accordion__icon" width="20" height="auto" src="<?= get_template_directory_uri();?>/dist/images/arrow-icon.svg" alt="">
          </button>
          <div id="beta-availablility" class="accordion__content tucked tuck-content">
            <p>Beta is currently available!</p>
            <p>Sign up and join our beta testing service. The beta testing service is free of charge during its period. There is some limitation for its feature.</p>
          </div>
        </article>
        <article class="accordion__item _white">
          <button data-target="#shifter-cost" aria-expanded="false" class="xs-sans black accordion__title tuck-toggle">
            How much does Shifter cost?
            <img class="accordion__icon" width="20" height="auto" src="<?= get_template_directory_uri();?>/dist/images/arrow-icon.svg" alt="">
          </button>
          <div id="shifter-cost" class="accordion__content tucked tuck-content">
            <p>Shifter hosting costs are minimal. Since static files are small and do not require computing, storage fees are less expensive. These price benefits get passed on to you, the consumer.</p>
          </div>
        </article>
        <article class="accordion__item _white">
          <button data-target="#shifter-hosting" aria-expanded="false" class="xs-sans black accordion__title tuck-toggle">
            Is Shifter also a hosting service?
            <img class="accordion__icon" width="20" height="auto" src="<?= get_template_directory_uri();?>/dist/images/arrow-icon.svg" alt="">
          </button>
          <div id="shifter-hosting" class="accordion__content tucked tuck-content">
            <p>Yes! Shifter is both a WordPress static site generator and a hosting solution. We host the files that Shifter creates and allows you to connect custom domains. We do not, however, offer domain registration at this time.</p>
          </div>
        </article>
        <article class="accordion__item _white">
          <button data-target="#shifter-admin" aria-expanded="false" class="xs-sans black accordion__title tuck-toggle">
            How is Shifter managed?
            <img class="accordion__icon" width="20" height="auto" src="<?= get_template_directory_uri();?>/dist/images/arrow-icon.svg" alt="">
          </button>
          <div id="shifter-admin" class="accordion__content tucked tuck-content">
            <p>Shifter has it’s own admin menu separate from WordPress that gives you control of the site. You can turn WordPress on and off, converting to and from a static site. You can manage domain settings, multiple websites, and more.</p>
          </div>
        </article>
        <article class="accordion__item _white">
          <button data-target="#shifter-experience" aria-expanded="false" class="xs-sans black accordion__title tuck-toggle">
            How does Shifter change the typical WordPress experience?
            <img class="accordion__icon" width="20" height="auto" src="<?= get_template_directory_uri();?>/dist/images/arrow-icon.svg" alt="">
          </button>
          <div id="shifter-experience" class="accordion__content tucked tuck-content">
            <p>Shifter makes no changes to the standard management and administration workflow of WordPress. The WordPress dashboard remains the same, allowing you to manage your themes, plugins, updates, and content as normal. You can still write your own custom plugins and themes.</p>
            <p>When your content is updated and your site is ready to launch, you use Shifter to compile a new version of the static site and automatically distribute your files worldwide. You can then switch back to WordPress, make content changes, and recompile with Shifter.</p>
          </div>
        </article>
      </section>
    </article>
  </div>
</section>
