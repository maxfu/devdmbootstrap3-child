<?php global $dm_settings; ?>
<?php global $maxwell_options; ?>

<?php if ( has_nav_menu( 'main_menu' ) ) : ?>

    <div class="row dmbs-top-menu">
      <div class="col-md-12 dmbs-navbar">
        <nav class="navbar navbar-<?php echo $maxwell_options['navbar_style'];?>" role="navigation">
            <div class="container-fluid dmbs-container">
                <div class="navbar-header">
                    <?php if ($dm_settings['show_header'] == 0) : ?>
                      <?php if ( get_header_image() != '' ) : ?>
                          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>
                      <?php endif; ?>
                    <?php endif; ?>
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
            </div>
        </nav>
      </div>
    </div>

<?php endif; ?>

</div>

<div id="dmbs-content" class="container<?php if ( $maxwell_options['main_fluid'] == 'on') echo '-fluid';?> dmbs-container">
