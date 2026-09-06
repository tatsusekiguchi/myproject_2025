/* Javascript */

window.onpageshow = function (event) {
  if (event.persisted) {
    window.location.reload();
  }
};

$(function () {
  // ハッシュリンク(#)と別ウィンドウでページを開く場合はスルー
  $(
    'a:not([href^="#"]):not([target]):not([href^="tel:"]):not([href^="mailto:"]):not([data-lightbox]):not(.disabled):not(.lb-close)'
  ).on("click", function (e) {
    e.preventDefault(); // ナビゲートをキャンセル
    url = $(this).attr("href"); // 遷移先のURLを取得
    if (url !== "") {
      $("body").addClass("fadeout"); // bodyに class="fadeout"を挿入
      setTimeout(function () {
        window.location = url; // 0.8秒後に取得したURLに遷移
      }, 800);
    }
    return false;
  });
});

/* 切り替え幅 */
var replaceWidth = 1025;

//pc、sp判定
function reseHeaderMenu() {
  if (parseInt($(window).width()) >= replaceWidth) {
    $("body").removeClass("sp");
    $("body").addClass("pc");
    $("nav").attr("style", "");
  } else {
    $("body").removeClass("pc");
    $("body").addClass("sp");
  }
}

//幅変更時pc、sp判定
$(window).resize(function () {
  reseHeaderMenu();
});

//リサイズもしくはロードされた時にReLayout呼び出し
$(window).on("load resize", ReLayout);

function ReLayout() {
  var _width = $(window).width(); //画面サイズ取得

  if (_width >= 1025) {
    //幅に応じて読み込む画像を変更する
    changeImg(".switch");
  } else {
    changeImg(".switch");
  }
}

$(document).ready(function () {
  //pc、sp判定
  reseHeaderMenu();

  //スマホメニュー
  dispObj();

  //telリンクをスマートフォン端末以外では無効にする
  setTelLink();

  //アコーディオン
  setAccord();

  //ページ内リンクのなめらかスクロール
  pageScroll();

  $(".btnTarget01").hover(function () {
    $(".sec04").removeClass("bg02 bg03").addClass("bg01");
  });

  $(".btnTarget02").hover(function () {
    $(".sec04").removeClass("bg01 bg03").addClass("bg02");
  });

  $(".btnTarget03").hover(function () {
    $(".sec04").removeClass("bg01 bg02").addClass("bg03");
  });

  if ($(".topMain").length > 0) {
    setTimeout(function () {
      $(".topKvTitleBox .topKvTitle")
        .css("opacity", "1")
        .on("transitionend", function () {
          setTimeout(function () {
            $(".topKvTitleBox .sub").css("opacity", "1.2");
          }, 500);
        });
    }, 1000);
    let $slide = $(".kvSliderPanel")
      .slick({
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false,
        dots: false,
        fade: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        speed: 2000,
      })

      .on({
        beforeChange: function (event, slick, currentSlide, nextSlide) {
          $(".slick-slide", this).eq(currentSlide).addClass("remove-animation");
          $(".slick-slide", this).eq(nextSlide).addClass("add-animation");
        },
        afterChange: function () {
          $(".remove-animation", this).removeClass(
            "remove-animation add-animation"
          );
        },
      });

    $slide.find(".slick-slide").eq(0).addClass("add-animation");
  }

  if ($(".secPhotoDisplay").length > 0) {
    // 初期状態: photo02 と photo03 を非表示
    $(".secPhotoDisplay .photoBox .photo").hide();
    $(".secPhotoDisplay .photo01").show();

    // liにマウスオーバーイベントを設定
    $(".secPhotoDisplay .li").on("mouseenter", function () {
      // 全ての.photoを非表示
      $(".secPhotoDisplay .photoBox .photo").hide();

      // マウスオーバーされた.liのdata-target属性に対応する.photoを表示
      const target = $(this).data("target");
      $(target).fadeIn();
    });

    // liからマウスが離れたとき（必要に応じて）
    $(".secPhotoDisplay .li").on("mouseleave", function () {
      // ここで特に処理をしない場合、現在の.photoの表示を維持
    });
  }

  function initializeInfiniteSlide() {
    $(".slideBox .ul").infiniteslide({
      speed: 35, //速さ　単位はpx/秒です。
      pauseonhover: false, //マウスオーバーでストップ
      responsive: true, //子要素の幅を%で指定しているとき
      clone: 2, //子要素の複製回数
      // direction: "right",
    });
  }

  if ($(".slidePanel").length > 0) {
    // document.readyの時点で初期化
    initializeInfiniteSlide();

    // window.loadの時点で再度初期化
    $(window).on("load", function () {
      initializeInfiniteSlide();
    });
  }

  if ($(".blogMain .blogPanel--detail").length > 0) {
    $(".slider .li").each(function (index, element) {
      if (!$(element).find(".webgene-item-main-image").length) {
        $(element).remove();
      }
    });

    //上部画像の設定
    $(".thumb-item").slick({
      infinite: true, //スライドをループさせるかどうか。初期値はtrue。
      fade: false, //フェードの有効化
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      asNavFor: ".thumb-item-nav",
    });

    //選択画像の設定
    $(".thumb-item-nav").slick({
      infinite: true, //スライドをループさせるかどうか。初期値はtrue。
      slidesToShow: 7, //表示させるスライドの数
      focusOnSelect: true, //フォーカスの有効化
      slidesToScroll: 1,
      arrows: false,
      asNavFor: ".thumb-item", //連動させるスライドショーのクラス名
    });
  }

  let tabs = $(".tabBtn");
  if ($(".tabItem").length > 0) {
    $(".tabItem + .tabItem").hide();
  }
  $(".tabBtn").on("click", function () {
    $(".active").removeClass("active");
    $(this).addClass("active");
    const index = tabs.index(this);
    $(".tabItem").hide();
    $(".tabItem").eq(index).show();
  });

  if ($(".caseSliderPanel").length > 0) {
    $(".caseSlider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      fade: false,
      infinite: true,
      autoplay: true,
      cssEase: "ease-in-out",
      speed: 800,
      useCSS: true,
      arrows: false,
      focusOnSelect: true,
      autoplaySpeed: 3500,
      centerMode: true,
      centerPadding: "25%",
      adaptiveHeight: false,
      responsive: [
        {
          breakpoint: 1050,
          settings: {
            slidesToShow: 1,
            centerPadding: "12%",
          },
        },
        {
          breakpoint: 800,
          settings: {
            centerMode: false,
            arrows: false,
            centerPadding: "0",
          },
        },
      ],
    });
    const $slider = $(".caseSlider");
    $slider.on("beforeChange", (event, slick, currentSlide, nextSlide) => {
      $slider.find(".slick-slide").each((index, el) => {
        const $this = $(el),
          slickindex = $this.attr("data-slick-index");
        if (nextSlide == slick.slideCount - 1 && currentSlide == 0) {
          // 現在のスライドが最初のスライドでそこから最後のスライドに戻る場合
          if (slickindex == "-1") {
            // 最後のスライドに対してクラスを付与
            $this.addClass("is-active-next");
          } else {
            // それ以外は削除
            $this.removeClass("is-active-next");
          }
        } else if (nextSlide == 0) {
          // 次のスライドが最初のスライドの場合
          if (slickindex == slick.slideCount) {
            // 最初のスライドに対してクラスを付与
            $this.addClass("is-active-next");
          } else {
            // それ以外は削除
            $this.removeClass("is-active-next");
          }
        } else {
          // それ以外は削除
          $this.removeClass("is-active-next");
        }
      });
    });
  }

  $(".webgene-pagination .prev a").addClass("js-hover-r");
  $(".webgene-pagination .next a").addClass("js-hover");
  $(".webgene-pagination .prev a").html('<div class="arrows"><</div>');
  $(".webgene-pagination .next a").html('<div class="arrows">></div>');
});

