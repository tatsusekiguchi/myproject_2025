// $(function () {
//   $('.item').matchHeight();
// });


/* ===============================================
# header
=============================================== */

// jQuery(function(){
//   jQuery(window).scroll(function(){
//      var obj_t_pos = jQuery('header').offset().top;
//      var scr_count = jQuery(document).scrollTop() + (window.innerHeight); // ディスプレイの半分の高さを追加
//      if(scr_count > obj_t_pos){ // スクロール量が、指定した要素の位置を超えたら発火
//         jQuery('header').addClass('active'); // 『.red』には『{color:red;}』を指定
//      }else{
//         jQuery('header').removeClass();
//      }
//   })
// })

$(function () {
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > (window.innerHeight)) {
      // ページトップ以外の処理
      $("header").addClass('active');
    } else {
      // ページトップの処理
      $("header").removeClass();
    }
  });
});

/* ===============================================
# waypoints
=============================================== */

$(function () {
  $(".ani").waypoint(
    function (direction) {
      var activePoint = $(this.element);
      if (direction === "down") {
        //scroll down
        activePoint.addClass("active");
      } else {
        //scroll up
        activePoint.removeClass("active");
      }
    },
    { offset: "90%" }
  );
});

/* ===============================================
# navarea
=============================================== */

(function ($) {
  var $nav = $("#navArea");
  var $btn = $(".toggle_btn");
  var $mask = $("#mask");
  var $navlink = $("#navArea a");
  var open = "open"; // class
  // menu open close
  $btn.on("click", function () {
    if (!$nav.hasClass(open)) {
      $nav.addClass(open);
    } else {
      $nav.removeClass(open);
    }
  });
  // mask close
  $mask.on("click", function () {
    $nav.removeClass(open);
  });

  $navlink.on("click", function () {
    $nav.removeClass(open);
  });
})(jQuery);

/* ===============================================
  # magnificPopup
  =============================================== */

// $(function () {
//   $(".popup-iframe").magnificPopup({
//     type: "iframe",
//     disableOn: 100,
//     mainClass: "mfp-fade",
//     removalDelay: 200,
//     preloader: false,
//     fixedContentPos: false,
//   });
// });

/* ===============================================
  # fv
=============================================== */

$(function() {
  $('.recruit #fv .images').slick({
    fade: true,
    autoplay: true,
    speed: 1500,
    autoplaySpeed: 2000,
    pauseOnFocus: false,
    pauseOnHover: false,
    arrows: false,
  })
});


/* ===============================================
# slider
=============================================== */

$(function(){
  $('#slider .images').slick({
    autoplay: true, // 自動でスクロール
    autoplaySpeed: 0, // 自動再生のスライド切り替えまでの時間を設定
    speed: 8000, // スライドが流れる速度を設定
    cssEase: "linear", // スライドの流れ方を等速に設定
    slidesToShow: 3, // 表示するスライドの数
    swipe: false, // 操作による切り替えはさせない
    arrows: false, // 矢印非表示
    pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
    pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2, // 画面幅750px以下でスライド3枚表示
        }
      }
    ]
  });
});


/* ===============================================
# voice
=============================================== */

jQuery(function ($) {
  $("#voice .list .group01 h5").on("click", function () {
    /*クリックでコンテンツを開閉*/
    $(this).next().slideToggle(200);
    /*矢印の向きを変更*/
    $(this).toggleClass("open", 200);
  });
});


/* ===============================================
# faq
=============================================== */

jQuery(function ($) {
  $("#faq .group .question").on("click", function () {
    /*クリックでコンテンツを開閉*/
    $(this).next().slideToggle(200);
    /*矢印の向きを変更*/
    $(this).toggleClass("open", 200);
  });
});


/* ===============================================
# フッター検索
=============================================== */

var startPos = 0, winScrollTop = 0;
// scrollイベントを設定
window.addEventListener('scroll', function () {
    winScrollTop = this.scrollY;
    if (winScrollTop >= startPos) {
        // 下にスクロールされた時
        if (winScrollTop >= 1) {
            // 下に200pxスクロールされたら隠す
            document.getElementById('search01').classList.add('hide');
        }
    } else {
        // 上にスクロールされた時
        document.getElementById('search01').classList.remove('hide');
    }
    startPos = winScrollTop;
});
