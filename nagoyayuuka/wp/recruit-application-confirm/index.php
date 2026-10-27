<?php
/*
Template Name: 採用応募内容確認
*/
?>
<?php get_header(); ?>
<main id="contactConfirm" class="recruitmentApplicationPage">
  <div class="contactContainer">
    <div class="contactPanel">
      <div class="contactItemBox">
        <div class="secTtl"><h1>応募内容の確認</h1></div>
        <div class="formConfirm recruitmentApplicationForm">
          <?php ny_render_recruitment_application_form(); ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
