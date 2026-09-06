/* Javascript */

window.onpageshow = function (event) {
  if (event.persisted) {
    window.location.reload();
  }
};

$(function () {
  // ハッシュリンク(#)と別ウィンドウでページを開く場合はスルー
  $(
    'a:not([href^="#"]):not([target]):not([href^="tel:"]):not([href^="mailto:"]):not(.disabled)'
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

  //キービジュアルのスライダー設定
  //keyvSlider();

  //スクロール位置に応じてナビ固定
  //setHeaderFixed();

  //トップKVの左からスライドアニメーション
  topKvSlideIn();

  //スクロール時の.photoBoxリビールアニメーション
  scrollRevealAnimation();

  //ホテル詳細スライダー
  if ($(".hotelMain .topSlider").length > 0) {
    initHotelSlider();
  }

  //キービジュアルのスライダー設定
  if ($(".topMain").length > 0) {
    var currentBreakpoint; // 現在のブレイクポイント状態を保持

    function updateVegasSlider() {
      var images;
      if (window.innerWidth <= 500) {
        // スマホ用画像（500px以下）
        images = [
          {
            src: "https://s-10057340.smooooth.jp/system_panel/uploads/images/top_kv_01_sp.png",
          },
          {
            src: "https://s-10057340.smooooth.jp/system_panel/uploads/images/top_kv_02_sp.png",
          },
          {
            src: "https://s-10057340.smooooth.jp/system_panel/uploads/images/top_kv_03_sp.png",
          },
        ];
      } else {
        // PC用画像（500pxより大きい）
        images = [
          {
            src: "https://s-10057340.smooooth.jp/system_panel/uploads/images/top_kv_01.png",
          },
          {
            src: "https://s-10057340.smooooth.jp/system_panel/uploads/images/top_kv_02.png",
          },
          {
            src: "https://s-10057340.smooothy.jp/system_panel/uploads/images/top_kv_03.png",
          },
        ];
      }

      // 既存のVegasを破棄してから新しい設定で再初期化
      try {
        $(".topKv").vegas("destroy");
      } catch (e) {}
      $(".topKv").vegas({
        overlay: false,
        transition: "fade", //切り替わりのアニメーション。http://vegas.jaysalvat.com/documentation/transitions/参照。fade、fade2、slideLeft、slideLeft2、slideRight、slideRight2、slideUp、slideUp2、slideDown、slideDown2、zoomIn、zoomIn2、zoomOut、zoomOut2、swirlLeft、swirlLeft2、swirlRight、swirlRight2、burnburn2、blurblur2、flash、flash2が設定可能。
        transitionDuration: 4000, //切り替わりのアニメーション時間をミリ秒単位で設定
        delay: 10000, //スライド間の遅延をミリ秒単位で。
        animationDuration: 20000, //スライドアニメーション時間をミリ秒単位で設定
        animation: "kenburns", //スライドアニメーションの種類。http://vegas.jaysalvat.com/documentation/transitions/参照。kenburns、kenburnsUp、kenburnsDown、kenburnsRight、kenburnsLeft、kenburnsUpLeft、kenburnsUpRight、kenburnsDownLeft、kenburnsDownRight、randomが設定可能。
        slides: images, //画像設定を読む
        timer: false,
      });
    }

    function checkBreakpoint() {
      var newBreakpoint = window.innerWidth <= 500 ? "mobile" : "desktop";

      // ブレイクポイントが変わった時のみVegasを更新
      if (currentBreakpoint !== newBreakpoint) {
        currentBreakpoint = newBreakpoint;
        updateVegasSlider();
      }
    }

    // 初回読み込み時
    currentBreakpoint = window.innerWidth <= 500 ? "mobile" : "desktop";
    updateVegasSlider();

    // ウィンドウリサイズ時にブレイクポイント変更をチェック
    $(window).on("resize", function () {
      checkBreakpoint();
    });
  }

  function initializeTxtInfiniteSlide() {
    $(".slideBox .ul").infiniteslide({
      speed: 100, //速さ　単位はpx/秒です。
      pauseonhover: false, //マウスオーバーでストップ
      responsive: true, //子要素の幅を%で指定しているとき
      clone: 2, //子要素の複製回数
      // direction: "right",
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

  if ($(".txtSlidePanel").length > 0) {
    // document.readyの時点で初期化
    initializeTxtInfiniteSlide();

    // window.loadの時点で再度初期化
    $(window).on("load", function () {
      initializeTxtInfiniteSlide();
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
      fade: true, //フェードの有効化
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      asNavFor: ".thumb-item-nav",
    });

    //選択画像の設定
    $(".thumb-item-nav").slick({
      infinite: true, //スライドをループさせるかどうか。初期値はtrue。
      slidesToShow: 6, //表示させるスライドの数
      focusOnSelect: true, //フォーカスの有効化
      slidesToScroll: 1,
      arrows: false,
      asNavFor: ".thumb-item", //連動させるスライドショーのクラス名
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
  $(".header .hamburger").click(function () {
    $(this).toggleClass("is-open");
    $(".header .navBox").toggleClass("active");
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
  $(".accord .dd").hide();
  $(".accord .dt").click(function () {
    var $clickedDt = $(this);
    var $clickedDd = $clickedDt.next(".dd");

    // 他の開いているアコーディオンを閉じる
    $(".accord .dt").not($clickedDt).removeClass("active");
    $(".accord .dd").not($clickedDd).slideUp();

    // クリックした要素をトグル
    $clickedDt.toggleClass("active");
    $clickedDd.slideToggle();
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

//======================================================================================================
// keyvSlider( )
// 機能  ：キービジュアルのスライダー設定
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function keyvSlider() {
  if ($(".topKv").length) {
    var HEADER_ELEM = $(".topKv");
    var FADE_SPEED = 2500;
    var SWITCH_DELAY = 8000;

    // 要素作成
    if (!HEADER_ELEM.children().hasClass("kvBox")) {
      var keyBoxElem = "";
      keyBoxElem += '<div class="kvBox">';
      keyBoxElem += '<div class="kvBg kv01"></div>';
      keyBoxElem += '<div class="kvBg kv02"></div>';
      keyBoxElem += '<div class="kvBg kv03"></div>';
      keyBoxElem += "</div>";
      HEADER_ELEM.append(keyBoxElem);
    }

    var keyBox = ".kvBox";
    $(keyBox + " .kvBg").css({ opacity: "0" });
    $(keyBox + " .kvBg:first")
      .stop()
      .animate({ opacity: "1" }, FADE_SPEED);
    setInterval(function () {
      $(keyBox + " .kvBg:first")
        .animate({ opacity: "0" }, FADE_SPEED)
        .nextAll(".kvBg:first")
        .animate({ opacity: "1" }, FADE_SPEED)
        .end()
        .appendTo(keyBox);
    }, SWITCH_DELAY);
  }
}

//======================================================================================================
// setHeaderFixed( )
// 機能  ：ページスクロール時の処理。ナビ固定
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function setHeaderFixed() {
  var scroll, winTop;

  //スクロールするたびに実行
  $(window).scroll(function () {
    // scroll = $('.pageTtl').offset().top;
    scroll = $(".header").innerHeight();
    //scroll = window.innerHeight;
    winTop = $(this).scrollTop();
    //スクロール位置がnavの位置より下だったらクラスfixedを追加
    if (winTop > scroll) {
      $(".header").addClass("fixed");
    } else if (winTop < scroll) {
      $(".header").removeClass("fixed");
    }
  });
}

//======================================================================================================
// topKvSlideIn( )
// 機能  ：トップKVの左からリビールアニメーション
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function topKvSlideIn() {
  if ($(".topKv").length) {
    setTimeout(function () {
      $(".topKv").addClass("reveal");
    }, 300); // 300ms後にアニメーション開始
  }
}

//======================================================================================================
// scrollRevealAnimation( )
// 機能  ：スクロール時の.photoBoxリビールアニメーション
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function scrollRevealAnimation() {
  if ($(".revealElem").length) {
    $(window).on("scroll", function () {
      $(".revealElem").each(function () {
        var $this = $(this);
        if (!$this.hasClass("reveal")) {
          var elementTop = $this.offset().top;
          var elementBottom = elementTop + $this.outerHeight();
          var viewportTop = $(window).scrollTop();
          var viewportBottom = viewportTop + $(window).height();

          // 要素が画面に50%以上表示されたらアニメーション開始
          if (elementTop < viewportBottom - $this.outerHeight() * 0.3) {
            $this.addClass("reveal");
          }
        }
      });
    });

    // 初期ロード時もチェック
    $(window).trigger("scroll");
  }
}

//======================================================================================================
// initHotelSlider( )
// 機能  ：ホテル詳細ページのスライダー初期化
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function initHotelSlider() {
  var $slider = $(".topSlider");
  var $track = $(".sliderTrack");
  var $slides = $(".slide");
  var $prev = $(".prev");
  var $next = $(".next");

  var currentIndex = 0;
  var slidesToShow = window.innerWidth >= 1025 ? 3 : 1; // PCは3枚、SPは1枚
  var totalSlides = $slides.length;
  var maxIndex = Math.max(0, totalSlides - slidesToShow);

  // スライダー位置を更新
  function updateSlider() {
    var slideWidth = window.innerWidth >= 1025 ? 100 / slidesToShow : 100; // PCは33.333%、SPは100%
    var translateX = -(currentIndex * slideWidth);
    $track.css("transform", "translateX(" + translateX + "%)");

    // ボタンの状態を更新
    $prev.toggleClass("inActive", currentIndex <= 0);
    $next.toggleClass("inActive", currentIndex >= maxIndex);
  }

  // 前へボタン
  $prev.on("click", function () {
    if (!$(this).hasClass("inActive") && currentIndex > 0) {
      currentIndex--;
      updateSlider();
    }
  });

  // 次へボタン
  $next.on("click", function () {
    if (!$(this).hasClass("inActive") && currentIndex < maxIndex) {
      currentIndex++;
      updateSlider();
    }
  });

  // ウィンドウリサイズ時の再計算
  $(window).on("resize", function () {
    slidesToShow = window.innerWidth >= 1025 ? 3 : 1;
    maxIndex = Math.max(0, totalSlides - slidesToShow);
    currentIndex = Math.min(currentIndex, maxIndex);
    updateSlider();
  });

  // 初期化
  updateSlider();
}
