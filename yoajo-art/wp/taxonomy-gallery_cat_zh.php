<?php get_header('zh'); ?>
<main class="main" id="gallery">
    <div class="pageTitle">
        <div class="secWrap">
            <h1>Gallery</h1>
        </div>
    </div>

    <div class="blogSection">
        <div class="secWrap">
            <div class="blogContainer">

                <div class="leftPanel">
                    <dl>
                        <dt>Category</dt>
                        <dd>
                            <ul>
                               <li><a href="<?php echo home_url(); ?>/gallerylist-zh">新着順</a></li>
                                <?php
                                $terms = get_terms([
                                    'taxonomy'   => 'gallery_cat_zh',
                                    'hide_empty' => false,
                                    'orderby'    => 'name',
                                    'order'      => 'ASC',
                                ]);
                                $current = get_queried_object();
                                if ( ! is_wp_error($terms) ) :
                                    foreach ($terms as $term) :
                                        $class = ($current && $current->term_id === $term->term_id) ? ' class="current"' : '';
                                        echo '<li' . $class . '><a href="' . esc_url( get_term_link($term) ) . '">' . esc_html($term->name) . '</a></li>';
                                    endforeach;
                                endif;
                                ?>
                            </ul>
                        </dd>
                    </dl>
                </div>

                <div class="rightPanel">
                    <div class="galleryList">
                        <ul>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                                $image    = get_field('gallery_image'); // URL を想定
                                $title    = get_field('gallery_title');
                                $year     = get_field('gallery_year');
                                $size     = get_field('gallery_size');
                                $material = get_field('gallery_material');
                                $purchase = get_field('gallery_purchase_link');
                            ?>
                                <li>
                                    <?php if ($image): ?>
                                        <div class="photo">
                                            <a href="<?php echo esc_url($image); ?>" data-lightbox="lightBox" data-title="<?php echo esc_attr($title); ?>">
                                                <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>">
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="title"><p><?php echo esc_html($title); ?></p></div>
                                    <div class="info">
                                        <?php if ($year)     echo '<p>' . esc_html($year) . '</p>'; ?>
                                        <?php if ($size)     echo '<p>' . esc_html($size) . '</p>'; ?>
                                        <?php if ($material) echo '<p>' . esc_html($material) . '</p>'; ?>
                                    </div>
                                    <?php if ($purchase): ?>
                                        <div class="purchase">
                                            <div class="btnMore">
                                                <a href="<?php echo esc_url($purchase); ?>" target="_blank" rel="noopener">購入はこちら</a>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </li>
                            <?php endwhile; endif; ?>
                        </ul>
                    </div>

                    <div class="list__pagination">
                        <?php
                        if ( function_exists('responsive_pagination') ) {
                            global $wp_query;
                            responsive_pagination( $wp_query->max_num_pages );
                        } else {
                            echo paginate_links();
                        }
                        ?>
                    </div>

                    <div class="bnr">
                        <a href="#" target="_blank" rel="noopener">
                            <div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/top/bnr_online_shop_bg.png" alt=""></div>
                            <div class="title"><p>Online Shop</p></div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
