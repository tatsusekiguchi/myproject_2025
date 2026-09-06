$(function () {
  // 各フォームごとに個別に処理
  $(".form").each(function (index) {
    var $form = $(this);
    var formId = "form-" + index;

    // ユニークなIDを設定（メール確認用）
    $form.find(".validateEmail").attr("id", "email-" + index);

    // フォーム内の送信ボタンを無効化
    $form.find("button[type=submit]").prop("disabled", true);

    // フォーム内のチェックボックスのみ監視
    $form.find(".agreeCheck input").on("change", function (e) {
      if ($(this).prop("checked") == true) {
        $form.find("button[type=submit]").prop("disabled", false);
      } else {
        $form.find("button[type=submit]").prop("disabled", true);
      }
    });

    // 必須項目が未入力のときのエラーメッセージの表示位置
    const errTxtPosition = "topLeft";

    $form
      .find(".validateRequired")
      .addClass("validate[required]")
      .attr("data-prompt-position", errTxtPosition);
    $form
      .find(".validatePhone1")
      .addClass("validate[required,custom[phone]]")
      .attr("data-prompt-position", errTxtPosition);
    $form
      .find(".validatePhone2")
      .addClass("validate[custom[phone]]")
      .attr("data-prompt-position", errTxtPosition);
    $form
      .find(".validateEmail")
      .addClass("validate[required,custom[email]]")
      .attr("data-prompt-position", errTxtPosition);
    $form
      .find(".validateConfirmEmail")
      .addClass("validate[required,equals[email-" + index + "]]")
      .attr("data-prompt-position", errTxtPosition);
    $form
      .find(".validateMinCheckbox")
      .addClass("validate[minCheckbox[1]]")
      .attr("data-prompt-position", errTxtPosition);
    $form
      .find(".check1")
      .addClass("validate[minCheckbox[1]]")
      .attr("data-prompt-position", errTxtPosition);
    $form
      .find(".validateGroup")
      .addClass("validate[groupRequired[checkContact]]")
      .attr("data-prompt-position", errTxtPosition);
    $form
      .find(".validateHiragana1")
      .addClass("validate[required,custom[hiragana]]")
      .attr("data-prompt-position", errTxtPosition);
    $form
      .find(".validateHiragana2")
      .addClass("validate[custom[hiragana]]")
      .attr("data-prompt-position", errTxtPosition);
    $form
      .find(".validateKatakana1")
      .addClass("validate[required,custom[katakana]]")
      .attr("data-prompt-position", errTxtPosition);
    $form
      .find(".validateKatakana2")
      .addClass("validate[custom[katakana]]")
      .attr("data-prompt-position", errTxtPosition);

    // フリガナ
    $.fn.autoKana("input.name", ".kana", {
      katakana: false, // ひらがな
      //katakana: true, // カタカナ
    });

    // 各フォーム内の郵便番号処理（フォームごとに個別設定）
    var formIndex = index;
    var postalId1 = "postal_01_" + formIndex;
    var postalId2 = "postal_02_" + formIndex;
    var addressId1 = "address01_" + formIndex;
    var addressId2 = "address02_" + formIndex;

    // 各フォームの要素にユニークIDを付与
    $form.find(".postal_01").attr("id", postalId1);
    $form.find(".postal_02").attr("id", postalId2);
    $form.find(".address01").attr("id", addressId1);
    $form.find(".address02").attr("id", addressId2);

    // jpostalを各フォームごとに設定（動的オブジェクト作成）
    var addressConfig = {};
    addressConfig["#" + addressId1] = "%3";
    addressConfig["#" + addressId2] = "%4%5";

    $("#" + postalId1).jpostal({
      postcode: [
        "#" + postalId1, //郵便番号上3ケタ
        "#" + postalId2, //郵便番号下4ケタ
      ],
      address: addressConfig,
    });

    // 各フォームに対して個別にバリデーションを設定
    $form.validationEngine("attach", {
      onValidationComplete: function (form, status) {
        if (status) {
          sendForm($form);
        }
      },
    });
  });
});

