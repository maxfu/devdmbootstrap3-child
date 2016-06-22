<?php global $maxwell_options; ?>

</div>
<!-- end main container -->

    <div id="dmbs-footer" class="container<?php if ( $maxwell_options['footer_fluid'] == 'on') echo '-fluid';?> dmbs-container">
      <div class="row dmbs-footer">
        <div class="col-md-12">
          <p><?php echo $maxwell_options['company_address']; ?></p>
        </div>
        <div class="col-md-2">
          <p><?php echo 'Phone: ' . $maxwell_options['company_tel']; ?></p>
        </div>
        <div class="col-md-2">
          <p><?php echo 'Fax: ' . $maxwell_options['company_fax']; ?></p>
        </div>
        <div class="col-md-3">
          <p><?php echo 'Email: ' . $maxwell_options['company_email']; ?></p>
        </div>
        <div class="col-md-5 text-center">
          <p><?php if ( $maxwell_options['company_facebook'] != '') echo '<i class="fa fa-facebook" style="display: inline-block !important;"></i>';?><?php if ( $maxwell_options['company_twitter'] != '') echo '<i class="fa fa-twitter" style="display: inline-block !important;"></i>';?><?php if ( $maxwell_options['company_linkedin'] != '') echo '<i class="fa fa-linkedin" style="display: inline-block !important;"></i>';?><?php if ( $maxwell_options['company_googleplus'] != '') echo '<i class="fa fa-google-plus" style="display: inline-block !important;"></i>';?><?php if ( $maxwell_options['company_sina_weibo'] != '') echo '<i class="fa fa-weibo" style="display: inline-block !important;"></i>';?><?php if ( $maxwell_options['company_wechat'] != '') echo '<i class="fa fa-weixin" style="display: inline-block !important;"></i>';?></p>
        </div>
        <?php
            global $dm_settings;
            if ($dm_settings['author_credits'] != 0) : ?>
                <div class="col-md-12 dmbs-author-credits">
                    <p>Copyright © <?php auto_copyright('2015'); ?> <a href="#">Maxwell IT Services</a>. All Rights Reserved. Built by <a href="http://www.maxwellit.com.au/">Maxwell IT Services</a>.	Theme by <a href="<?php global $developer_uri; echo esc_url($developer_uri); ?>">Danny Machal</a>. Powered by WordPress.</p>
                </div>
        <?php endif; ?>

        <?php get_template_part('template-part', 'footernav'); ?>
      </div>
    </div>

<?php if( $maxwell_options['menu_search'] == 'on' ) : ?>
  <?php ob_start(); ?>
  <?php get_search_form(); ?>
  <?php $searchform = ob_get_contents(); ?>
  <?php ob_end_clean(); ?>
  <div id="SearchWindow" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Search</h4>
        </div>
        <div class="modal-body"><?php echo $searchform; ?></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
