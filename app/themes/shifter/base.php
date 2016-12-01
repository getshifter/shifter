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

  <?php if (!is_front_page()): ?>
    <!-- Start of getshifter Zendesk Widget script -->
    <script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var o=this.createElement("script");n&&(this.domain=n),o.id="js-iframe-async",o.src=e,this.t=+new Date,this.zendeskHost=t,this.zEQueue=a,this.body.appendChild(o)},o.write('<body onload="document._l();">'),o.close()}("https://assets.zendesk.com/embeddable_framework/main.js","getshifter.zendesk.com");
    /*]]>*/</script>
    <!-- End of getshifter Zendesk Widget script -->
  <?php endif; ?>

</body>
</html>
