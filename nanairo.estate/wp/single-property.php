<?php
/*
Template Name: single-property
*/
?>
<?php get_header(); ?>
<main id="property">
    <div class="mainSection section">
        <div class="topContainer">
            <div class="secWrap01">
                <div class="pageSecTtlBox">
                    <div class="pageSecTtl">
                        <h1>土地情報</h1>
                    </div>
                </div>
                <div class="topTitleBox">
					<?php
						$post_date = get_the_date('Y-m-d');
						$post_timestamp = strtotime($post_date);
						$now_timestamp = strtotime(current_time('Y-m-d'));
						$days_diff = ($now_timestamp - $post_timestamp) / (60 * 60 * 24);
					?>
					<?php if (get_field('is_new') && $days_diff <= 30) : ?>
						<div class="new">
							<img src="<?php echo get_template_directory_uri(); ?>/image/property/top_icon_new.png" alt="新着">
						</div>
					<?php endif; ?>
                    <div class="title">
                        <h2><?php the_field('property_title'); ?></h2>
                    </div>
                </div>
                <?php if (get_field('popup_comment')) : ?>
                <div class="topCommentBox">
                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/image/property/top_comment_cat.png" alt="吹き出し"></div>
                    <div class="balloon">
                        <p><?php echo nl2br(esc_html(get_field('popup_comment'))); ?></p>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if (have_rows('image_with_caption')) : ?>
        <div class="caseSliderPanel">
            <div class="caseSliderContainer">
                <div class="caseSlider">
                    <?php while (have_rows('image_with_caption')) : the_row(); ?>
                        <div class="slider">
                            <?php $img = get_sub_field('image_with_caption_img'); ?>
                            <img src="<?php echo esc_url($img['url']); ?>" alt="">
                            <div class="txt">
                                <p><?php echo nl2br(esc_html(get_sub_field('image_with_caption_cap'))); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="divisionContainer">
            <div class="secWrap02">
                <div class="secPanel">
                    <div class="leftBox">
                        <?php $section_img = get_field('section_image'); ?>
                        <?php if ($section_img): ?>
                            <div class="imgDivision"><img src="<?php echo esc_url($section_img['url']); ?>" alt="区画画像"></div>
                        <?php endif; ?>
                    </div>
                    <div class="rightBox">
                        <?php $banner = get_field('banner_with_link'); ?>
                        <?php if ($banner['banner_with_link_img']) : ?>
                            <div class="bnr">
                                <a href="<?php echo esc_url($banner['banner_with_link_link']); ?>">
                                    <img src="<?php echo esc_url($banner['banner_with_link_img']['url']); ?>" alt="バナー">
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="infoDivision">
                            <?php if (have_rows('section_info')) : ?>
                                <?php while (have_rows('section_info')) : the_row(); ?>
                                    <dl>
                                        <dt><span><?php the_sub_field('section_name'); ?></span></dt>
                                        <dd>
                                            <div class="left">
                                                <p><?php the_sub_field('section_tsubo'); ?> 坪（<?php the_sub_field('section_sqm'); ?>m²）</p>
                                            </div>
                                            <div class="right">
                                                <?php
                                                    $status = get_sub_field('price_status')['price_status_radio'];
                                                    if ($status === '売却済') {
                                                        echo '<div class="sold"><img src="'.get_template_directory_uri().'/image/property/property_division_sold.png" alt="売却済"></div>';
                                                    } elseif ($status === '商談中') {
                                                        echo '<div class="pending"><img src="'.get_template_directory_uri().'/image/property/property_division_pending.png" alt="商談中"></div>';
                                                    } elseif ($status === '価格') {
                                                        echo '<div class="price"><p><em>' . esc_html(get_sub_field('price_status')['price_status_input']) . '</em><span>万円</span></p></div>';
                                                    }
                                                ?>
                                            </div>
                                        </dd>
                                    </dl>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="detailContainer">
            <div class="secWrap01">
				<div class="detailSection">
                    <div class="secTtl">
                        <h3>物件概要</h3>
                    </div>
                    <div class="detailPanel01">
                        <?php $address = get_field('address'); if ($address): ?>
                        <dl>
                            <dt><span>所在地</span></dt>
                            <dd><div><?php echo nl2br(esc_html($address)); ?></div></dd>
                        </dl>
                        <?php endif; ?>

                        <?php $access = get_field('access'); if ($access): ?>
                        <dl>
                            <dt><span>交通</span></dt>
                            <dd><div><?php echo nl2br(esc_html($access)); ?></div></dd>
                        </dl>
                        <?php endif; ?>

                        <?php
                        $school_text = get_field('school_district');
                        ?>

                        <?php if (!empty($school_text)) : ?>
                        <dl>
                        <dt><span>学校区</span></dt>
                        <dd>
                            <div>
                                <?php echo esc_html($school_text); ?>
                            </div>
                        </dd>
                        </dl>
                        <?php endif; ?>

                        <?php $handover = get_field('handover'); if ($handover): ?>
                        <dl>
                            <dt><span>引渡し</span></dt>
                            <dd><div><?php echo nl2br(esc_html($handover)); ?></div></dd>
                        </dl>
                        <?php endif; ?>

                        <?php
                            $deal_type = get_field('deal_type');

                            $deal_type_labels = [
                                'own' => '売主',
                                'brokerage' => '媒介',
                                'general_brokerage' => '一般媒介',
                                'exclusive_brokerage' => '専任媒介',
                                'special_exclusive_brokerage' => '専属専任媒介',
                                'agent' => '代理'
                            ];

                            // 配列の場合の処理を追加
                            if (is_array($deal_type)) {
                                $deal_type = isset($deal_type['value']) ? $deal_type['value'] : (isset($deal_type[0]) ? $deal_type[0] : '');
                            }

                            $deal_type_display = isset($deal_type_labels[$deal_type]) ? $deal_type_labels[$deal_type] : $deal_type;
                            if ($deal_type_display) :
                        ?>
                            <dl>
                                <dt><span>取引態様</span></dt>
                                <dd><div><?php echo esc_html($deal_type_display); ?></div></dd>
                            </dl>
                        <?php endif; ?>
                    </div>
                    <div class="detailPanel02">
                        <?php
                            $fields = [
                                '区画数' => 'section_count',
                                '地目' => 'land_category',
                                '現況' => 'current_status',
                                '土地権利' => 'land_rights',
                                '都市計画' => 'city_planning',
                                '用途地域' => 'usage_area',
                                '建ぺい率' => 'building_coverage',
                                '容積率' => 'floor_area_ratio',
                                '接面道路' => 'road_contact',
                                '私道負担' => 'private_road',
                                '設備' => 'equipment',
                                '法令制限等' => 'legal_restrictions'
                            ];
                            foreach ($fields as $label => $name) {
                                $value = get_field($name);
                                if ($value) {
                                    echo '<dl><dt>' . esc_html($label) . '</dt><dd>' . nl2br(esc_html($value)) . '</dd></dl>';
                                }
                            }

                            $remarks = get_field('remarks');
                            if ($remarks) {
                                echo '<dl class="remarks"><dt>備考</dt><dd>' . nl2br(esc_html($remarks)) . '</dd></dl>';
                            }
                        ?>
                    </div>
                </div>
                <div class="detailSection">
                    <div class="secTtl">
                        <h3>現地MAP</h3>
                    </div>
                    <div class="mapBox">
                        <?php if ($map = get_field('google_map')) : ?>
                            <iframe src="<?php echo esc_url($map); ?>" allow="fullscreen"></iframe>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="detailSection">
                    <div class="secTtl">
                        <h3>周辺環境</h3>
                    </div>
                    <div class="detailPanel03">
                        <?php
                            $env_fields = [
                                '交通機関' => 'public_transport',
                                '教育施設' => 'education_facilities',
                                'ショッピング<br>施設' => 'shopping_facilities',
                                '公共施設' => 'public_facilities',
                                'その他の施設' => 'other_facilities'
                            ];
                            foreach ($env_fields as $label => $name) {
                                $value = get_field($name);
                                if ($value) {
                                    echo '<dl><dt>' . $label . '</dt><dd>' . nl2br(esc_html($value)) . '</dd></dl>';
                                }
                            }
                        ?>
                    </div>
                    <aside>
                        <p>※記載の距離および所要時間は地図上の概測です。<br>なお、徒歩は分速80m で換算しています。</p>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <?php
        $deal_type = get_field('deal_type');
        if ($deal_type === 'own') :
    ?>
        <div class="sec01 section">
            <div class="secContainer02">
                <div class="secWrap01">
                    <div class="secBox01">
                        <dl>
                            <dt>当社売主物件の<em>こだわり</em></dt>
                            <dd>お客様にとって『土地』とは、大切なご家族とかけがえのない時間を過ごす場であり、管理をしていかなければならない資産でもあります。<br>当社では土地を買われたお客様が末永く快適に暮らしてゆけるよう、建築のプランを立てやすい区画割りや、土地に関する近隣トラブルが起こりにくい分譲地づくりなど、未来を見越した土地開発を常に心掛けております。</dd>
                        </dl>
                    </div>
                    <div class="secBox02">
                        <div class="list">
                            <ul>
                                <li class="modalOpen"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/sec01_list_icon_01.png" alt=""></li>
                                <li class="modalOpen"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/sec01_list_icon_02.png" alt=""></li>
                                <li class="modalOpen"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/sec01_list_icon_03.png" alt=""></li>
                                <li class="modalOpen"><img src="<?php bloginfo('template_url'); ?>/image/propertylist/sec01_list_icon_04.png" alt=""></li>
                            </ul>
                        </div>
                    </div>
                    <div class="secBox03">
                        <dl>
                            <dt>分譲地を<em>お勧めする</em>ワケは？</dt>
                            <dd>一般的に田や畑を購入すると、住宅を建築するために各種申請手続きや造成工事が必要になり、100万円を越す費用が追加で掛かることも珍しくありません。内容によっては、造成・整地済みの土地を買う以上の出費になるケースも多くあります。<br>造成工事を施し、地目を宅地に変更済みの土地なら、すでに住宅建築に最適な状態に整っており、さらにこれらの費用は全て土地購入時の費用に含まれております。<br>田畑を購入した場合にかかる地目変更や農地転用手続きの手間や費用を、お客様が追加で負担することがありません。</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="modalBoxWrap">
            <div class="modalBox">
                <div class="modalContent">
                    <div>
                        <div class="mdlBody">
                            <div class="mdlClose">
                                <div class="mdlCloseBtn"><img src="<?php bloginfo('template_url'); ?>/image/common/modal_close.png" alt=""></div>
                            </div>
                            <div class="ttl">
                                <p>整地</p>
                            </div>
                            <div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/property/modal_img_01.png" alt=""></div>
                            <div class="txt">
                                <p>新たに購入していただくお客様がすぐに住宅建築を始められるよう、整地をして販売をしています。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modalBox">
                <div class="modalContent">
                    <div>
                        <div class="mdlBody">
                            <div class="mdlClose">
                                <div class="mdlCloseBtn"><img src="<?php bloginfo('template_url'); ?>/image/common/modal_close.png" alt=""></div>
                            </div>
                            <div class="ttl">
                                <p>埋め立て</p>
                            </div>
                            <div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/property/modal_img_02.png" alt=""></div>
                            <div class="txt">
                                <p>田んぼの造成の際は、上部のやわらかい土はすき取り、埋め立てには良質な土を使用しています。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modalBox">
                <div class="modalContent">
                    <div>
                        <div class="mdlBody">
                            <div class="mdlClose">
                                <div class="mdlCloseBtn"><img src="<?php bloginfo('template_url'); ?>/image/common/modal_close.png" alt=""></div>
                            </div>
                            <div class="ttl">
                                <p>擁壁工事</p>
                            </div>
                            <div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/property/modal_img_03.png" alt=""></div>
                            <div class="txt">
                                <p>擁壁工事では木製杭ではなくコンクリート杭を主に使用しています。<br>木製杭はコストは安いものの、経年による腐食・劣化によって、擁壁の沈下の可能性があるためです。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modalBox">
                <div class="modalContent">
                    <div>
                        <div class="mdlBody">
                            <div class="mdlClose">
                                <div class="mdlCloseBtn"><img src="<?php bloginfo('template_url'); ?>/image/common/modal_close.png" alt=""></div>
                            </div>
                            <div class="ttl">
                                <p>境界の明示</p>
                            </div>
                            <div class="photo"><img src="<?php bloginfo('template_url'); ?>/image/property/modal_img_04.png" alt=""></div>
                            <div class="txt">
                                <p>境界の明示もしっかりと行っています。<br>土地を購入したお客様が境界トラブル等を引き継いでしまうことのないよう、販売前に近隣土地所有者の方々と羽島市職員の立会いの下、測量を行っています。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</main>
<?php get_footer(); ?>