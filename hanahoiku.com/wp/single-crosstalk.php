
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

  <div id="fv">
    <?php if (is_mobile()) { ?>
      <?php
      $image = get_field('mainimg02');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)
      if ($image) {
        echo wp_get_attachment_image($image, $size);
      }
      ?>
    <?php } else { ?>
      <?php
      $image = get_field('mainimg01');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)
      if ($image) {
        echo wp_get_attachment_image($image, $size);
      }
      ?>
    <?php } ?>
  </div>
  <!-- /#fv -->

  <div class="wrap">
    <?php if (is_mobile()) { ?>
      <div class="topic">
        <div class="header">
          <h4>
            TOPIC
          </h4>
          <div class="date">
            <?php the_time('Y-n-j'); ?>
          </div>
          <!-- /.date -->
        </div>
        <!-- /.header -->
        <h2 class="title">
          <?php the_title(); ?>
        </h2>
        <!-- /.title -->

      </div>
      <!-- /.topic -->
    <?php } else { ?>
      <div class="topic">
        <div class="header">
          TOPIC
        </div>
        <!-- /.header -->
        <h2 class="title">
          <?php the_title(); ?>
        </h2>
        <!-- /.title -->
        <div class="date">
          <?php the_time('Y-n-j'); ?>
        </div>
        <!-- /.date -->
      </div>
      <!-- /.topic -->
    <?php } ?>
    <div class="staffs">
      <h3>
        STAFF
      </h3>
      <?php
      if (have_rows('staff')) :
      ?>
        <div class="list">
          <?php
          while (have_rows('staff')) : the_row();
          ?>
            <div class="block">
              <div class="image">
                <?php
                $image = get_sub_field('image');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                  echo wp_get_attachment_image($image, $size);
                }
                ?>
              </div>
              <!-- /.image -->
              <div class="txt">
                <div class="en">
                  <?php echo get_sub_field('en'); ?>
                </div>
                <!-- /.en -->
                <div class="name">
                  <?php echo get_sub_field('name'); ?>
                </div>
                <!-- /.name -->
                <div class="data">
                  <?php echo get_sub_field('post'); ?>/<?php echo get_sub_field('year'); ?>
                </div>
                <!-- /.data -->
              </div>
              <!-- /.txt -->
            </div>
            <!-- /.block -->
          <?php
          endwhile;
          ?>
        </div>
        <!-- /.list -->
      <?php
      else :
      endif;
      ?>
    </div>
    <!-- /.staffs -->

    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <!-- /.entry-content -->

    <div class="footerimage">
      <?php if (is_mobile()) { ?>
        <?php
        $image = get_field('footerimg02');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if ($image) {
          echo wp_get_attachment_image($image, $size);
        }
        ?>
      <?php } else { ?>
        <?php
        $image = get_field('footerimg01');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if ($image) {
          echo wp_get_attachment_image($image, $size);
        }
        ?>
      <?php } ?>
    </div>
    <!-- /.footerimage -->

    <div id="school">
      <h4 class="ani anit">
        <span class="first"></span>所属園<span class="last"></span>
      </h4>



      <?php
      $featured_posts = get_field('school');
      if ($featured_posts) : ?>
        <div class="group">
          <?php foreach ($featured_posts as $post) :

            // Setup this post for WP functions (variable must be named $post).
            setup_postdata($post); ?>
            <div class="block">
              <div class="image ani anit">
                <a href="<?php the_permalink(); ?>">
                  <?php
                  $image = get_field('image03');
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
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </div>
                <!-- /.name -->
                <?php
                if (have_rows('gaiyou')) :
                ?>
                  <div class="data ani anit">
                    <div class="ninka">
                      <?php if (get_field('ninka02')) {
                      ?>
                        <span>認可保育園</span>
                      <?php
                      } ?>
                    </div>
                    <!-- /.ninka -->
                    <div class="age">
                      <?php
                      while (have_rows('gaiyou')) : the_row();
                      ?>
                        対象年齢 <?php the_sub_field('taisho'); ?>
                      <?php
                      endwhile;
                      ?>
                    </div>
                    <!-- /.age -->
                  </div>
                  <!-- /.data -->

                <?php
                else :
                endif;
                ?>
              </div>
              <!-- /.txt -->
            </div>
            <!-- /.block -->
          <?php endforeach; ?>
        </div>
        <!-- /.group -->
        <?php
        // Reset the global post object so that the rest of the page works correctly.
        wp_reset_postdata(); ?>
      <?php endif; ?>


      <?php
      $featured_posts = get_field('school-old');
      if ($featured_posts) : ?>
        <?php foreach ($featured_posts as $post) :
          setup_postdata($post);
          if ($post === reset($featured_posts)) {
        ?>
            <div class="block">
              <div class="image ani anit">
                <a href="<?php the_permalink(); ?>">
                  <?php
                  $image = get_field('image03');
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
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </div>
                <!-- /.name -->
                <?php
                if (have_rows('gaiyou')) :
                ?>
                  <div class="data ani anit">
                    <div class="ninka">
                      <?php if (get_field('ninka02')) {
                      ?>
                        <span>認可保育園</span>
                      <?php
                      } ?>
                    </div>
                    <!-- /.ninka -->
                    <div class="age">
                      <?php
                      while (have_rows('gaiyou')) : the_row();
                      ?>
                        対象年齢 <?php the_sub_field('taisho'); ?>
                      <?php
                      endwhile;
                      ?>
                    </div>
                    <!-- /.age -->
                  </div>
                  <!-- /.data -->

                <?php
                else :
                endif;
                ?>
              </div>
              <!-- /.txt -->
            </div>
            <!-- /.block -->
          <?php } ?>
        <?php endforeach; ?>
        <?php
        // Reset the global post object so that the rest of the page works correctly.
        wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
    <!-- /#school -->

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
        'post_type' => 'crosstalk',
        'posts_per_page' => 2
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>
        <div class="group">
          <?php
          while ($the_query->have_posts()) : $the_query->the_post();
          ?>
            <div class="block">
              <div class="image">
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
                <div class="header">
                  TOPIC
                </div>
                <!-- /.header -->
                <h3>
                  <?php the_title(); ?>
                </h3>
                <div class="data">
                  <?php
                  if (have_rows('staff')) :
                  ?>
                    <div class="staffs">
                      <?php
                      while (have_rows('staff')) : the_row();
                      ?>
                        <div class="name">
                          <?php echo get_sub_field('name'); ?><span> × </span>
                        </div>
                        <!-- /.name -->
                      <?php
                      endwhile;
                      ?>
                    </div>
                    <!-- /.staffs -->
                  <?php
                  else :
                  endif;
                  ?>
                  <div class="date">
                    <?php the_time('Y-n-j') ?>
                  </div>
                  <!-- /.date -->
                </div>
                <!-- /.data -->
              </div>
              <!-- /.txt -->
            </div>
            <!-- /.block -->
          <?php
          endwhile;
          ?>
        </div>
        <!-- /.group -->
        <div class="link">
          <a href="<?php echo esc_url(home_url("/")); ?>recruit/crosstalk/">
            クロストーク一覧へ
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
