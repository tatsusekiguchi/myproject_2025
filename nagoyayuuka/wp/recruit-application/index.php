<?php
/*
Template Name: 採用応募
*/
?>
<?php get_header(); ?>
<main id="contact" class="recruitmentApplicationPage">
  <div class="topContainer">
    <div class="topKvPanel">
      <div class="topKv"><img class="switch" src="<?php echo esc_url(get_template_directory_uri()); ?>/image/contact/top_kv_pc.png" alt=""></div>
    </div>
    <div class="topTitlePanel">
      <h1>採用応募</h1>
      <div class="txt"><p>なごや遊花幼稚園への園見学・資料請求・面接のご希望を受け付けています。<br>必要事項をご入力のうえ、確認画面へお進みください。</p></div>
    </div>
  </div>
  <div class="arrow"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/contact/top_arrow.png" alt=""></div>
  <div class="contactContainer">
    <div class="contactPanel">
      <div class="contactItemBox">
        <div class="formBox recruitmentApplicationForm">
          <?php ny_render_recruitment_application_form(); ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
