<?php global $maxwell_options; ?>

<?php if ( $maxwell_options['footer_container'] != 'on') : ?>
</div>
<!-- end main container -->
<?php endif; ?>

    <div class="<?php if ( $maxwell_options['footer_container'] == 'on') echo 'row ';?>dmbs-footer">
      <div class="container<?php if ( $maxwell_options['fluid_container'] == 'on') echo '-fluid';?>">
        <div class="row">
          <div class="col-md-12">
            <p><?php echo $maxwell_options['company_address']; ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <p><?php echo 'Phone: ' . $maxwell_options['company_tel']; ?></p>
          </div>
          <div class="col-md-2">
            <p><?php echo 'Fax: ' . $maxwell_options['company_fax']; ?></p>
          </div>
          <div class="col-md-3">
            <p><?php echo 'Email: ' . $maxwell_options['company_email']; ?></p>
          </div>
          <div class="col-md-5 text-center" style="font-size: 18px;">
            <p><?php if ( $maxwell_options['company_facebook'] != '') echo '<i class="fa fa-facebook" style="display: inline-block !important;"></i>';?><?php if ( $maxwell_options['company_twitter'] != '') echo '<i class="fa fa-twitter" style="display: inline-block !important;"></i>';?><?php if ( $maxwell_options['company_linkedin'] != '') echo '<i class="fa fa-linkedin" style="display: inline-block !important;"></i>';?><?php if ( $maxwell_options['company_googleplus'] != '') echo '<i class="fa fa-google-plus" style="display: inline-block !important;"></i>';?><?php if ( $maxwell_options['company_sina_weibo'] != '') echo '<i class="fa fa-weibo" style="display: inline-block !important;"></i>';?><?php if ( $maxwell_options['company_wechat'] != '') echo '<i class="fa fa-weixin" style="display: inline-block !important;"></i>';?></p>
          </div>
        </div>
        <?php
            global $dm_settings;
            if ($dm_settings['author_credits'] != 0) : ?>
                <div class="clearfix dmbs-author-credits">
                    <p>Copyright © <?php auto_copyright('2015'); ?> <a href="#">Maxwell IT Services</a>. All Rights Reserved. Built by <a href="http://www.maxwellit.com.au/">Maxwell IT Services</a>.	Theme by <a href="<?php global $developer_uri; echo esc_url($developer_uri); ?>">Danny Machal</a>. Powered by WordPress.</p>
                </div>
        <?php endif; ?>

        <?php get_template_part('template-part', 'footernav'); ?>
      </div>
    </div>

<?php if ( $maxwell_options['footer_container'] == 'on') : ?>
</div>
<!-- end main container -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
