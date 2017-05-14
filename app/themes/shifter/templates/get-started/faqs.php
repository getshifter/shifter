<?php
/**
 * Get Started: FAQs
 */

namespace Shifter\FAQs;
use Shifter\Theme\ZendeskAPI;
?>

<section class="_gray-light section-padding">
  <div class="container">
    <article class="faqs">
      <header class="faqs__lead section-lead">
        <h1 class="lg-sans black">Frequently Asked Questions</h1>
      </header>
      <section class="accordion__list faqs__list">

        <article class="accordion__item _white">
          <button data-target="#article-236157948" aria-expanded="false" class="xs-sans black accordion__title tuck-toggle">
            Is the CDN included?        <img class="accordion__icon" width="20" height="auto" src="/app/themes/shifter/dist/images/arrow-icon.svg" alt="">
          </button>
          <div id="article-236157948" class="accordion__content tucked tuck-content">
            <p>Yes! We use a CDN (CloudFront) at very front of our servers, by default.</p>
            <p>Static files are uploaded and stored with Amazon S3, then delivered through CloudFront (CDN), so that visitors can access websites with low latencies from all over the world.</p>
          </div>
        </article>

        <article class="accordion__item _white">
          <button data-target="#article-236199627" aria-expanded="false" class="xs-sans black accordion__title tuck-toggle">
            Are there any protection services against DDoS attacks?        <img class="accordion__icon" width="20" height="auto" src="/app/themes/shifter/dist/images/arrow-icon.svg" alt="">
          </button>
          <div id="article-236199627" class="accordion__content tucked tuck-content">
            <p>We've got you covered. We use CloudFront with AWS Shield Standard which enables protection against DDoS attacks by default.</p>
            <p>For more details about the AWS Shield, check out their official page: <em><a href="https://aws.amazon.com/shield/" target="_blank">AWS Shield</a>.</em></p>
          </div>
        </article>

        <article class="accordion__item _white">
          <button data-target="#article-236157968" aria-expanded="false" class="xs-sans black accordion__title tuck-toggle">
            Can I register SSL for my domain?        <img class="accordion__icon" width="20" height="auto" src="/app/themes/shifter/dist/images/arrow-icon.svg" alt="">
          </button>
          <div id="article-236157968" class="accordion__content tucked tuck-content">
            <p>Absolutly!</p>
            <p>You can use Amazon SSL for your domain. But it requires email authentication, so kindly finish your email authentication to enable SSL certification for your domain.</p>
            <p>&nbsp;</p>
          </div>
        </article>

        <article class="accordion__item _white">
          <button data-target="#article-233187988" aria-expanded="false" class="xs-sans black accordion__title tuck-toggle">
            How is Shifter managed?        <img class="accordion__icon" width="20" height="auto" src="/app/themes/shifter/dist/images/arrow-icon.svg" alt="">
          </button>
          <div id="article-233187988" class="accordion__content tucked tuck-content">
            <p>Shifter has its own admin menu (separate from WordPress) that gives you control of the site. You can turn WordPress on and off, converting to and from a static site. You can manage domain settings, multiple websites, and more.</p>
          </div>
        </article>

        <article class="accordion__item _white">
          <button data-target="#article-233187968" aria-expanded="false" class="xs-sans black accordion__title tuck-toggle">
            Is Shifter also a hosting service?        <img class="accordion__icon" width="20" height="auto" src="/app/themes/shifter/dist/images/arrow-icon.svg" alt="">
          </button>
          <div id="article-233187968" class="accordion__content tucked tuck-content">
            <p>Yes! Shifter is both a WordPress static site generator and a WordPress hosting solution. We host the files that Shifter creates and allow you to connect to custom domains. We do not, however, offer domain registration at this time.</p>
          </div>
        </article>

        <article class="accordion__item _white">
          <button data-target="#article-233187928" aria-expanded="false" class="xs-sans black accordion__title tuck-toggle">
            How much does Shifter cost?        <img class="accordion__icon" width="20" height="auto" src="/app/themes/shifter/dist/images/arrow-icon.svg" alt="">
          </button>
          <div id="article-233187928" class="accordion__content tucked tuck-content">
            <p>For features to value Shifter costs are minimal. Since static files are small and do not require computing, storage fees are less expensive. These price benefits get passed on to you, the consumer.</p>
            <p>Pricing starts at $15/mo annually. This is our Personal plan which includes 10GB Storage and 1TB&nbsp;Data Transfer. This covers most users or for more storage and bandwidth we also offer Business and Agency pricing.</p>
            <p>We also offer a forever trial at no cost for anyone who wants to get started with Shifter today!</p>
            <p>https://getshifter.io/pricing/</p>
          </div>
        </article>

      </section>
    </article>
  </div>

</section>

<section class="_white section-padding">
  <div class="container">
    <article class="global-signup">
      <div class="global-signup__title">
        <h1 class="md-sans black"><span>Shifter Documentation</span><br> Guides, FAQs, Shifter API, and More</h1>
      </div>
      <a href="https://docs.getshifter.io/" class="btn-outline--purple">Shifter Docs</a>
    </article>
  </div>
</section>
