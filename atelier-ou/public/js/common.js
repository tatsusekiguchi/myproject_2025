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

  if (_width >= 1025) {
    //幅に応じて読み込む画像を変更する
    changeImg(".switch");
  } else {
    changeImg(".switch");
  }
}

$(document).ready(function () {
  let progress = 0;
  const progressBar = $("#loading__progress .progress-bar");

  const interval = setInterval(function () {
    progress += 5;
    progressBar.css("width", progress + "%");

    if (progress >= 100) {
      clearInterval(interval);
      $("#loading").fadeOut("slow");
    }
  }, 100);

  $(window).on("load", function () {
    setTimeout(function () {
      $("#loading").fadeOut("slow");
    }, 2000);
  });
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
  scrollAnim(".navigationPanel a, .navigationBox a, .pagetop a, .contact a");

  //キービジュアルのスライダー設定
  //keyvSlider();

  //ヘッダースクロール
  setHeaderFixed();

  if ($(".topKvPanel").length > 0) {
    $(".kvSlider").slick({
      fade: true,
      arrows: false,
      dots: false,
      autoplay: true,
      autoplaySpeed: 3000,
      speed: 2000,
      pauseOnHover: false,
      pauseOnFocus: false,
      infinite: true,
    });
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

  if ($(".slidePanel").length > 0) {
    // document.readyの時点で初期化
    initializeInfiniteSlide();

    // window.loadの時点で再度初期化
    $(window).on("load", function () {
      initializeInfiniteSlide();
    });
  }

  $(".voiceModalOpen").on("click", function () {
    const modalId = $(this).data("modal-id");
    const targetModal = $(`.voiceItemModal[data-modal="${modalId}"]`);

    targetModal.css("display", "flex");

    setTimeout(() => {
      targetModal.find(".mvBox").slick("setPosition");
    }, 100);

    $(".voiceItemOverlay").show();
  });

  $(".voiceItemModal .modalClose, .voiceItemOverlay").on("click", function () {
    $(".voiceItemModal").hide();
    $(".voiceItemOverlay").hide();
  });

  $(window).on("load", function () {
    const hash = window.location.hash;

    if (hash && hash.startsWith("#voice")) {
      const modalId = hash.replace("#voice", "modal");
      const targetModal = $(`.voiceItemModal[data-modal="${modalId}"]`);

      if (targetModal.length) {
        targetModal.css("display", "flex");
        $(".voiceItemOverlay").show();
      }
    }
  });

  $(".voiceItemModal").each(function () {
    const $modal = $(this);
    const $slider = $modal.find(".mvBox");
    const $thumbnails = $modal.find(".photoList .photo");

    $slider.slick({
      fade: true,
      speed: 500,
      arrows: false,
      dots: false,
    });

    $thumbnails.on("click", function () {
      const index = $(this).index();
      $slider.slick("slickGoTo", index);
    });
  });

  $("#top input[type=submit]").prop("disabled", true);
  $(".agreeCheck input").on("change", function (e) {
    if ($(this).prop("checked") == true) {
      $("input[type=submit]").prop("disabled", false);
    } else {
      $("input[type=submit]").prop("disabled", true);
    }
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
  $(".accord dt").click(function () {
    $(this).toggleClass("active");

    $(this).next("dd").slideToggle();
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
// 機能  ：ページスクロール時の処理。
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function setHeaderFixed() {
  const $window = $(window);
  const $header = $(".header");
  const $footer = $(".footer");

  let isFixed = false;
  let isHidden = false;

  $window.on("scroll", function () {
    const scrollTop = $window.scrollTop();
    const headerHeight = $header.innerHeight();
    const footerTop = $footer.offset().top;
    const windowBottom = scrollTop + $window.height();

    if (scrollTop > headerHeight) {
      if (!isFixed) {
        $header.addClass("fixed").fadeIn(300);
        isFixed = true;
        isHidden = false;
      }

      if (windowBottom >= footerTop && !isHidden) {
        $header.stop(true, true).fadeOut(300);
        isHidden = true;
      } else if (windowBottom < footerTop && isHidden) {
        $header.stop(true, true).fadeIn(300);
        isHidden = false;
      }
    } else {
      if (isFixed || isHidden) {
        $header.removeClass("fixed").fadeIn(0); // 元に戻す
        isFixed = false;
        isHidden = false;
      }
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
    var navHeight = NAV_ELEM.innerHeight();
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
    var navHeight = NAV_ELEM.innerHeight();
    position = position - navHeight;

    $("body,html").stop().animate({ scrollTop: position }, 1000);
  }
}

// document.addEventListener("DOMContentLoaded", () => {
//   const container = document.querySelector(".pointsContainer");
//   const panels = document.querySelectorAll(".pointsPanel");
//   const progressBars = document.querySelectorAll(".progressbar");

//   if (!container || panels.length === 0) return;

//   const panelWidth = panels[0].clientWidth;
//   const panelCount = panels.length;

//   const prevBtns = container.querySelectorAll(".pager .prev");
//   const nextBtns = container.querySelectorAll(".pager .next");

//   // 更新関数：進捗バー + ボタン状態
//   function updateUI() {
//     const scrollLeft = container.scrollLeft;
//     const currentIndex = Math.round(scrollLeft / panelWidth);

//     const progress =
//       (scrollLeft / (container.scrollWidth - container.clientWidth)) * 100;
//     progressBars.forEach((bar) => {
//       bar.style.width = `${progress}%`;
//     });

//     // 各ボタンにinActive設定
//     prevBtns.forEach((btn) =>
//       btn.classList.toggle("inActive", currentIndex === 0)
//     );
//     nextBtns.forEach((btn) =>
//       btn.classList.toggle("inActive", currentIndex >= panelCount - 1)
//     );
//   }

//   // 初期表示
//   updateUI();

//   container.addEventListener("scroll", () => {
//     updateUI();
//   });

//   prevBtns.forEach((btn) => {
//     btn.addEventListener("click", () => {
//       const currentIndex = Math.round(container.scrollLeft / panelWidth);
//       if (currentIndex > 0) {
//         container.scrollTo({
//           left: (currentIndex - 1) * panelWidth,
//           behavior: "smooth",
//         });
//       }
//     });
//   });

//   nextBtns.forEach((btn) => {
//     btn.addEventListener("click", () => {
//       const currentIndex = Math.round(container.scrollLeft / panelWidth);
//       if (currentIndex < panelCount - 1) {
//         container.scrollTo({
//           left: (currentIndex + 1) * panelWidth,
//           behavior: "smooth",
//         });
//       }
//     });
//   });
// });

$(document).ready(function () {
  const $container = $(".pointsContainer");
  const $progressBars = $(".progressbar");
  const $panels = $(".pointsPanel");
  const totalSlides = $panels.length;

  $container.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    infinite: true,
    speed: 800,
    autoplay: true,
    autoplaySpeed: 4000,
    pauseOnHover: true,
    pauseOnFocus: false,
    adaptiveHeight: false,
  });

  // 進捗バー更新関数
  function updateProgressBar(currentIndex) {
    const progress =
      (((currentIndex + 1) % totalSlides || totalSlides) / totalSlides) * 100;
    $progressBars.css("width", `${progress}%`);
  }

  // 初期状態
  updateProgressBar(0);

  // スライド変更時に進捗バー更新
  $container.on("afterChange", function (event, slick, currentSlide) {
    updateProgressBar(currentSlide);
  });

  // 前へボタンクリック
  $(".pager .prev").on("click", function () {
    $container.slick("slickPrev");
  });

  // 次へボタンクリック
  $(".pager .next").on("click", function () {
    $container.slick("slickNext");
  });

  // SP：タッチで一時停止 → 1秒後に再開
  $container.on("touchstart", function () {
    $container.slick("slickPause");
  });
  $container.on("touchend", function () {
    setTimeout(() => {
      $container.slick("slickPlay");
    }, 1000);
  });

  // PC：マウスオーバーで一時停止、アウトで再開
  $container.on("mouseenter", function () {
    $container.slick("slickPause");
  });
  $container.on("mouseleave", function () {
    $container.slick("slickPlay");
  });
});
