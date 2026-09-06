<?php $options = get_design_plus_option(); ?>

 <?php
      if(is_page()){ 
        $page_hide_footer = get_post_meta($post->ID, 'page_hide_footer', true);
      } else {
        $page_hide_footer = '';
      }
      if(!$page_hide_footer){

      $bg_image = wp_get_attachment_image_src($options['footer_bg_image'], 'full');
      $bg_image_mobile = wp_get_attachment_image_src($options['footer_bg_image_mobile'], 'full');
      if($options['footer_bg_type'] == 'type2') {
        $bg_image = '';
        $video = $options['footer_bg_video'];
        if(!empty($video)) {
          if (!auto_play_movie()) {
            $video_image_id = $options['footer_bg_video_image'];
            if($video_image_id) {
              $bg_image = wp_get_attachment_image_src($video_image_id, 'full');
            }
          }
        }
      }
 ?>
 <footer id="footer">
	 	<div class="section_inner">
		<div class="footer_flex flex">
			<div class="footer_left">
				<div class="footer_logo"><img src="/wp-content/themes/mieux/img/logo.svg"></div>
				<div class="footer_menu">
					<ul>
						<li><a href="https://mieux-cosme.com/">Top</a></li>
						<li><a href="https://mieux-cosme.com/program/">Program</a></li>
						<li><a href="https://mieux-cosme.com/product/">Product</a></li>
						<li><a href="https://mieux-cosme.com/menu/">Menu</a></li>
						<li><a href="https://mieux-cosme.com/blog/">Blog</a></li>
						<li><a href="https://mieux-cosme.com/photo-gallery/">photo-gallery</a></li>
						<li><a href="https://mieux-cosme.com/franchise/">Franchise</a></li>
						<li><a href="https://mieux-cosme.com/access/">Access</a></li>
						<li><a href="https://mieux-cosme.com/contact/">Contact</a></li>
						<li><a href="https://mieux-cosme.com/privacy-policy/">Privacy Policy</a></li>
						<li><a href="https://mieux-cosme.com/specified-commercial-transaction-law/">特定商取引法</a></li>
					</ul>
				</div>
			</div>
			<div class="footer_right">
				<div class="footer_right_bn flex">
					<div class="footer_link_content contact_area">
						<img src="https://mieux-cosme.com/wp-content/uploads/2023/03/footer4-1.webp">
						<a href="https://mieux-cosme.com/contact/">各店へのお問い合わせ</a>
					</div>
					<div class="footer_link_content access_area">
						<img src="https://mieux-cosme.com/wp-content/uploads/2023/03/footer3-1.webp">
						<a href="https://mieux-cosme.com/access/">各店へのアクセス</a>
					</div>
					<div class="footer_link_content program_area">
						<img src="https://mieux-cosme.com/wp-content/uploads/2023/03/footer2-1.webp">
						<a href="https://mieux-cosme.com/program/">mieuxの肌質改善プログラム</a>
					</div>
					<div class="footer_link_content ec_area">
						<img src="https://mieux-cosme.com/wp-content/uploads/2023/03/footer1-1.webp">
						<a href="https://mieux-cosme.stores.jp/" target=”_blank”>商品の購入はこちら</a>
					</div>
				</div>
			</div>
		</div>
<div class="mobile_footer_menu">
<div class="mobile_footer_menu_product">
<a href="https://mieux-cosme.com/product/">取扱商品について</a>
</div>
<div class="mobile_footer_menu_agency">
<a href="https://mieux-cosme.com/contact/">各店へご予約</a>
</div>
</div>
 </footer>

 <?php }; // END hide footer ?>

 <div id="return_top">
  <a href="#body"><span></span></a>
 </div>

 <?php
      // footer bar for mobile device -------------------
      if( is_mobile() && ($options['footer_bar_display'] != 'type3') ) {
        get_template_part('template-parts/footer-bar');
      };
 ?>

</div><!-- #container -->

<?php // drawer menu -------------------------------------------- ?>
<?php if (has_nav_menu('global-menu')) { ?>
<div id="drawer_menu">
 <nav>
  <?php wp_nav_menu( array( 'menu_id' => 'mobile_menu', 'sort_column' => 'menu_order', 'theme_location' => 'global-menu' , 'container' => '' ) ); ?>
 </nav>
 <div id="mobile_banner">
  <?php
       for($i=1; $i<= 3; $i++):
         if( $options['mobile_menu_ad_code'.$i] || $options['mobile_menu_ad_image'.$i] ) {
           if ($options['mobile_menu_ad_code'.$i]) {
  ?>
  <div class="banner">
   <?php echo $options['mobile_menu_ad_code'.$i]; ?>
  </div>
  <?php
       } else {
         $mobile_menu_image = wp_get_attachment_image_src( $options['mobile_menu_ad_image'.$i], 'full' );
  ?>
  <div class="banner">
   <a href="<?php echo esc_url( $options['mobile_menu_ad_url'.$i] ); ?>"<?php if($options['mobile_menu_ad_target'.$i] == 1) { ?> target="_blank"<?php }; ?>><img src="<?php echo esc_attr($mobile_menu_image[0]); ?>" alt="" title="" /></a>
  </div>
  <?php }; }; endfor; ?>
 </div><!-- END #header_mobile_banner -->
</div>
<?php }; ?>

<?php wp_footer(); ?>
<p id="copyright" style="background:<?php echo esc_attr($options['copyright_bg_color']); ?>; color:<?php echo esc_attr($options['copyright_font_color']); ?>;">©︎肌質改善サロンmieux</p>
</body>
</html>