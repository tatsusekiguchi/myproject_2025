// 文字分割アニメーション
class SplitTextAnimation {
  constructor() {
    this.init();
  }

  init() {
    // ページ読み込み完了後に実行
    if (document.readyState === "loading") {
      document.addEventListener("DOMContentLoaded", () =>
        this.setupSplitText()
      );
    } else {
      this.setupSplitText();
    }
  }

  setupSplitText() {
    const splitTextElements = document.querySelectorAll(".split-text");

    // すべての要素をスクロール監視対象とする
    splitTextElements.forEach((element, index) => {
      const text = element.getAttribute("data-text") || element.textContent;

      // kvTitleBox内の要素かどうかをチェック
      const isKvTitle = element.closest(".kvTitleBox");

      if (isKvTitle) {
        // kvTitleBox要素は少し早めにアニメーション開始
        this.splitText(element, text, index * 0.2, true, true);
      } else {
        // その他の要素は通常通り
        this.splitText(element, text, index * 0.1, true);
      }
    });

    // スクロール監視を開始
    this.observeElements();
  }

  splitText(
    element,
    text,
    baseDelay = 0,
    waitForScroll = false,
    isKvTitle = false
  ) {
    // 既存のコンテンツをクリア
    element.innerHTML = "";

    // 文字を一文字ずつspanで包む
    const chars = text.split("");

    chars.forEach((char, index) => {
      const span = document.createElement("span");
      span.classList.add("char");

      if (char === " ") {
        span.classList.add("space");
        span.innerHTML = "&nbsp;";
      } else {
        span.textContent = char;
      }

      // アニメーション遅延を設定
      const delay = baseDelay + index * 0.05; // 0.05秒ずつ遅延
      span.style.animationDelay = `${delay}s`;

      // スクロール待機の場合は初期状態を維持
      if (waitForScroll) {
        span.style.animationPlayState = "paused";
      }

      element.appendChild(span);
    });

    // スクロール待機要素にクラスを追加
    if (waitForScroll) {
      element.classList.add("scroll-waiting");
      if (isKvTitle) {
        element.classList.add("kv-title-element");
      }
    }
  }

  // 交差観察者を使用してスクロール時にアニメーションを開始
  observeElements() {
    // kvTitle要素用の観察者（より敏感な設定）
    const kvObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const element = entry.target;
            if (element.classList.contains("scroll-waiting")) {
              // スクロール待機中の要素のアニメーションを開始
              const chars = element.querySelectorAll(".char");
              chars.forEach((char) => {
                char.style.animationPlayState = "running";
              });
              element.classList.remove("scroll-waiting");
              element.classList.add("animated");
            }
          }
        });
      },
      {
        threshold: 0.1, // kvTitle要素は10%表示で開始
        rootMargin: "50px 0px -10px 0px", // 上側に余裕を持たせる
      }
    );

    // 通常要素用の観察者
    const normalObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const element = entry.target;
            if (element.classList.contains("scroll-waiting")) {
              // スクロール待機中の要素のアニメーションを開始
              const chars = element.querySelectorAll(".char");
              chars.forEach((char) => {
                char.style.animationPlayState = "running";
              });
              element.classList.remove("scroll-waiting");
              element.classList.add("animated");
            }
          }
        });
      },
      {
        threshold: 0.3,
        rootMargin: "0px 0px -50px 0px",
      }
    );

    // 要素を分けて監視
    const scrollWaitingElements = document.querySelectorAll(".scroll-waiting");
    scrollWaitingElements.forEach((element) => {
      if (element.classList.contains("kv-title-element")) {
        kvObserver.observe(element);
      } else {
        normalObserver.observe(element);
      }
    });
  }
}

// インスタンス化
const splitTextAnimation = new SplitTextAnimation();