//======================================================================================================
// changeImg( )
// 機能  ：幅に応じて読み込む画像を変更する
// 引数  ：target→image
// 戻り値：なし
//======================================================================================================
function changeImg(target) {
  var $setElem = $(target),
    pcName = "_pc",
    spName = "_sp",
    replaceWidth = 1025;

  $setElem.each(function () {
    var $this = $(this);
    function imgSize() {
      var windowWidth = parseInt($(window).width());
      if (windowWidth >= replaceWidth) {
        $this.attr("src", $this.attr("src").replace(spName, pcName));
      } else if (windowWidth < replaceWidth) {
        $this.attr("src", $this.attr("src").replace(pcName, spName));
      }
    }
    $(window).resize(function () {
      imgSize();
    });
    imgSize();
  });
}

//======================================================================================================
// dispObj( )
// 機能  ：スマホメニュー
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function dispObj() {
  $(".hamburger").click(function () {
    $(this).toggleClass("is-open");
    $(".navBox").toggleClass("active");
    return false;
  });
}

//======================================================================================================
// setTelLink( )
// 機能  ：telリンクをスマートフォン端末以外では無効にする
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function setTelLink() {
  var ua = navigator.userAgent.toLowerCase();
  var isMobile = /iphone/.test(ua) || /android(.+)?mobile/.test(ua);

  if (!isMobile) {
    $('a[href^="tel:"]').on("click", function (e) {
      e.preventDefault();
    });
  }
}

//======================================================================================================
// setAccord( )
// 機能  ：アコーディオン
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function setAccord() {
  $(".accord .dt").click(function () {
    $(this).toggleClass("active");

    $(this).next(".dd").slideToggle();
  });
}

//======================================================================================================
// pageScroll( )
// 機能  ：ページ内リンクのスクロール設定
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function pageScroll() {
  $(".linkList .li[data-target],.linkBtn[data-target]").on(
    "click",
    function (e) {
      e.preventDefault();
      var headH = $(".header").innerHeight();
      var cls = "." + $(this).data("target");
      var pos = $(cls).offset().top - headH;
      $("body,html").stop().animate(
        {
          scrollTop: pos,
        },
        1000
      );
    }
  );
}
