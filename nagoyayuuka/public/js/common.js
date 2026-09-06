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
var replaceWidth = 1140;

//pc、sp判定
function reseHeaderMenu() {
  if (parseInt($(window).width()) >= replaceWidth) {
    $("body").removeClass("sp");
    $("body").addClass("pc");
    $(".navBox").attr("style", "");
    $(".hamburger").removeClass("is-open");
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

  if (_width >= 1140) {
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

  //ページ内リンクのスクロールアニメーション
  scrollAnim(".pagingList a, .btnPaging a");

  //キービジュアルのスライダー設定
  //keyvSlider();

  //スクロール位置に応じてナビ固定
  //setHeaderFixed();

  if (
    $("#top").length > 0 ||
    $("#support").length > 0 ||
    $("#contactConfirm").length > 0 ||
    $("#privacy").length > 0
  ) {
    $(".header").addClass("topHeader");
  } else {
    $(".header").addClass("pageHeader");
  }

  if ($(".topMvContainer").length > 0) {
    $(".kvSlide").slick({
      fade: true,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 800,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      pauseOnFocus: false,
      infinite: true,
    });
  }

  function initializeLogoInfiniteSlide() {
    $(".slideBox ul").infiniteslide({
      speed: 35, //速さ　単位はpx/秒です。
      pauseonhover: false, //マウスオーバーでストップ
      responsive: true, //子要素の幅を%で指定しているとき
      clone: 2, //子要素の複製回数
    });

    $(".slideBox.right ul").infiniteslide({
      speed: 35,
      pauseonhover: false,
      responsive: true,
      clone: 2,
      direction: "right",
    });
  }

  if ($(".slidePanel").length > 0) {
    // document.readyの時点で初期化
    initializeLogoInfiniteSlide();

    // window.loadの時点で再度初期化
    $(window).on("load", function () {
      initializeLogoInfiniteSlide();
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

  let seasonTabs = $(".seasonButton");
  if ($(".eventItemBox").length > 0) {
    $(".eventItemBox + .eventItemBox").hide();
  }
  $(".seasonButton").on("click", function () {
    $(".active").removeClass("active");
    $(this).addClass("active");
    const index = seasonTabs.index(this);
    $(".eventItemBox").hide();
    $(".eventItemBox").eq(index).show();
  });

  if ($("#guide").length) {
    $(".footer").addClass("arrow");
  }
});

let isSlickInitialized = false;
let isStepSliderInitialized = false;

function initInfoListSlider() {
  const $infoList = $("#top .infoList");

  if ($(window).width() < replaceWidth) {
    if (!isSlickInitialized) {
      $infoList.slick({
        slidesToShow: 1,
        centerMode: true,
        centerPadding: "20px",
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 600,
        pauseOnHover: false,
        pauseOnFocus: false,
        infinite: true,
      });
      isSlickInitialized = true;
    }
  } else {
    if (isSlickInitialized) {
      $infoList.slick("unslick");
      isSlickInitialized = false;
    }
  }
}

function initStepListSlider() {
  const $stepList = $(".stepList");
  const $prevBtn = $(".btmBox .prev");
  const $nextBtn = $(".btmBox .next");
  const $pager = $(".btmBox .pager");

  function updateStepPager(current, total) {
    $pager.text(`${current + 1}/${total}`);
  }

  if ($(window).width() < replaceWidth) {
    if (!isStepSliderInitialized) {
      $stepList.slick({
        slidesToShow: 1,
        arrows: false,
        dots: false,
        autoplay: false,
        speed: 600,
        pauseOnHover: false,
        pauseOnFocus: false,
        infinite: true,
      });

      // ボタンイベント（ループ対応なので無条件でOK）
      $prevBtn.on("click", function () {
        $stepList.slick("slickPrev");
      });

      $nextBtn.on("click", function () {
        $stepList.slick("slickNext");
      });

      // 初期表示時に pager を正しく更新
      $stepList.on("init", function (event, slick) {
        updateStepPager(slick.currentSlide, slick.slideCount); // ←ここでOK
      });

      // スライド切替時
      $stepList.on("afterChange", function (event, slick, currentSlide) {
        updateStepPager(currentSlide, slick.slideCount);
      });

      // Slick を再初期化して `init` を発火させる
      $stepList.slick("setPosition");

      isStepSliderInitialized = true;
    }
  } else {
    if (isStepSliderInitialized) {
      $stepList.slick("unslick");
      $pager.text("");
      isStepSliderInitialized = false;
    }
  }
}

$(window).on("load resize", function () {
  initInfoListSlider();
  initStepListSlider();
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
    replaceWidth = 1140;

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
    $(".header .navBox").fadeToggle("active");
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
  $(".accord dt").click(function () {
    $(this).toggleClass("active");

    $(this).next("dd").slideToggle();
  });
  $(".accord .icon").click(function () {
    $(this).parent().parent("dd").slideToggle();
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
// scrollAnim( )
// 機能  ：ページ内リンクのスクロールアニメーション
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function scrollAnim(elem) {
  var speed = 1000;
  var NAV_ELEM = $(".header .logoBox");

  $(elem).click(function () {
    var href = "";
    if ($(this).attr("href")) {
      href = $(this).attr("href");
    }
    var target = $("html");
    if (href == "") {
      target = $("article");
    } else if (href == "#") {
      target = $("html");
    } else {
      target = $(href);
    }
    var position = target.offset().top;

    // position - (ナビゲーション高さ)
    var navHeight = NAV_ELEM.innerHeight();
    position = position - navHeight;

    $("html, body").stop().animate({ scrollTop: position }, speed, "swing");
    return false;
  });

  //URLのハッシュ値を取得
  var urlHash = location.hash;
  //ハッシュ値があればページ内スクロール
  if (urlHash) {
    //スクロールを0に戻す
    $("body,html").animate({ scrollTop: 0 }, 10);
    setTimeout(function () {
      //ロード時の処理を待ち、時間差でスクロール実行
      scrollToAnker(urlHash);
    }, 100);
  }

  // 指定したアンカー(#ID)へアニメーションでスクロール
  function scrollToAnker(hash) {
    var target = $(hash);
    var position = target.offset().top;
    // position - (ナビゲーション高さ)
    var navHeight = NAV_ELEM.innerHeight();
    position = position - navHeight;

    $("body,html").stop().animate({ scrollTop: position }, 1000);
  }
}

$(function () {
  const $form = $("#contact");
  const $submit = $form.find(".submitButton");
  const $checkbox = $form.find(".agreeCheck input");
  const storageKey = "agreeChecked";

  // 保存されたチェック状態を反映
  const saved = localStorage.getItem(storageKey) === "true";
  $checkbox.prop("checked", saved);
  $submit.prop("disabled", !saved).toggleClass("disabled", !saved);

  // チェックボックス変更時の挙動
  $checkbox.on("change", function () {
    const isChecked = $(this).prop("checked");
    localStorage.setItem(storageKey, isChecked); // ← 変更時に保存
    $submit.prop("disabled", !isChecked).toggleClass("disabled", !isChecked);
  });

  // フォーム送信時、チェック状態をクリア
  $('.formConfirm input[name="mwform_submitButton"]').on("click", function () {
    localStorage.removeItem(storageKey);
  });
});
