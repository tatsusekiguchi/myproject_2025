# 採用応募フォーム（MW WP Form ID: 372）

既存フォームのレイアウトを使用し、別紙の応募項目を実装しています。見学申し込み（ID: 30）・お問い合わせ（ID: 29）とは独立しています。

## 1. PHP・CSS・JavaScriptを反映

次のファイルをWordPressテーマの同じ相対パスへ反映してください。

- `wp/functions.php`
- `wp/inc/recruitment-application.php`
- `wp/recruit/index.php`
- `wp/recruit-application/index.php`
- `wp/recruit-application-confirm/index.php`
- `wp/recruit-application-complete/index.php`
- `public/css/layout.css` → テーマの `css/layout.css`
- `public/js/common.js` → テーマの `js/common.js`

`wp/functions.php` から共通ヘルパーを読み込みます。フォームIDは `wp/inc/recruitment-application.php` の `ny_recruitment_application_form_id()` に1か所だけ定義しています。

## 2. フォーム372の管理画面へ貼り付け

- 「フォーム」欄：`form.html` の内容をすべて貼り付けます。`<form>` タグはMW WP Formが生成するため、追加しないでください。
- 完了ページは既存の送信完了ページと同様にPHPテンプレートへ直接記述しています。「完了画面メッセージ」欄への貼り付けは不要です。`complete.html` は旧構成のファイルで、使用しません。
- HTMLはテキスト／コード編集で貼り付けてください。フォーム372に限り、テーマ側で自動pタグの追加を無効化しています。

フォーム内の `[ny_recruitment_privacy_link]` はテーマ側で定義しています。WordPressの設置先に合わせたURLを出力します。完了ページのトップへ戻るリンクはPHPテンプレートに直接記述しています。

## 3. WordPress固定ページを3つ作成

| ページ名 | スラッグ | ページテンプレート |
| --- | --- | --- |
| 採用応募 | `recruit-application` | 採用応募 |
| 採用応募内容確認 | `recruit-application-confirm` | 採用応募内容確認 |
| 採用応募送信完了 | `recruit-application-complete` | 採用応募送信完了 |

入力・確認テンプレートが `[mwform_formkey key="372"]` を出力します。完了テンプレートはメッセージを直接表示し、フォームを呼び出しません。3ページとも固定ページ本文へのショートコード追加は不要です。

## 4. フォーム372のURL設定

以下をサイトの実際のURLで設定してください。現在のWordPress確認環境の場合は次のとおりです。

| 設定 | URL |
| --- | --- |
| 入力画面URL | `http://nagoyayuuka-com.check-xserver.jp/recruit-application/` |
| 確認画面URL | `http://nagoyayuuka-com.check-xserver.jp/recruit-application-confirm/` |
| 完了画面URL | `http://nagoyayuuka-com.check-xserver.jp/recruit-application-complete/` |
| バリデーションエラー時のURL | 入力画面URLと同じ |

確認画面への直接アクセスは許可しない設定にします。完了ページは既存の送信完了ページと同じ静的な表示です。本番移行時は上記URLのドメインも本番用へ変更してください。

「送信内容確認」→入力内容の確認→「送信」→応募完了の順で遷移します。確認画面のボタンは既存のcontactConfirmと同じ `.submitButton > .send / .back` 構造で、PCは左に「修正」・右に「送信」、スマートフォンは上に「送信」・下に「修正」を表示します。確認画面の「修正」で入力に戻れます。送信後はMW WP FormのURL設定に従って完了ページへ遷移します。

## 5. メール設定

- 管理者宛メールの本文：`admin-mail.txt` の2行目以降を使用します。先頭行は件名例です。
- 自動返信メールの本文：`reply-mail.txt` の2行目以降を使用します。先頭行は件名例です。
- 自動返信メール宛先の項目名：`email`
- 管理者の送信先と送信元のメールアドレスは、実際に使用する園のアドレスを設定してください。宛先はソースに仮設定していません。

フォームコードとメール文面を作成しただけではメールは送られません。管理画面で設定後、テスト用の情報・メールアドレスで送受信と画面遷移をご確認ください。

## 入力項目と検証

| 項目 | name | 必須 |
| --- | --- | --- |
| 応募内容（園見学・資料請求・面接希望） | `application_purpose` | 必須 |
| 応募種別（新卒採用・中途採用・パートタイム） | `application_type` | 必須 |
| 氏名 | `applicant_name` | 必須 |
| カナ氏名 | `applicant_kana` | 必須 |
| 生年月日（年・月・日のプルダウン） | `birth_year` / `birth_month` / `birth_day` | すべて必須 |
| 在籍校／出身校 | `school` | 任意 |
| 卒業見込年月 | `graduation_date` | 任意 |
| 保有資格（複数選択可） | `qualifications` | 必須 |
| 郵便番号 | `postal_code` | 必須 |
| 住所 | `address` | 必須 |
| メールアドレス | `email` | 必須 |
| 電話番号 | `phone` | 必須 |
| 備考 | `remarks` | 任意 |
| 個人情報の取り扱いへの同意 | `privacy_agreement` | 必須 |

フォーム372専用のPHPフックで、必須・メール・電話・郵便番号・カタカナ・選択肢の妥当性を検証します。存在しない日付や未来の生年月日、「なし」と他の資格の同時選択もエラーにします。生年の選択肢は1900年からWordPress設定の現在年まで自動生成します。管理画面に別途バリデーションルールを重複登録する必要はありません。

テーマ側のフックを反映することが必須です。フォーム372に以前の別用途の検証ルールがある場合は、今回の項目との整合を確認してください。既存のフォーム29・30には今回の検証を追加しません。

## ACFの変更

`wp/acf-import/recruitment-tabs.json` またはLocal JSONを同期してください。正社員・パート別の応募先URLフィールドを廃止し、募集要項のフィールドだけ残しています。既存の募集要項データは変更しません。

## 確認手順

1. 同意だけチェックし、他を未入力のまま「送信内容確認」を押すと、必須項目のエラーが表示されること。
2. 2月30日などの存在しない日付・未来の日付・不正な連絡先を送れないこと。
3. 「なし」と他の資格を同時に選ぶとエラーになること。
4. 同意チェック前は確認ボタンが無効で、チェック後に操作できること。
5. 確認画面では入力欄に代わって内容が表示され、「送信」「修正」が操作できること。
6. 「修正」で戻ると入力内容が保持されること。
7. 送信後に完了画面へ進み、管理者宛メールと自動返信メールの全項目が一致すること。
8. 確認ページの直接アクセス制限と、送信後の完了ページへの遷移を確認すること。
9. 正社員・パート双方の「ご応募はこちら」が専用ページへリンクすること。

Pugから生成した `public/recruit-application*/` はレイアウト確認用です。送信ボタンは無効にしており、メール送信・遷移の検証はWordPressのフォーム372で行ってください。

公式資料：
- https://mw-wp-form.web-soudan.co.jp/manual/url/
- https://mw-wp-form.web-soudan.co.jp/shortcode/mwform_submitbutton/
- https://mw-wp-form.web-soudan.co.jp/shortcode/mwform_select/
