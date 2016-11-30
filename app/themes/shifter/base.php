<?php

namespace Apollo\Base;
use Apollo\Admin\Structure;
use Apollo\Config\Condition;

get_template_part('templates/global/head'); ?>

<body <?= body_class() ?>>

  <!--[if lte IE 8]>
    <div class="alert alert-warning">
      <p>You're browser is outdated. We recommend that you update for a better experience.</p>
      <a href="http://outdatedbrowser.com/en">View your options here.</a>
    </div>
  <![endif]-->

  <?php
    // Get the global header
    get_template_part( 'templates/global/header' );

    // Make
    do_action( 'get_header' );

    if ( !Condition\hide_page_header() )            // Conditionally get the page header
      get_template_part( 'templates/page-header/page-header' );
  ?>

  <main class="main" role="main">
    <?php
      /**
       * Content Layout Structure
       * Refer to `lib/theme-structure.php`
       *
       * @param string $main_class class for content wrapper
       * @param string $sidebar_class class for sidebar content
       */
      Structure\base_structure( 'main-content', 'sidebar' );
    ?>
  </main>

  <?php
    // Theme Wrapper Footer
    get_template_part( 'templates/global/footer' );

    // WP Footer
    wp_footer();
  ?>

  <script type="text/javascript">
  $(document).ready(function ($) {
    var is_sending = false,
        failure_message = 'Whoops, looks like there was a problem. Please try again later.';

    $('#contact-form').submit(function (e) {
      if (is_sending || !validateInputs()) {
        return false; // Don't let someone submit the form while it is in-progress...
      }
      e.preventDefault(); // Prevent the default form submit
      var $this = $('#contact-form'); // Cache this
      jQuery.ajax({
         type : "post",
         dataType : "json",
         url : myAjax.ajaxurl,
         data : {action: "my_user_vote", post_id : post_id, nonce: nonce},
         success: function(response) {
            if(response.type == "success") {
               jQuery("#vote_counter").html(response.vote_count)
            }
            else {
               alert("Your vote could not be added")
            }
         }
      }) 
    });

    function handleFormError () {
      is_sending = false; // Reset the is_sending var so they can try again...
    }

    function validateInputs () {
      var $name = $('form input[name="name"]').val(),
          $email = $('form input[name="email"]').val(),
          $message = $('form textarea[name="message"]').val();
      if (!$name || !$email || !$message) {
        alert('Before sending, please make sure to provide your name, email, and message.');
        return false;
      } else {
        return true;
      }
    }
  });
  </script>

  <?php if (!is_front_page()): ?>
    <!-- Start of getshifter Zendesk Widget script -->
    <script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var o=this.createElement("script");n&&(this.domain=n),o.id="js-iframe-async",o.src=e,this.t=+new Date,this.zendeskHost=t,this.zEQueue=a,this.body.appendChild(o)},o.write('<body onload="document._l();">'),o.close()}("https://assets.zendesk.com/embeddable_framework/main.js","getshifter.zendesk.com");
    /*]]>*/</script>
    <!-- End of getshifter Zendesk Widget script -->
  <?php endif; ?>

</body>
</html>
