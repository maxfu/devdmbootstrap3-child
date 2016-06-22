<?php if ( is_single() || is_page() ) : ?>
    <?php if ( comments_open() ) : ?>
        <div class="clear"></div>
        <div class="dmbs-comments" id="comments">
            <?php if ( have_comments() ) : ?>
                <h4><?php comments_number(__('Leave a Comment','devdmbootstrap3'), __('One Comment','devdmbootstrap3'), '%' . __(' Comments','devdmbootstrap3') );?></h4>
                <ul class="commentlist">
                    <?php wp_list_comments(); ?>
                    <?php paginate_comments_links(); ?>
                    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
                </ul>
            <?php endif; ?>
            <div class="well"><?php comment_form(); ?></div>
        </div>
    <?php endif; ?>
<?php endif; ?>
