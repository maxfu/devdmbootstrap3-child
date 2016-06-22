<?php global $maxwell_options; ?>

    </div>
</div>
<!-- end main container -->

    <div id="dmbs-footer" class="clearfix">
        <div class="container<?php if ( $maxwell_options['footer_fluid'] == 'on') echo '-fluid';?> dmbs-container">
          <div class="row dmbs-footer">
            <div class="col-md-12">
              <p><?php if ( $maxwell_options['company_address'] != '') echo 'Address: ' . $maxwell_options['company_address']; ?></p>
            </div>
            <div class="col-md-2">
              <p><?php if ( $maxwell_options['company_tel'] != '') echo 'Phone: ' . $maxwell_options['company_tel']; ?></p>
            </div>
            <div class="col-md-2">
              <p><?php if ( $maxwell_options['company_fax'] != '') echo 'Fax: ' . $maxwell_options['company_fax']; ?></p>
            </div>
            <div class="col-md-3">
              <p><?php if ( $maxwell_options['company_email'] != '') echo 'Email: ' . $maxwell_options['company_email']; ?></p>
            </div>
            <div class="col-md-5 text-center">
              <p>
                <?php if ( $maxwell_options['company_facebook'] != '') echo '<a href="'.$maxwell_options['company_facebook'].'"><i class="fa fa-facebook"></i></a>';?>
                <?php if ( $maxwell_options['company_twitter'] != '') echo '<a href="'.$maxwell_options['company_twitter'].'"><i class="fa fa-twitter"></i></a>';?>
                <?php if ( $maxwell_options['company_linkedin'] != '') echo '<a href="'.$maxwell_options['company_linkedin'].'"><i class="fa fa-linkedin"></i></a>';?>
                <?php if ( $maxwell_options['company_googleplus'] != '') echo '<a href="'.$maxwell_options['company_googleplus'].'"><i class="fa fa-google-plus"></i></a>';?>
                <?php if ( $maxwell_options['company_pinterest'] != '') echo '<a href="'.$maxwell_options['company_pinterest'].'"><i class="fa fa-pinterest"></i></a>';?>
                <?php if ( $maxwell_options['company_sina_weibo'] != '') echo '<a href="'.$maxwell_options['company_sina_weibo'].'"><i class="fa fa-weibo"></i></a>';?>
                <?php if ( $maxwell_options['company_tencent_weibo'] != '') echo '<a href="'.$maxwell_options['company_tencent_weibo'].'"><i class="fa fa-tencent-weibo"></i></a>';?>
                <?php if ( $maxwell_options['company_wechat'] != '') echo '<a href="'.$maxwell_options['company_wechat'].'"><i class="fa fa-weixin"></i></a>';?>
              </p>
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
