<?php global $maxwell_options; ?>

<?php if ( $maxwell_options['footer_container'] != 'on') : ?>
</div>
<!-- end main container -->
<?php endif; ?>

    <div class="<?php if ( $maxwell_options['footer_container'] == 'on') echo 'row ';?>dmbs-footer">
        <?php
            global $dm_settings;
            if ($dm_settings['author_credits'] != 0) : ?>
                <div class="row dmbs-author-credits">
                    <p class="text-center"><a href="<?php global $developer_uri; echo esc_url($developer_uri); ?>">DevDmBootstrap3 <?php _e('created by','devdmbootstrap3') ?> Danny Machal</a></p>
                </div>
        <?php endif; ?>

        <?php get_template_part('template-part', 'footernav'); ?>
    </div>

<?php if ( $maxwell_options['footer_container'] == 'on') : ?>
</div>
<!-- end main container -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
