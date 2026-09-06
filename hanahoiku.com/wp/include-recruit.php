<div class="recruit-list">
  <div class="data item">
    <div class="head">
      <div class="row">
        <div class="col-sm-3">
          <div class="image">
            <a href="<?php the_permalink(); ?>">
            <?php
            $image = get_field('image-01');
            $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
            if( $image ) {
                echo wp_get_attachment_image( $image, $size );
            }
            ?>
            </a>
          </div>
        </div>
        <div class="col-sm-9">
          <?php
          $value = get_field( "title" );
          if( $value ) :
            ?>
            <h3 class="subtitle"><a href="<?php the_permalink(); ?>"><?php
            echo $value;
            ?></a></h3>
            <?php
          endif;
          ?>
          <!-- /title -->
        </div>
      </div>
    </div>

    <div class="body">
      <table class="clearfix">
        <?php
        $value = get_field( "kinmuchi" );
        if( $value ) :
          ?>
          <tr>
            <th>勤務地</th>
            <td><?php
            echo $value;
            ?></td>
          </tr>
          <?php
        endif;
        ?>
        <!-- /kinmuchi -->
        <?php
        $value = get_field( "kyuuyo" );
        if( $value ) :
          $value = wp_trim_words( $value, 30, '…' );
          ?>
          <tr>
            <th>給与</th>
            <td><?php
            echo $value;
            ?></td>
          </tr>
          <?php
        endif;
        ?>
        <!-- /kyuuyo -->
        <?php
        $value = get_field( "kinmujikan" );
        if( $value ) :
          $value = wp_trim_words( $value, 30, '…' );
          ?>
          <tr>
            <th>勤務時間・休日</th>
            <td><?php
            echo $value;
            ?></td>
          </tr>
          <?php
        endif;
        ?>
        <!-- /kinmujikan -->
        <?php
        $value = get_field( "comment" );
        if( $value ) :
          $value = wp_trim_words( $value, 30, '…' );
          ?>
          <tr>
            <th>仕事内容</th>
            <td><?php
            echo $value;
            ?></td>
          </tr>
          <?php
        endif;
        ?>
        <!-- /comment -->
      </table>
    </div>
    <div class="foot">
      <div class="">
        <a href="<?php the_permalink(); ?>" class="btn btn-info hvr-grow">詳細を見る <i class="fas fa-angle-double-right"></i></a>
      </div>
    </div>

    </div>
</div>
