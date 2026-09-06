/* Javascript */
$(document).ready(function () {
  // 現在のページのパス部分を取得
  var currentPath = window.location.pathname;

  // パスの末尾にあるスラッシュを削除（存在する場合）
  var trimmedPath = currentPath.endsWith("/")
    ? currentPath.slice(0, -1)
    : currentPath;

  // ベースURL（最後のセグメント）を取得
  var basePath = trimmedPath.substring(trimmedPath.lastIndexOf("/") + 1);

  if ($(".enMain").length > 0) {
    $(".header .en").hide();
    $(".header .jp").show();
  } else {
    $(".header .en").show();
    $(".header .jp").hide();
  }

  // ベースURLを使用してリンクを動的に設定
  if ($(".topMain").length > 0) {
    if (basePath.endsWith("en")) {
      $(".header .jp > a").attr("href", "/");
    } else {
      $(".header .en > a").attr("href", "en");
    }
  } else {
    if (basePath.endsWith("En")) {
      $(".header .jp > a").attr("href", basePath.slice(0, -2));
    } else {
      $(".header .en > a").attr("href", basePath + "En");
    }
  }
});
