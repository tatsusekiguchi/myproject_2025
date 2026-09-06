window.document.addEventListener("DOMContentLoaded", function() {
  const { select, dispatch, subscribe } = wp.data;

  // エディタが読み込まれたかどうか
  const isEditorReadyPromise = new Promise((resolve) => {
    const unsubscribe = subscribe(() => {
      const isNewPost = select("core/editor").isCleanNewPost();
      if (isNewPost) {
        unsubscribe();
        resolve();
      }
      const blocks = select("core/block-editor").getBlocks();
      if (blocks.length > 0) {
        unsubscribe();
        resolve();
      }
    });
  });

  // エディタが読み込まれたら実行
  isEditorReadyPromise.then(() => {
    const getCategories = () => select("core/editor").getEditedPostAttribute("categories");
    // 編集画面を開いた時点での選択カテゴリ
    let categories = getCategories();

    // カテゴリが選択状態に応じてロック/ロック解除
    const switchAlert = () => {
      // カテゴリ未選択時のバリデーション
      if (categories.length === 0) {
        dispatch("core/notices").createNotice("error", "カテゴリーを選択してください", {
          id: "notice_category_state",
          isDismissible: false,
        });
        // 保存をロックして公開出来ないように
        dispatch("core/editor").lockPostSaving("sample_category_lock");
        // カテゴリ選択済
      } else {
        // 通知を非表示にして保存のロックを解除
        dispatch("core/notices").removeNotice("notice_category_state");
        dispatch("core/editor").unlockPostSaving("sample_category_lock");
      }
    };
    // 最初に実行
    switchAlert();

    // 変更ごとに実行
    subscribe(() => {
      const newCategories = getCategories();
      const categoriesChanged = newCategories !== categories;
      categories = newCategories;
      if (!categoriesChanged) return;
      switchAlert();
    });
  });
});