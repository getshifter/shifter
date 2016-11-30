<?php
/**
 * Company: Contact
 */
?>

<section class="section-padding _gradient">
  <article class="container">
    <header class="section-lead white">
      <h1 class="lg-sans">Contact us for advice, support,<br />or additional information.</h1>
    </header>
    <section class="contact">
      <form id="contact-form" class="contact__form" action="" method="post">

        <div>
          <input id="name" type="text" name="name" value="">
          <label class="white xs-sans sm-caps" for="name">Name</label>
        </div>
        <div>
          <input id="company" type="text" name="company" value="">
          <label class="white xs-sans sm-caps" for="company">Company</label>
        </div>
        <div>
          <input id="email" type="email" name="email" value="">
          <label class="white xs-sans sm-caps" for="email">Email</label>
        </div>
        <div>
          <input id="url" type="url" name="url" value="">
          <label class="white xs-sans sm-caps" for="url">URL</label>
        </div>
        <div class="contact__message">
          <textarea name="message" rows="8" placeholder="MESSAGE:"></textarea>
        </div>
        <div class="contact__submit">
          <input class="hidden" type="hidden" name="action" value="contact_send" />
          <input class="btn-outline--white" type="submit" value="Submit" />
        </div>
      </form>
    </section>
  </article>
</section>
