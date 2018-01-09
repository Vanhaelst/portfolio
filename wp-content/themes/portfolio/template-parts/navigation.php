<nav class="navbar navbar-toggleable-sm navbar-relative">
  <div class="container">


    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <a class="navbar-brand nav-link" href="/<?php echo $sr_lang;?>" target="_self"><?=${'nav_home'.$srla}?></a>


    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <?php
      wp_nav_menu( array(
        'theme_location' => 'menu-1',
        'menu_id'        => 'primary-menu',
      ) );
      ?>
    </div>
  </div>
</nav>




<nav id="masthead" class="site-header">
    <div class="site-branding">
      <?php
      the_custom_logo();
      if ( is_front_page() && is_home() ) : ?>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <?php else : ?>
          <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php
      endif;
      ?>
    </div><!-- .site-branding -->

    <nav id="site-navigation" class="main-navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'portfolio' ); ?></button>
      <?php
      wp_nav_menu( array(
        'theme_location' => 'menu-1',
        'menu_id'        => 'primary-menu',
      ) );
      ?>
    </nav><!-- #site-navigation -->
</nav><!-- #masthead -->




