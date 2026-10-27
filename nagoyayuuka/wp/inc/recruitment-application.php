<?php
/**
 * 採用応募フォームの共通設定。
 * 応募用MW WP Form（ID: 372）を入力・確認・完了ページで共通使用する。
 */
function ny_recruitment_application_form_id() {
	return 372;
}

function ny_is_recruitment_application_page() {
	return is_page_template(array(
		'recruit-application/index.php',
		'recruit-application-confirm/index.php',
		'recruit-application-complete/index.php',
	));
}

function ny_render_recruitment_application_form() {
	$form_id = ny_recruitment_application_form_id();
	if (!$form_id || !shortcode_exists('mwform_formkey') || get_post_type($form_id) !== 'mw-wp-form') {
		echo '<p class="recruitmentFormNotice">現在、応募フォームを準備中です。お急ぎの方はお電話にてお問い合わせください。<br><a href="tel:0524820200">TEL：052-482-0200</a></p>';
		return;
	}
	echo do_shortcode('[mwform_formkey key="' . $form_id . '"]');
}

function ny_recruitment_application_choices($children, $atts) {
	$name = isset($atts['name']) ? $atts['name'] : '';
	if (!in_array($name, array('birth_year', 'birth_month', 'birth_day'), true)) {
		return $children;
	}
	$choices = array('' => '選択');
	$values = $name === 'birth_year' ? range((int) current_time('Y'), 1900) : range(1, $name === 'birth_month' ? 12 : 31);
	foreach ($values as $value) {
		$choices[(string) $value] = (string) $value;
	}
	return $choices;
}

function ny_recruitment_application_validation($validation, $data, $form_data) {
	$required = array(
		'application_purpose' => '応募内容',
		'application_type' => '応募種別',
		'applicant_name' => '氏名',
		'applicant_kana' => 'カナ氏名',
		'birth_year' => '生年月日の年',
		'birth_month' => '生年月日の月',
		'birth_day' => '生年月日の日',
		'qualifications' => '保有資格',
		'postal_code' => '郵便番号',
		'address' => '住所',
		'email' => 'メールアドレス',
		'phone' => '電話番号',
		'privacy_agreement' => '個人情報の取り扱いへの同意',
	);
	foreach ($required as $name => $label) {
		$options = array('message' => $label . 'を入力・選択してください。');
		$validation->set_rule($name, 'required', $options);
		$validation->set_rule($name, 'noempty', $options);
	}
	$validation->set_rule('email', 'mail');
	$validation->set_rule('phone', 'tel');
	$validation->set_rule('postal_code', 'zip');
	$validation->set_rule('applicant_kana', 'katakana');
	$allowed = array(
		'application_purpose' => array('園見学', '資料請求', '面接希望'),
		'application_type' => array('新卒採用', '中途採用', 'パートタイム'),
		'birth_year' => range(1900, (int) current_time('Y')),
		'birth_month' => range(1, 12),
		'birth_day' => range(1, 31),
		'privacy_agreement' => array('同意します'),
	);
	foreach ($allowed as $name => $values) {
		$validation->set_rule($name, 'in', array('options' => $values));
	}
	$year = (int) $form_data->get('birth_year');
	$month = (int) $form_data->get('birth_month');
	$day = (int) $form_data->get('birth_day');
	if ($year && $month && $day && (!checkdate($month, $day, $year) || sprintf('%04d%02d%02d', $year, $month, $day) > current_time('Ymd'))) {
		$validation->set_rule('birth_day', 'in', array('options' => array(), 'message' => '正しい生年月日を選択してください。'));
	}
	$qualifications = $form_data->get('qualifications');
	if (is_string($qualifications) && $qualifications !== '') {
		$selected = array_map('trim', explode(',', $qualifications));
		$valid_qualifications = array('保育士', '保育士取得見込み', '幼稚園教諭', '幼稚園教諭取得見込み', 'なし');
		if (array_diff($selected, $valid_qualifications) || (in_array('なし', $selected, true) && count($selected) > 1)) {
			$validation->set_rule('qualifications', 'in', array('options' => array(), 'message' => '保有資格を確認してください。「なし」は他の資格と同時に選択できません。'));
		}
	}
	return $validation;
}

// MW WP Formが送信内容を処理するtemplate_redirectより前に登録する。
function ny_register_recruitment_application_hooks() {
	$form_id = ny_recruitment_application_form_id();
	if (!$form_id) {
		return;
	}
	add_filter('mwform_choices_mw-wp-form-' . $form_id, 'ny_recruitment_application_choices', 10, 2);
	add_filter('mwform_validation_mw-wp-form-' . $form_id, 'ny_recruitment_application_validation', 10, 3);
	add_filter('mwform_content_wpautop_mw-wp-form-' . $form_id, '__return_false');
}
add_action('wp_loaded', 'ny_register_recruitment_application_hooks');

add_filter('mwform_send_nocache_header', function ($nocache) {
	return $nocache || ny_is_recruitment_application_page();
});

add_shortcode('ny_recruitment_privacy_link', function () {
	return '<a href="' . esc_url(home_url('/privacy/')) . '" target="_blank" rel="noopener">プライバシーポリシー</a>';
});

add_shortcode('ny_recruitment_home_link', function () {
	return '<a href="' . esc_url(home_url('/')) . '"><span>トップへもどる</span><div class="arrow"><img src="' . esc_url(get_template_directory_uri() . '/image/common/btn_top_top_arrow.png') . '" alt=""></div></a>';
});
