# 採用情報の募集要項

## 設定方法

1. WordPress管理画面の「ACF → ツール → フィールドグループをインポート」で `recruitment-tabs.json` を読み込みます。
2. 採用情報の固定ページで、ページテンプレート「採用情報」（`recruit/index.php`）を選択します。
3. ACFの「正社員」「パート」タブから各区分の募集項目（項目名・内容）を入力し、保存します。

繰り返しフィールドを使用するため、既存サイトと同様にACF PROが必要です。JSONはフィールド定義のみで、募集条件のデータは含みません。

テーマに `acf-json/group_recruitment_tabs.json` を配置する場合は、ACFのLocal JSON同期でも同じ設定を読み込めます。インポート版とLocal JSON版は同じグループキーです。

## フィールド

| 区分 | 募集要項（繰り返し） |
| --- | --- |
| 正社員 | `recruitment_requirements_full_time` |
| パート | `recruitment_requirements_part_time` |

各行は `label`（項目名）と `value`（内容）で構成されます。内容の改行は表示に反映されます。

旧フィールド `recruitment_requirements` は使用しません。募集要項が未入力の区分は「現在、募集情報を準備中です。」と表示し、応募ボタンを非表示にします。

応募先URLの個別設定は廃止しました。募集要項を表示する区分の「ご応募はこちら」は、共通の `/recruit-application/` にリンクします。

## 応募フォーム

フォームIDは **372** です。入力・確認の2ページで同じフォームを使用します。完了ページは既存の送信完了ページと同様にPHPテンプレートへ直接記述しています。

フォーム内HTML・メール文面は `wp/mwform/recruitment-application/` にまとめています。固定ページとMW WP Formの設定方法は同ディレクトリの `README.md` を参照してください。

## 反映するファイル

- `wp/recruit/index.php` → テーマの `recruit/index.php`
- `wp/functions.php` と `wp/inc/recruitment-application.php`
- `wp/recruit-application/`、`wp/recruit-application-confirm/`、`wp/recruit-application-complete/`
- `public/js/common.js` → テーマの `js/common.js`
- `public/css/layout.css` → テーマの `css/layout.css`
- フィールド設定は上記JSONのインポート、またはLocal JSON同期で反映

Pug側と生成HTMLにも応募ページへのリンク・3ページの静的プレビューを用意しています。静的プレビューでは送信しません。

ACF公式資料: https://www.advancedcustomfields.com/resources/local-json/
