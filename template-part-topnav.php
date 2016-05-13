<?php global $maxwell_options; ?>

<?php if ( has_nav_menu( 'main_menu' ) ) : ?>

    <div class="dmbs-top-menu">
        <nav class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1-collapse">
                  <span class="sr-only"><?php _e('Toggle navigation','devdmbootstrap3'); ?></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
          </div>

          <?php
          wp_nav_menu( array(
                  'theme_location'    => 'main_menu',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse navbar-1-collapse',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
          );
          ?>
        </nav>
        <div class="clearfix"></div>
    </div>

<?php endif; ?>

<?php if ( $maxwell_options['header_container'] != 'on' ) : ?>
  <div class="container<?php if ( $maxwell_options['fluid_container'] == 'on') echo '-fluid';?> dmbs-container">
<?php endif; ?>
