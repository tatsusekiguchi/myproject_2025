<?php
/*
Template Name: 採用応募送信完了
*/
?>
<?php get_header(); ?>
<main id="contactComplete" class="recruitmentApplicationPage">
  <div class="contactContainer">
    <div class="contactPanel">
      <div class="contactItemBox">
        <div class="secTtl"><h2>応募完了</h2></div>
        <div class="ttl">
          <p>ご応募いただき、<br class="spBreak">ありがとうございます。</p>
        </div>
        <div class="txt">
          <p>応募内容を送信しました。内容を確認のうえ、担当者よりご連絡いたします。</p>
          <p>ご不明な点がございましたら、お電話にてお問い合わせください。<br><a href="tel:0524820200">TEL：052-482-0200</a></p>
        </div>
        <div class="btnToTop"><a href="<?php echo esc_url(home_url('/')); ?>"><span>トップへもどる</span>
          <div class="arrow"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/common/btn_top_top_arrow.png" alt=""></div>
        </a></div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
