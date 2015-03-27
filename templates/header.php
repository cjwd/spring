<?php use Spring\Nav\NavWalker; ?>

<header id="masthead" class="site-header site-header--masthead clearfix" role="banner">
  <div class="site-branding">
    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
  </div><!-- .site-branding -->

  <nav id="site-navigation" class="main-navigation" role="navigation">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'spring' ); ?></button>
    <?php 
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu( ['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'primary_navigation', 'depth' => 3] ); 
    endif;
    ?>
  </nav><!-- #site-navigation -->
</header><!-- #masthead -->