function sendForm($targetForm) {
  var formDataArr = $targetForm.serializeArray();
  var formData = new FormData();
  formData.append(
    "formtype",
    $targetForm.data("formtype") ? $targetForm.data("formtype") : ""
  );

  if (formDataArr.length > 0) {
    // 日付用の変数（必要に応じて追加する）
    var postal01;
    var postal02;
    var yearArr0 = [];
    var yearArr1 = [];
    var yearArr2 = [];
    var yearArr3 = [];

    formDataArr.map(function (item) {
      // 日付のフォーマット
      switch (item.name) {
        // 郵便番号
        case "postal_01":
          postal01 = item.value ? item.value : "";
          break;
        case "postal_02":
          postal02 = item.value ? "-" + item.value : "";
          break;
        case "address01":
          address01 = item.value ? item.value : "";
          break;
        case "address02":
          address02 = item.value ? item.value : "";
          break;
        case "address03":
          address03 = item.value ? item.value : "";
          formData.append(
            "住所",
            "〒" +
              postal01 +
              postal02 +
              "\n" +
              "　　　" +
              address01 +
              address02 +
              address03
          );
          break;
        // 生年月日
        // ▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△
        case "year":
          yearArr0["年"] = item.value ? item.value : "";
          break;

        case "month":
          yearArr0["月"] = item.value ? item.value : "";
          break;

        case "day":
          yearArr0["日"] = item.value ? item.value : "";

          var yearStr0 = "";
          for (key in yearArr0) {
            yearStr0 += yearArr0[key] + key;
          }
          formData.append("生年月日", yearStr0);
          break;
        // ▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△

        // 希望日時1
        // ▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△
        case "year1":
          yearArr1["年"] = item.value ? item.value : "";
          break;

        case "month1":
          yearArr1["月"] = item.value ? item.value : "";
          break;

        case "day1":
          yearArr1["日"] = item.value ? item.value : "";
          break;

        case "hour1":
          yearArr1[""] = item.value ? item.value : "";
          var yearStr1 = "";
          for (key in yearArr1) {
            yearStr1 += yearArr1[key] + key;
          }
          formData.append("希望日時1", yearStr1);
          break;

        case "minute1":
          yearArr1["分"] = item.value ? item.value : "";

          var yearStr1 = "";
          for (key in yearArr1) {
            yearStr1 += yearArr1[key] + key;
          }
          formData.append("希望日時1", yearStr1);
          break;
        // ▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△

        // 希望日時2
        // ▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△
        case "year2":
          yearArr2["年"] = item.value ? item.value : "";
          break;

        case "month2":
          yearArr2["月"] = item.value ? item.value : "";
          break;

        case "day2":
          yearArr2["日"] = item.value ? item.value : "";
          break;

        case "hour2":
          yearArr2[""] = item.value ? item.value : "";
          var yearStr2 = "";
          for (key in yearArr2) {
            yearStr2 += yearArr2[key] + key;
          }
          formData.append("希望日時2", yearStr2);
          break;

        case "minute2":
          yearArr2["分"] = item.value ? item.value : "";

          var yearStr2 = "";
          for (key in yearArr2) {
            yearStr2 += yearArr2[key] + key;
          }
          formData.append("希望日時2", yearStr2);
          break;
        // ▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△

        // 希望日時3
        // ▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△
        case "year3":
          yearArr3["年"] = item.value ? item.value : "";
          break;

        case "month3":
          yearArr3["月"] = item.value ? item.value : "";
          break;

        case "day3":
          yearArr3["日"] = item.value ? item.value : "";
          break;

        case "hour3":
          yearArr3["時"] = item.value ? item.value : "";
          break;

        case "minute3":
          yearArr3["分"] = item.value ? item.value : "";

          var yearStr3 = "";
          for (key in yearArr3) {
            yearStr3 += yearArr3[key] + key;
          }
          formData.append("希望日時3", yearStr3);
          break;
        // ▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△

        default:
          if (item.value) {
            // checkbox対策
            // ▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△
            if (item.value == "__checkbox") {
              if (!formData.has(item.name)) {
                formData.append(item.name, " ");
                break;
              }
            } else {
              formData.append(item.name, item.value);
            }
            // ▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△▼△
          } else {
            formData.append(item.name, " ");
          }
          break;
      }

      if ($("[name='" + item.name + "']").data("displaynameattr")) {
        formData.append(
          "display_name__" + item.name,
          $("[name='" + item.name + "']").data("displaynameattr")
        );
      }
    });

    // 添付ファイル数に応じて増減させる
    // formData.append('file1', $("input[name='file1']").prop("files")[0]);
    // formData.append('file2', $("input[name='file2']").prop("files")[0]);
    // formData.append('file3', $("input[name='file3']").prop("files")[0]);
    // formData.append('file4', $("input[name='file4']").prop("files")[0]);
    // formData.append('file5', $("input[name='file5']").prop("files")[0]);
    // console.log(...formData.entries());
    // return;

    $.ajax({
      type: "POST",
      url: "/ajax/contact",
      data: formData,
      timeout: 15000, // タイムアウト：15秒
      dataType: "json",
      processData: false,
      contentType: false,
    })
      .done(function (res) {
        if (res.status === "error") {
          alert(res.errorMsg);
        } else {
          $targetForm[0].reset();
          window.location.href = $targetForm.attr("action");
        }
      })
      .fail(function () {
        alert("エラーが発生しました。");
      });
  } else {
    alert("送信に失敗しました");
  }
}
