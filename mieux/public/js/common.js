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
  scrollAnim(".header .navList a");

  //キービジュアルのスライダー設定
  //keyvSlider();

  //スクロール位置に応じてナビ固定
  setHeaderFixed();

  $(".header a").click(function () {
    $(".header .navClose").click();
  });

  if ($("#salon,#company").length > 0) {
    $(".footer").addClass("footBg");
  }

  $(window).on("resize orientationchange", function () {
    initTopIntroPanelSlider();
  });

  if ($("#top,#salon,#product,#company").length > 0) {
    $(".header").addClass("topHeader");
  } else {
    $(".header").addClass("pageHeader");
  }

  function initializeInfiniteSlide() {
    $(".slideBox ul").infiniteslide({
      speed: 35, //速さ　単位はpx/秒です。
      pauseonhover: false, //マウスオーバーでストップ
      responsive: true, //子要素の幅を%で指定しているとき
      clone: 2, //子要素の複製回数
      // direction: "right",
    });
  }

  function initializeReverseInfiniteSlide() {
    $(".slideBoxReverse ul").infiniteslide({
      speed: 35,
      pauseonhover: false,
      responsive: true,
      clone: 2,
      direction: "right", // ←逆方向にスライドさせる
    });
  }

  if ($(".slidePanel").length > 0) {
    // document.readyの時点で初期化
    initializeInfiniteSlide();
    initializeReverseInfiniteSlide();

    // window.loadの時点で再度初期化
    $(window).on("load", function () {
      initializeInfiniteSlide();
      initializeReverseInfiniteSlide();
    });
  }

  // introPanel Slick 初期化／解除（PC・SP切り替え対応）
  function debounce(fn, delay) {
    let timer;
    return function () {
      clearTimeout(timer);
      timer = setTimeout(fn, delay);
    };
  }
  function initTopIntroPanelSlider() {
    const $slider = $("#topIntroPanel .secBox .inner");
    const $prevBtnPc = $("#topIntroPanel .buttonBox .buttonPc .prev");
    const $nextBtnPc = $("#topIntroPanel .buttonBox .buttonPc .next");
    const $prevBtnSp = $("#topIntroPanel .buttonBox .buttonSp .prev");
    const $nextBtnSp = $("#topIntroPanel .buttonBox .buttonSp .next");

    // ─── 現在のウィンドウ幅が SP ブレイクかどうか判定 ──
    const isSp = $(window).width() < 1140;

    /* --- すでに slick がある場合は設定が合っていれば何もしない --- */
    if ($slider.hasClass("slick-initialized")) {
      const slick = $slider.slick("getSlick");
      const nowSpMode = slick.options.slidesToShow === 1; // SP = 1枚表示
      if (isSp === nowSpMode) {
        // レイアウトだけ更新して終了
        $slider.slick("refresh");
        unifySlickSlideHeight($slider);
        return;
      }
      // ここに来るのは「PC→SP もしくは SP→PC に切り替わった」とき
      $slider.slick("unslick");
    }

    /* --- slick 再初期化 --- */
    $slider.slick({
      slidesToShow: isSp ? 1 : 3,
      slidesToScroll: 1,
      arrows: true,
      prevArrow: isSp ? $prevBtnSp : $prevBtnPc,
      nextArrow: isSp ? $nextBtnSp : $nextBtnPc,
      infinite: true,
      variableWidth: false,
    });

    // 高さ揃えは slick 内部レイアウトが確定したあと
    $slider.on("setPosition", () => unifySlickSlideHeight($slider));
    unifySlickSlideHeight($slider); // 初回
  }
  function unifySlickSlideHeight($slider) {
    let max = 0;
    // 高さリセット
    $slider.find(".slick-slide").css("height", "auto");
    // 最大高さを取得
    $slider.find(".slick-slide").each(function () {
      max = Math.max(max, $(this).outerHeight());
    });
    // 各スライドに高さ適用
    $slider.find(".slick-slide").css("height", max + "px");
    // .introPanel にも高さを適用（親要素に反映）
    $slider.closest(".introPanel").css("height", max + "px");
  }
  initTopIntroPanelSlider();
  $(window).on(
    "resize orientationchange",
    debounce(initTopIntroPanelSlider, 250)
  );

  const $secBoxHistory = $("#historyIntroPanel .secBox");
  const $historySlider = $("#historyIntroPanel .secBox .inner");
  const $prevBtnPc = $("#historyIntroPanel .buttonBox .buttonPc .prev");
  const $nextBtnPc = $("#historyIntroPanel .buttonBox .buttonPc .next");
  const $prevBtnSp = $("#historyIntroPanel .buttonBox .buttonSp .prev");
  const $nextBtnSp = $("#historyIntroPanel .buttonBox .buttonSp .next");
  const slickHistoryBreakPoint = 1140;

  function updateHistoryScrollButtons() {
    if (!$secBoxHistory.length) return;
    const scrollLeft = $secBoxHistory.scrollLeft();
    const maxScroll =
      $secBoxHistory[0].scrollWidth - $secBoxHistory[0].clientWidth;

    $prevBtnPc.toggleClass("inActive", scrollLeft <= 0);
    $nextBtnPc.toggleClass("inActive", scrollLeft >= maxScroll);
  }

  function initPcScrollSlider() {
    const $slideItems = $secBoxHistory.find(".inner > *");
    const itemWidth = $slideItems.outerWidth(true);

    updateHistoryScrollButtons();

    $prevBtnPc.off("click").on("click", function () {
      const current = $secBoxHistory.scrollLeft();
      const target = Math.max(current - itemWidth, 0);
      $secBoxHistory.animate(
        { scrollLeft: target },
        500,
        updateHistoryScrollButtons
      );
    });

    $nextBtnPc.off("click").on("click", function () {
      const current = $secBoxHistory.scrollLeft();
      const maxScroll =
        $secBoxHistory[0].scrollWidth - $secBoxHistory[0].clientWidth;
      const target = Math.min(current + itemWidth, maxScroll);
      $secBoxHistory.animate(
        { scrollLeft: target },
        500,
        updateHistoryScrollButtons
      );
    });

    $secBoxHistory.off("scroll").on("scroll", updateHistoryScrollButtons);
  }

  function destroyPcScrollSlider() {
    $prevBtnPc.off("click");
    $nextBtnPc.off("click");
    $secBoxHistory.off("scroll");
  }

  function initSpSlickSlider() {
    if (!$historySlider.hasClass("slick-initialized")) {
      $historySlider.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $prevBtnSp,
        nextArrow: $nextBtnSp,
        infinite: true,
      });
    }
  }

  function destroySpSlickSlider() {
    if ($historySlider.hasClass("slick-initialized")) {
      $historySlider.slick("unslick");
    }
  }

  function checkHistorySlider() {
    if ($(window).width() <= slickHistoryBreakPoint) {
      destroyPcScrollSlider();
      initSpSlickSlider();
    } else {
      destroySpSlickSlider();
      initPcScrollSlider();
    }
  }

  checkHistorySlider();
  $(window).on("resize orientationchange", checkHistorySlider);

  const $photos = $("#section__menu .photoBox .photo");
  const $secBoxes = $("#section__menu .rightPanel .secBox");

  // 初期状態：最初の画像を表示
  $photos.removeClass("is-active").eq(0).addClass("is-active");

  $secBoxes.each(function (index) {
    $(this).on("mouseenter", function () {
      $photos.removeClass("is-active").eq(index).addClass("is-active");
    });
  });

  // ▼ メニューセクション slick + photo 切り替え ▼
  const $menuSlider = $("#section__menu .rightPanel");
  const $menuPhotos = $("#section__menu .photoBox .photo");
  const $pagerPrev = $("#section__menu .pager .prev");
  const $pagerNext = $("#section__menu .pager .next");
  const slickBreakPoint = replaceWidth;

  function updateMenuPhoto(index) {
    $menuPhotos
      .removeClass("is-active")
      .hide()
      .eq(index)
      .addClass("is-active")
      .show();
  }

  function initMenuSlick() {
    if (
      $(window).width() <= slickBreakPoint &&
      !$menuSlider.hasClass("slick-initialized")
    ) {
      $menuSlider.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        infinite: true,
        swipe: true,
      });

      updateMenuPhoto(0);

      $menuSlider.on("afterChange", function (event, slick, currentSlide) {
        updateMenuPhoto(currentSlide);
      });

      $pagerPrev.on("click", function () {
        $menuSlider.slick("slickPrev");
      });

      $pagerNext.on("click", function () {
        $menuSlider.slick("slickNext");
      });
    }
  }

  function destroyMenuSlick() {
    if ($menuSlider.hasClass("slick-initialized")) {
      $menuSlider.slick("unslick");
      $menuPhotos.removeAttr("style").removeClass("is-active");
    }
  }

  function checkMenuSlider() {
    if ($(window).width() <= slickBreakPoint) {
      initMenuSlick();
    } else {
      destroyMenuSlick();
    }
  }

  checkMenuSlider();

  $(window).on("resize orientationchange", function () {
    checkMenuSlider();
  });

  $menuSlider.on("afterChange", function (event, slick, currentSlide) {
    updateMenuPhoto(currentSlide);

    // ボタンのinactive制御
    // $pagerPrev.toggleClass("inactive", currentSlide === 0);
    // $pagerNext.toggleClass("inactive", currentSlide === slick.slideCount - 1);
  });

  // 初期状態のinactive設定
  // $pagerPrev.addClass("inactive");
  // $pagerNext.removeClass("inactive");

  // ▼ Flowセクション slick + pager制御（topPager + spPager対応）▼
  const $flowSlider = $("#section__flow .flowSliderList");
  const $flowPrev = $(
    "#section__flow .topPager .prev, #section__flow .spPager .prev"
  );
  const $flowNext = $(
    "#section__flow .topPager .next, #section__flow .spPager .next"
  );
  const $flowCurrentTop = $("#section__flow .topPager .count").eq(0);
  const $flowTotalTop = $("#section__flow .topPager .count").eq(1);
  const $flowCurrentSp = $("#section__flow .spPager .count").eq(0);
  const $flowTotalSp = $("#section__flow .spPager .count").eq(1);
  const flowBreakpoint = replaceWidth;
  const flowSlideCount = $("#section__flow .flowSliderBox").length;

  // 2桁ゼロ埋め表示
  function pad(num) {
    return ("0" + num).slice(-2);
  }

  // 現在のインデックスを正規化（無限スライド対策）
  function getRealIndex(current, total) {
    return ((current % total) + total) % total;
  }

  // インデックス更新関数
  function updateFlowCount(realIndex) {
    const displayIndex = pad(realIndex + 1);
    $flowCurrentTop.text(displayIndex);
    $flowCurrentSp.text(displayIndex);
  }

  // スライダー初期化
  function initFlowSlider() {
    if (!$flowSlider.hasClass("slick-initialized")) {
      const flowSlideCount = $("#section__flow .flowSliderBox").length;
      $flowSlider.slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        variableWidth: true,
        arrows: false,
        responsive: [
          {
            breakpoint: flowBreakpoint,
            settings: {
              slidesToShow: 1,
              variableWidth: false,
            },
          },
        ],
      });

      const totalText = pad(flowSlideCount);
      $flowTotalTop.text(totalText);
      $flowTotalSp.text(totalText);
      updateFlowCount(0);

      $flowSlider.on("afterChange", function (event, slick, currentSlide) {
        const realIndex = getRealIndex(currentSlide, flowSlideCount);
        updateFlowCount(realIndex);
        unifyFlowBoxHeight();
      });

      $flowPrev.on("click", function () {
        $flowSlider.slick("slickPrev");
      });
      $flowNext.on("click", function () {
        $flowSlider.slick("slickNext");
      });
    }
  }

  function unifyFlowBoxHeight() {
    const $boxes = $(".flowSliderBox");
    $boxes.css("height", "auto");

    const $images = $boxes.find("img");
    let loadedCount = 0;
    const totalImages = $images.length;

    if (totalImages === 0) {
      applyHeight(); // 画像がない場合は即時処理
      return;
    }

    $images.each(function () {
      // 新たに Image を生成して確実に load イベントを取る
      const img = new Image();
      img.onload = img.onerror = function () {
        loadedCount++;
        if (loadedCount === totalImages) {
          applyHeight();
        }
      };
      img.src = $(this).attr("src");
    });

    function applyHeight() {
      let maxHeight = 0;
      $boxes.each(function () {
        const h = $(this).outerHeight();
        if (h > maxHeight) maxHeight = h;
      });
      $boxes.css("height", maxHeight + "px");
    }
  }

  // 初期化 + リサイズ対応
  initFlowSlider();
  unifyFlowBoxHeight();
  $(window).on("resize orientationchange", function () {
    if (!$flowSlider.hasClass("slick-initialized")) {
      initFlowSlider();
    }
    unifyFlowBoxHeight();
  });

  // ▼ Staffセクション slick ▼
  const $staffSlider = $("#section__staff .staffSliderList");

  function initStaffSlider() {
    if (!$staffSlider.hasClass("slick-initialized")) {
      $staffSlider.slick({
        slidesToShow: 3.3,
        slidesToScroll: 1,
        infinite: false,
        arrows: false,
        responsive: [
          {
            breakpoint: 1140,
            settings: {
              slidesToShow: 2.2,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1.2,
            },
          },
        ],
      });
    }
  }

  // 初期化 & リサイズ対応
  initStaffSlider();
  $(window).on("resize orientationchange", function () {
    initStaffSlider();
  });

  $(".staffModalOpen").on("click", function () {
    const modalId = $(this).data("modal-id");
    const targetModal = $(`.staffItemModal[data-modal="${modalId}"]`);
    targetModal.css("display", "flex");
    $(".staffItemOverlay").show();
  });

  $(".staffItemModal .modalClose, .staffItemOverlay").on("click", function () {
    $(".staffItemModal").hide();
    $(".staffItemOverlay").hide();
  });

  $(".itemModalOpen").on("click", function () {
    const modalId = $(this).data("modal-id");
    const targetModal = $(`.itemModal[data-modal="${modalId}"]`);
    targetModal.css("display", "flex");
    $(".itemModalOverlay").show();
  });

  $(".itemModal .modalClose").on("click", function () {
    $(".itemModal").hide();
    $(".itemModalOverlay").hide();
  });
});

