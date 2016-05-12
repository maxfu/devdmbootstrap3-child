<?php global $dm_settings; ?>
<?php global $maxwell_options; ?>

<?php if ( $maxwell_options['header_container'] == 'on' ) : ?>
  <div class="container<?php if ( $maxwell_options['fluid_container'] == 'on') echo '-fluid';?> dmbs-container">
<?php endif; ?>

  <div class="<?php if ( $maxwell_options['header_container'] == 'on') echo 'row ';?>dmbs-header">
      <nav class="navbar navbar<?php echo '-' . $maxwell_options['navebar_style'];?>" role="navigation">
        <div class="col-md-2 dmbs-header-img text-center">
          <div class="navbar-header">
            <?php if ( get_header_image() != '' ) : ?>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>
            <?php endif; ?>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1-collapse">
              <span class="sr-only"><?php _e('Toggle navigation','devdmbootstrap3'); ?></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
        </div>
        <div class="col-md-10">
          <div class="row dmbs-header-text">
            <?php if ( get_header_image() == '' ) : ?>
              <h1><a <?php if ( get_header_textcolor() != 'blank' ) echo 'class="custom-header-text-color"'; ?> href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <?php endif; ?>
            <h4 <?php if ( get_header_textcolor() != 'blank' ) echo 'class="custom-header-text-color"'; ?>><?php bloginfo( 'description' ); ?></h4>
          </div>
          <div class="row dmbs-top-menu">
            <?php wp_nav_menu( array(
              'theme_location'    => 'main_menu',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse navbar-1-collapse',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
            ); ?>
          </div>
        </div>
      </nav>
  </div>

<?php if ( $maxwell_options['header_container'] != 'on' ) : ?>
  <div class="container<?php if ( $maxwell_options['fluid_container'] == 'on') echo '-fluid';?> dmbs-container">
<?php endif; ?>
