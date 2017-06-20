<?php

namespace Shifter\Base;
use Shifter\Admin\Structure;
use Shifter\Config\Condition;

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

  <!-- Twitter universal website tag code -->
  <script>
  !function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
  },s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
  a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
  // Insert Twitter Pixel ID and Standard Event data below
  twq('init','nxnb3');
  twq('track','PageView');
  </script>
  <!-- End Twitter universal website tag code -->

  <script>
    window.intercomSettings = {
      app_id: "w5yiaz2d"
    };
  </script>
  <script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/w5yiaz2d';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>

</body>
</html>
