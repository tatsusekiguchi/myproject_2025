<?php if (is_mobile()) { ?>
    <div id="fnav">
        <div class="block ani anit">
            <a href="<?php echo esc_url(home_url("/")); ?>recruit/voice/">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/voice03.jpg" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/voice03.jpg 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/voice03@2x.jpg 2x" alt="はな保育で働く先輩の声">
            </a>
        </div>
        <!-- /.block -->
        <div class="block ani anit">
            <a href="<?php echo esc_url(home_url("/")); ?>recruit/job/">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/search04.jpg" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/search04.jpg 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/search04@2x.jpg 2x" alt="募集している園舎を探す">
            </a>
        </div>
        <!-- /.block -->
    </div>
    <!-- /#fnav -->
<?php } else { ?>
    <div id="fnav">
        <div class="block ani anit">
            <a href="<?php echo esc_url(home_url("/")); ?>recruit/voice/">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/voice02.jpg" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/voice02.jpg 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/voice02@2x.jpg 2x" alt="はな保育で働く先輩の声">
            </a>
        </div>
        <!-- /.block -->
        <div class="block ani anit">
            <a href="<?php echo esc_url(home_url("/")); ?>recruit/job/">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/search02.jpg" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/search02.jpg 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/search02@2x.jpg 2x" alt="募集している園舎を探す">
            </a>
        </div>
        <!-- /.block -->
    </div>
    <!-- /#fnav -->
<?php } ?>