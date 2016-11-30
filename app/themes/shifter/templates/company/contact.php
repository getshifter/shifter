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
      <form class="contact__form" action="" method="post">
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
          <a href="#" class="btn-outline--white">Submit</a>
        </div>
      </form>
    </section>
  </article>
</section>



<form name="contactform" method="post" action="send_form_email.php">

<table width="450px">

<tr>

 <td valign="top">

  <label for="first_name">First Name *</label>

 </td>

 <td valign="top">

  <input  type="text" name="first_name" maxlength="50" size="30">

 </td>

</tr>

<tr>

 <td valign="top">

  <label for="last_name">Last Name *</label>

 </td>

 <td valign="top">

  <input  type="text" name="last_name" maxlength="50" size="30">

 </td>

</tr>

<tr>

 <td valign="top">

  <label for="email">Email Address *</label>

 </td>

 <td valign="top">

  <input  type="text" name="email" maxlength="80" size="30">

 </td>

</tr>

<tr>

 <td valign="top">

  <label for="telephone">Telephone Number</label>

 </td>

 <td valign="top">

  <input  type="text" name="telephone" maxlength="30" size="30">

 </td>

</tr>

<tr>

 <td valign="top">

  <label for="comments">Comments *</label>

 </td>

 <td valign="top">

  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>

 </td>

</tr>

<tr>

 <td colspan="2" style="text-align:center">

  <input type="submit" value="Submit">   <a href="http://www.freecontactform.com/email_form.php">Email Form</a>

 </td>

</tr>

</table>

</form>
