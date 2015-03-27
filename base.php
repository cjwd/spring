<?php

use Spring\Config;
use Spring\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <div id="page" class="hfeed site">
      <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'spring' ); ?></a>
      <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>
      <div id="content" class="site-content" role="document">
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">
            <?php include Wrapper\template_path(); ?>
          </main><!-- /.site-main -->
          <?php if (Config\display_sidebar()) : ?>
            <aside id="secondary" class="widget-area" role="complementary">
              <?php include Wrapper\sidebar_path(); ?>
            </aside><!-- /.sidebar -->
          <?php endif; ?>
        </div><!-- /.content-area -->
      </div><!-- /.site-content -->
      <?php
        get_template_part('templates/footer'); 
      ?>
    </div><!-- .site -->
    <?php wp_footer(); ?>
  </body>
</html>