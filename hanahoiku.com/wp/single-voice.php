
  <?php

  /**
   * The template for displaying pages
   *
   * This is the template that displays all pages by default.
   * Please note that this is the WordPress construct of pages and that
   * other "pages" on your WordPress site will use a different template.
   *
   * @package WordPress
   * @subpackage hanahoiku
   * @since Twenty Fifteen 1.0
   */

  get_header('recruit'); ?>

  <?php if (is_mobile()) { ?>
    <div id="fv">
      <div class="image">
        <?php
        $image = get_field('mainimg02');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if ($image) {
          echo wp_get_attachment_image($image, $size);
        }
        ?>
      </div>
      <!-- /.image -->
      <div class="txt">
        <div class="num">
          INTERVIEW <?php
                    $num = get_post_number($post->post_type);
                    echo sprintf('%02d', $num);
                    ?>
        </div>
        <!-- /.num -->
        <div class="catch">
          <?php echo get_field('catch'); ?>
        </div>
        <!-- /.catch -->
        <div class="name">
          <?php the_title() ?><span><?php echo get_field('en'); ?></span>
        </div>
        <!-- /.name -->
        <div class="data">
          <?php echo get_field('year'); ?> / <?php echo get_field('post'); ?><br>
          <?php echo get_field('school01'); ?>
        </div>
        <!-- /.data -->
      </div>
      <!-- /.txt -->
    </div>
    <!-- /#fv -->
  <?php } else { ?>
    <div id="fv">
      <div class="txt">
        <div class="inner">
          <div class="num">
            INTERVIEW <?php
                      $num = get_post_number($post->post_type);
                      echo sprintf('%02d', $num);
                      ?>
          </div>
          <!-- /.num -->
          <div class="catch">
            <?php echo get_field('catch'); ?>
          </div>
          <!-- /.catch -->
          <div class="name">
            <?php the_title() ?><span><?php echo get_field('en'); ?></span>
          </div>
          <!-- /.name -->
          <div class="data">
            <?php echo get_field('year'); ?> / <?php echo get_field('post'); ?><br>
            <?php echo get_field('school01'); ?>
          </div>
          <!-- /.data -->
        </div>
        <!-- /.inner -->
      </div>
      <!-- /.txt -->
      <div class="image" style="background-image: url(<?php
                                                      $image = get_field('mainimg01');
                                                      $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                                      if ($image) {
                                                        echo wp_get_attachment_image_url($image, $size);
                                                      }
                                                      ?>);">
      </div>
      <!-- /.image -->
    </div>
    <!-- /#fv -->
  <?php } ?>

  <div class="wrap">
    <?php
    if (have_rows('interview')) :
    ?>
      <div id="interview">
        <?php
        while (have_rows('interview')) : the_row();
        ?>
          <div class="block">
            <div class="label ani anit">
              Q
            </div>
            <!-- /.label -->
            <div class="question ani anit">
              <?php echo get_sub_field('question'); ?>
            </div>
            <!-- /.question -->
            <?php
            $value = get_sub_field("image");
            if ($value) {
            ?>
              <div class="image ani anit">
                <?php
                $image = get_sub_field('image');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                  echo wp_get_attachment_image($image, $size);
                }
                ?>
              </div>
              <!-- /.image -->
            <?php
            } else {
            ?>

            <?php
            }
            ?>
            <div class="answer ani anit">
              <?php echo get_sub_field('answer'); ?>
            </div>
            <!-- /.answer -->
          </div>
          <!-- /.block -->
        <?php
        endwhile;
        ?>
      </div>
      <!-- /#interview -->
    <?php
    else :
    endif;
    ?>

    <?php
    $acfgroup = get_field('en01');
    $value = array_filter($acfgroup);
    if ($value) :
    ?>
    <?php
      if (have_rows('en01')) :
      ?>
<div id="school">
        <h4 class="ani anit">
          <span class="first"></span>所属園<span class="last"></span>
        </h4>
          <?php
          while (have_rows('en01')) : the_row();
          ?>
    <div class="block">
                <div class="image ani anit">
                  <a href="<?php echo get_sub_field('url'); ?>" target="_blank">
                    <?php
                    $image = get_sub_field('image');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if ($image) {
                      echo wp_get_attachment_image($image, $size);
                    }
                    ?>
                  </a>
                </div>
                <!-- /.image -->
                <div class="txt">
                  <div class="name ani anit">
                  <a href="<?php echo get_sub_field('url'); ?>" target="_blank">
                      <?php echo get_sub_field('name'); ?>
                    </a>
                  </div>
                  <!-- /.name -->
                   <div class="data ani anit">
                    <?php 
                    $value = get_sub_field( "type" );
                    if( $value ) {
                    ?>
                    <div class="ninka">
                    <span><?php echo get_sub_field('type'); ?></span>
                    </div>
                    <!-- /.ninka -->
                    <?php
                    } else {
                    ?>
                    
                    <?php
                    }
                    ?>
                    <div class="age">
                    対象年齢 <?php the_sub_field('age'); ?>
                    </div>
                    <!-- /.age -->
                   </div>
                   <!-- /.data ani anit -->
                </div>
                <!-- /.txt -->
              </div>
              <!-- /.block -->
          <?php
          endwhile;
          ?>
</div>
      <!-- /#school -->

      <?php
        else :
        endif;
      ?>
      
        
      







    <?php
    endif;
    ?>



    <div id="list">
      <div class="header">
        <h3 class="ani anit">
          はな保育で働く先輩の声
        </h3>
        <h4 class="ani anit">
          HATARAKU SENNPAI NO KOE
        </h4>
      </div>
      <!-- /.header -->
      <?php
      $args = array(
        'post_type' => 'voice',
        'posts_per_page' => 3
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>
        <div class="group">
          <?php
          while ($the_query->have_posts()) : $the_query->the_post();
          ?>
            <div class="block">
              <div class="image ani anit">
                <a href="<?php the_permalink(); ?>">
                  <?php
                  $image = get_field('image01');
                  $size = 'full'; // (thumbnail, medium, large, full or custom size)
                  if ($image) {
                    echo wp_get_attachment_image($image, $size);
                  }
                  ?>
                </a>
              </div>
              <!-- /.image -->
              <div class="txt">
                <div class="catch ani anit">
                  <?php echo get_field('catch'); ?>
                </div>
                <!-- /.catch -->
                <div class="data ani anit">
                  <div class="year">
                    <?php echo get_field('year'); ?>
                  </div>
                  <!-- /.year -->
                  <div class="name">
                    <?php the_title(); ?>
                  </div>
                  <!-- /.name -->
                </div>
                <!-- /.data -->
                <div class="link ani anit">
                  <a href="<?php the_permalink(); ?>">
                    READ MORE
                  </a>
                </div>
                <!-- /.link -->
              </div>
              <!-- /.txt -->
            </div><!-- /.block -->
          <?php
          endwhile;
          ?>
        </div>
        <!-- /.group -->
        <div class="link">
          <a href="<?php echo esc_url(home_url("/")); ?>recruit/voice/">
            先輩インタビュー一覧へ
          </a>
        </div>
        <!-- /.link -->
      <?php

      endif;
      wp_reset_postdata();
      ?>
    </div>
    <!-- /#list -->

    <?php get_template_part('include','fnav'); ?>

  </div>
  <!-- /.wrap -->
  <?php get_footer('recruit'); ?>