// $(function () {
//   const $slides = $(".topMvContainer .slideBox");
//   const total = $slides.length;
//   let currentIndex = 0;

//   // 初期クラス設定
//   updateSlideClasses();

//   setInterval(() => {
//     currentIndex = (currentIndex + 1) % total;
//     updateSlideClasses();
//   }, 5000);

//   function updateSlideClasses() {
//     $slides.removeClass("is-current is-next is-behind");

//     $slides.each((i, el) => {
//       if (i === currentIndex) {
//         $(el).addClass("is-current").css("z-index", 3);
//       } else if (i === (currentIndex + 1) % total) {
//         $(el).addClass("is-next").css("z-index", 2);
//       } else {
//         $(el).addClass("is-behind").css("z-index", 1);
//       }
//     });
//   }
// });

// $(function () {
//   const $container = $(".topMvContainer");
//   const $slides = $(".slideBox");
//   const $scrollIndicator = $(".mvScroll p");
//   const $mvScroll = $(".mvScroll");
//   const totalSlides = $slides.length;
//   const scrollDuration = $(window).height() * totalSlides;
//   const adjustedDuration = $(window).height() * (totalSlides - 1);

//   $(window).on("scroll", () => {
//     const scrollTop = $(window).scrollTop();
//     const ratio = Math.min(scrollTop / scrollDuration, 1);
//     const adjustedRatio = Math.min(scrollTop / adjustedDuration, 1);
//     const percent = Math.round(adjustedRatio * 100);
//     //$scrollIndicator.text(`Scroll for Concept ${percent}%`);

