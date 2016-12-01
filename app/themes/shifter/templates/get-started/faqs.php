<?php
/**
 * Get Started: FAQs
 */

namespace Apollo\FAQs;
use Apollo\Theme\ZendeskAPI;
?>

<section class="_gray-light section-padding">
  <div class="container">
    <article class="faqs">
      <header class="faqs__lead section-lead">
        <h1 class="lg-sans black">Frequently Asked Questions</h1>
      </header>
      <section class="accordion__list faqs__list">
        <?php ZendeskAPI\get_zendesk_articles(); ?>
      </section>
    </article>
  </div>
</section>
