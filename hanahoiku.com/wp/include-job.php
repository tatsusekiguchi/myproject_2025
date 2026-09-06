<div class="content">
    <?php
    $value = get_sub_field("syokusyu");
    if ($value) :
    ?>
        <dl>
            <dt>
                募集職種
            </dt>
            <dd>

                <?php
                $value = get_sub_field("koyoukeitai");
                if ($value == '正社員') {
                ?>
                    <?php echo get_sub_field('syokusyu'); ?>（<?php echo get_sub_field('taisyo01'); ?>）
                <?php
                } else {
                ?>
                    <?php echo get_sub_field('syokusyu'); ?>
                <?php
                }
                ?>
            </dd>
        </dl>
    <?php
    endif;
    ?>

    <?php
    $value = get_sub_field("koyoukeitai");
    if ($value) :
    ?>
        <dl>
            <dt>
                雇用形態
            </dt>
            <dd>
                <?php echo get_sub_field('koyoukeitai'); ?>
            </dd>
        </dl>
    <?php
    endif;
    ?>

    <?php
    $value = get_sub_field("taisyo02");
    if ($value) :
    ?>
        <dl>
            <dt>
                対象
            </dt>
            <dd>
                <?php echo get_sub_field('taisyo02'); ?>
            </dd>
        </dl>
    <?php
    endif;
    ?>

    <?php
    $value = get_field("address");
    if ($value) :
    ?>
        <dl>
            <dt>
                勤務地
            </dt>
            <?php
            $value = get_field("map");
            if ($value) {
            ?>
                <dd>
                    <a href="<?php echo get_field('map'); ?>" target="_blank">
                        <?php echo get_field('address'); ?>
                    </a>
                </dd>
            <?php
            } else {
            ?>
                <dd>
                    <?php echo get_field('address'); ?>
                </dd>
            <?php
            }
            ?>
        </dl>
    <?php
    endif;
    ?>

    <?php
    $value = get_sub_field("jikan");
    if ($value) :
    ?>
        <dl>
            <dt>
                勤務時間
            </dt>
            <dd>
                <?php echo get_sub_field('jikan'); ?>
            </dd>
        </dl>
    <?php
    endif;
    ?>

    <?php
    $value = get_sub_field("close");
    if ($value) :
    ?>
        <dl>
            <dt>
                休日休暇
            </dt>
            <dd>
                <?php echo get_sub_field('close'); ?>
            </dd>
        </dl>
    <?php
    endif;
    ?>

    <?php
    $value = get_sub_field("kyuuyo");
    if ($value) :
    ?>
        <dl>
            <dt>
                給与
            </dt>
            <dd>
                <?php echo get_sub_field('kyuuyo'); ?>
            </dd>
        </dl>
    <?php
    endif;
    ?>

    <?php
    $value = get_sub_field("fukuri");
    if ($value) :
    ?>
        <dl>
            <dt>
                福利厚生
            </dt>
            <dd>
                <?php echo get_sub_field('fukuri'); ?>
            </dd>
        </dl>
    <?php
    endif;
    ?>

    <?php
    $value = get_sub_field("motomeru");
    if ($value) :
    ?>
        <dl>
            <dt>
                求める人材
            </dt>
            <dd>
                <?php echo get_sub_field('motomeru'); ?>
            </dd>
        </dl>
    <?php
    endif;
    ?>

    <?php
    if (have_rows('other')) :
    ?>
        <?php
        while (have_rows('other')) : the_row();
        ?>
            <dl>
                <dt>
                    <?php echo get_sub_field('header'); ?>
                </dt>
                <dd>
                    <?php echo get_sub_field('contents'); ?>
                </dd>
            </dl>
        <?php
        endwhile;
        ?>

    <?php
    else :
    endif;
    ?>

    <div class="link">
        <a href="<?php echo esc_url(home_url("/")); ?>recruit/entry/?post_id=<?php echo $post->ID ?>">
            応募する
        </a>
    </div>
    <!-- /.link -->
</div>
<!-- /.content -->