//     // slideBoxの表示切り替え
//     const step = 1 / totalSlides;
//     $slides.each((i, el) => {
//       const slideStart = i * step;
//       if (ratio >= (totalSlides - 1) * step || ratio >= slideStart) {
//         $(el).css("opacity", 1);
//       } else {
//         $(el).css("opacity", 0);
//       }
//     });

//     // ::after 疑似要素の height を更新
//     $mvScroll.css("--scroll-height", `${ratio * 80}px`);
//   });
// });

$(function () {
  const $container = $(".topMvContainer");
  const $slides = $(".slideBox");
  const $mvScroll = $(".mvScroll");
  const totalSlides = $slides.length;

  /*----- スクロール距離を短縮する係数 -----*/
  const SCROLL_SPEED = 0.6;
  const scrollDuration = $(window).height() * totalSlides * SCROLL_SPEED;
  const adjustedDuration =
    $(window).height() * (totalSlides - 1) * SCROLL_SPEED;

  /*----- デバイス幅で最大高さを切り替える -----*/
  const getMaxScrollHeight = () => ($(window).width() < replaceWidth ? 45 : 70);
  let maxScrollHeight = getMaxScrollHeight();

  // リサイズや画面回転でも再取得
  $(window).on("resize orientationchange", () => {
    maxScrollHeight = getMaxScrollHeight();
  });

  /*----------------------------------------*/
  $(window).on("scroll", () => {
    const scrollTop = $(window).scrollTop();
    const ratio = Math.min(scrollTop / scrollDuration, 1);
    const adjustedRatio = Math.min(scrollTop / adjustedDuration, 1);

    /* スライドの表示切替 */
    const step = 1 / totalSlides;
    $slides.each((i, el) => {
      const slideStart = i * step;
      $(el).css("opacity", ratio >= slideStart ? 1 : 0);
    });

    /* インジケータ ::after の高さ更新 */
    $mvScroll.css("--scroll-height", `${ratio * maxScrollHeight}px`);
  });
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
  $(".header .navOpen").click(function () {
    $(".header .navBox").fadeIn();
  });
  $(".header .navClose").click(function () {
    $(".header .navBox").fadeOut();
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
// scrollAnim( )
// 機能  ：ページ内リンクのスクロールアニメーション
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function scrollAnim(elem) {
  var speed = 1000;
  var NAV_ELEM = $(".header");

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
    // var navHeight = NAV_ELEM.innerHeight();
    // position = position - navHeight;

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
    // var navHeight = NAV_ELEM.innerHeight();
    // position = position - navHeight;

    $("body,html").stop().animate({ scrollTop: position }, 1000);
  }
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
  const $header = $(".header");
  const $bgWhites = $(".bgWhite");

  if (!$bgWhites.length) return;

  $(window).on("scroll", function () {
    const scrollTop = $(this).scrollTop();
    const headerHeight = $header.innerHeight();
    const currentPosition = scrollTop + headerHeight;

    let inAnyBgWhite = false;

    $bgWhites.each(function () {
      const $el = $(this);
      const elTop = $el.offset().top;
      const elBottom = elTop + $el.outerHeight();

      if (currentPosition >= elTop && currentPosition < elBottom) {
        inAnyBgWhite = true;
        return false; // 範囲に入っていたらループ終了
      }
    });

    if (inAnyBgWhite) {
      $header.addClass("changeHeader");
    } else {
      $header.removeClass("changeHeader");
    }
  });
}

$(function () {
  const $form = $("#contact");
  const $submit = $form.find("input[type=submit]");
  const $checkbox = $form.find(".agreeCheck input");
  const storageKey = "agreeChecked";

  // 保存されたチェック状態を反映
  const saved = localStorage.getItem(storageKey);
  if (saved === "true") {
    $checkbox.prop("checked", true);
    $submit.prop("disabled", false);
  } else {
    $checkbox.prop("checked", false);
    $submit.prop("disabled", true);
  }

  // チェックボックス変更時の挙動
  $checkbox.on("change", function () {
    const isChecked = $(this).prop("checked");
    $submit.prop("disabled", !isChecked);
    localStorage.setItem(storageKey, isChecked); // 状態を保存
  });

  // フォーム送信時、チェック状態をクリア
  $('.formConfirm input[name="mwform_submitButton"]').on("click", function () {
    localStorage.removeItem(storageKey);
  });
});
