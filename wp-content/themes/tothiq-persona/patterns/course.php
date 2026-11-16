<?php
/**
 * Title: Course page
 * Slug: tothiq-persona/course
 * Categories: tothiq-persona
 * Description: The whole course page: title, key numbers and the instructor, with a price card that stays beside the page (seats, Enrol on WhatsApp, what is included), then what students learn, the week-by-week curriculum and the instructor with reviews. Used by the Course page template.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_course_meta = tothiq_persona_items(
	'course_meta',
	array(
		array(
			'6',
			tothiq_persona_t( __( 'weeks', 'tothiq-persona' ), _x( 'أسابيع', 'Arabic version of: weeks', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			'18',
			tothiq_persona_t( __( 'lessons', 'tothiq-persona' ), _x( 'درسا', 'Arabic version of: lessons', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			'4',
			tothiq_persona_t( __( 'live sessions', 'tothiq-persona' ), _x( 'جلسات مباشرة', 'Arabic version of: live sessions', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			'EN / AR',
			tothiq_persona_t( __( 'language', 'tothiq-persona' ), _x( 'اللغة', 'Arabic version of: language', 'tothiq-persona' ), $tothiq_lang ),
		),
	),
	$tothiq_lang
);
$tothiq_course_includes = tothiq_persona_items(
	'course_includes',
	array(
		array(
			tothiq_persona_t( __( '18 video lessons, yours to keep', 'tothiq-persona' ), _x( '18 درسا مصورا تبقى لك', 'Arabic version of: 18 video lessons, yours to keep', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( '4 live Q&A sessions', 'tothiq-persona' ), _x( '4 جلسات أسئلة مباشرة', 'Arabic version of: 4 live Q&A sessions', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Workbook and templates', 'tothiq-persona' ), _x( 'كتيب عمل وقوالب', 'Arabic version of: Workbook and templates', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Certificate of completion', 'tothiq-persona' ), _x( 'شهادة إتمام', 'Arabic version of: Certificate of completion', 'tothiq-persona' ), $tothiq_lang ),
		),
	),
	$tothiq_lang
);
$tothiq_learn = tothiq_persona_items(
	'learn',
	array(
		array(
			tothiq_persona_t( __( 'Write a positioning statement your team agrees on', 'tothiq-persona' ), _x( 'كتابة بيان تموضع يتفق عليه فريقك', 'Arabic version of: Write a positioning statement your team agrees on', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Name your offer and your audience precisely', 'tothiq-persona' ), _x( 'تحديد عرضك وجمهورك بدقة', 'Arabic version of: Name your offer and your audience precisely', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Build a message house for every channel', 'tothiq-persona' ), _x( 'بناء بيت الرسائل لكل قناة', 'Arabic version of: Build a message house for every channel', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Plan a launch with a clear first-month goal', 'tothiq-persona' ), _x( 'التخطيط لإطلاق بهدف واضح للشهر الأول', 'Arabic version of: Plan a launch with a clear first-month goal', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Audit your current marketing in one afternoon', 'tothiq-persona' ), _x( 'مراجعة تسويقك الحالي في ظهيرة واحدة', 'Arabic version of: Audit your current marketing in one afternoon', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Brief designers and agencies with confidence', 'tothiq-persona' ), _x( 'توجيه المصممين والوكالات بثقة', 'Arabic version of: Brief designers and agencies with confidence', 'tothiq-persona' ), $tothiq_lang ),
		),
	),
	$tothiq_lang
);
$tothiq_modules = tothiq_persona_items(
	'modules',
	array(
		array(
			tothiq_persona_t( __( 'Week 1', 'tothiq-persona' ), _x( 'الأسبوع 1', 'Arabic version of: Week 1', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Where your brand stands today', 'tothiq-persona' ), _x( 'أين تقف علامتك اليوم', 'Arabic version of: Where your brand stands today', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( '3 lessons · 42 min', 'tothiq-persona' ), _x( '3 دروس · 42 دقيقة', 'Arabic version of: 3 lessons · 42 min', 'tothiq-persona' ), $tothiq_lang ),
			'ar' === $tothiq_lang ? array( 'مراجعة العلامة', 'عملاؤك بكلماتهم', 'ما يملكه المنافسون' ) : array( 'The brand audit', 'Your customers in their own words', 'What competitors own' ),
		),
		array(
			tothiq_persona_t( __( 'Week 2', 'tothiq-persona' ), _x( 'الأسبوع 2', 'Arabic version of: Week 2', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Finding your position', 'tothiq-persona' ), _x( 'إيجاد تموضعك', 'Arabic version of: Finding your position', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( '3 lessons · 38 min', 'tothiq-persona' ), _x( '3 دروس · 38 دقيقة', 'Arabic version of: 3 lessons · 38 min', 'tothiq-persona' ), $tothiq_lang ),
			'ar' === $tothiq_lang ? array( 'ثلاثة تموضعات للاختبار', 'الاختيار بالدليل', 'كتابته في جملة واحدة' ) : array( 'Three positions to test', 'Choosing with evidence', 'Writing it in one sentence' ),
		),
		array(
			tothiq_persona_t( __( 'Week 3', 'tothiq-persona' ), _x( 'الأسبوع 3', 'Arabic version of: Week 3', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'The message house', 'tothiq-persona' ), _x( 'بيت الرسائل', 'Arabic version of: The message house', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( '3 lessons · 45 min', 'tothiq-persona' ), _x( '3 دروس · 45 دقيقة', 'Arabic version of: 3 lessons · 45 min', 'tothiq-persona' ), $tothiq_lang ),
			'ar' === $tothiq_lang ? array( 'السقف: وعد واحد', 'الأعمدة: ثلاثة أدلة', 'الأرضية: ما لا تقوله أبدا' ) : array( 'The roof: one promise', 'The pillars: three proofs', 'The floor: what you never say' ),
		),
		array(
			tothiq_persona_t( __( 'Week 4', 'tothiq-persona' ), _x( 'الأسبوع 4', 'Arabic version of: Week 4', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Names, voice and visuals', 'tothiq-persona' ), _x( 'الاسم والصوت والهوية', 'Arabic version of: Names, voice and visuals', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( '3 lessons · 40 min', 'tothiq-persona' ), _x( '3 دروس · 40 دقيقة', 'Arabic version of: 3 lessons · 40 min', 'tothiq-persona' ), $tothiq_lang ),
			'ar' === $tothiq_lang ? array( 'تسمية بلا ندم', 'صوت واحد بلغتين', 'توجيه المصمم' ) : array( 'Naming without regrets', 'A voice in two languages', 'Briefing the designer' ),
		),
		array(
			tothiq_persona_t( __( 'Week 5', 'tothiq-persona' ), _x( 'الأسبوع 5', 'Arabic version of: Week 5', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Planning the launch', 'tothiq-persona' ), _x( 'التخطيط للإطلاق', 'Arabic version of: Planning the launch', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( '3 lessons · 36 min', 'tothiq-persona' ), _x( '3 دروس · 36 دقيقة', 'Arabic version of: 3 lessons · 36 min', 'tothiq-persona' ), $tothiq_lang ),
			'ar' === $tothiq_lang ? array( 'خطة الثلاثين يوما', 'القنوات المهمة', 'قائمة يوم الإطلاق' ) : array( 'The 30-day plan', 'Channels that matter', 'Launch day checklist' ),
		),
		array(
			tothiq_persona_t( __( 'Week 6', 'tothiq-persona' ), _x( 'الأسبوع 6', 'Arabic version of: Week 6', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Measuring what worked', 'tothiq-persona' ), _x( 'قياس ما نجح', 'Arabic version of: Measuring what worked', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( '3 lessons · 30 min', 'tothiq-persona' ), _x( '3 دروس · 30 دقيقة', 'Arabic version of: 3 lessons · 30 min', 'tothiq-persona' ), $tothiq_lang ),
			'ar' === $tothiq_lang ? array( 'ثلاثة أرقام للمتابعة', 'مراجعة الشهر الأول', 'ما الذي تغيره بعد ذلك' ) : array( 'Three numbers to watch', 'The first-month review', 'What to change next' ),
		),
	),
	$tothiq_lang
);
$tothiq_course_quotes = tothiq_persona_items(
	'course_quotes',
	array(
		array(
			tothiq_persona_t( __( 'The positioning week alone was worth the price. Our whole team now describes us the same way.', 'tothiq-persona' ), _x( 'أسبوع التموضع وحده يستحق السعر. فريقنا كله يصفنا الآن بالطريقة نفسها.', 'Arabic version of: The positioning week alone was worth the price. Our whole te', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Faisal, founder', 'tothiq-persona' ), _x( 'فيصل، مؤسس', 'Arabic version of: Faisal, founder', 'tothiq-persona' ), $tothiq_lang ),
		),
		array(
			tothiq_persona_t( __( 'Practical, clear and in both languages. I used the templates the same week.', 'tothiq-persona' ), _x( 'عملية وواضحة وباللغتين. استخدمت القوالب في الأسبوع نفسه.', 'Arabic version of: Practical, clear and in both languages. I used the templates', 'tothiq-persona' ), $tothiq_lang ),
			tothiq_persona_t( __( 'Noura, marketing lead', 'tothiq-persona' ), _x( 'نورة، مسؤولة تسويق', 'Arabic version of: Noura, marketing lead', 'tothiq-persona' ), $tothiq_lang ),
		),
	),
	$tothiq_lang
);
$tothiq_title  = tothiq_persona_text( 'course_title', tothiq_persona_t( __( 'Brand strategy for founders', 'tothiq-persona' ), _x( 'استراتيجية العلامة التجارية للمؤسسين', 'Arabic version of: Brand strategy for founders', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang );
$tothiq_enrol  = tothiq_persona_text( 'course_button', tothiq_persona_t( __( 'Enrol on WhatsApp', 'tothiq-persona' ), _x( 'سجل عبر واتساب', 'Arabic version of: Enrol on WhatsApp', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang );
$tothiq_msg    = array( 'msg' => sprintf( /* translators: %s: course name. */ tothiq_persona_t( __( 'Hello, I would like to enrol in: %s', 'tothiq-persona' ), _x( 'مرحبا، أرغب في التسجيل في: %s', 'Arabic version of: Hello, I would like to enrol in: %s', 'tothiq-persona' ), $tothiq_lang ), $tothiq_title ) );
$tothiq_price  = tothiq_persona_text( 'course_price', tothiq_persona_t( __( 'KD 49', 'tothiq-persona' ), _x( '49 د.ك', 'Arabic version of: KD 49', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang );
$tothiq_old    = tothiq_persona_text( 'course_old_price', tothiq_persona_t( __( 'KD 79', 'tothiq-persona' ), _x( '79 د.ك', 'Arabic version of: KD 79', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang );
$tothiq_pct    = max( 0, min( 100, (int) tothiq_persona_text( 'course_seats_percent', tothiq_persona_t( __( '72', 'tothiq-persona' ), _x( '72', 'Arabic version of: 72', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ) );
$tothiq_cls = tothiq_persona_cls( 'tothiq-course', $tothiq_lang );
?>
<!-- wp:group {"className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","className":"tothiq-course__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tothiq-course__grid"><!-- wp:group {"className":"tothiq-course__main","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-course__main"><!-- wp:group {"className":"tothiq-course-hero","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-course-hero"><!-- wp:paragraph {"className":"tothiq-tag"} -->
<p class="tothiq-tag"><?php echo esc_html( tothiq_persona_text( 'course_tag', tothiq_persona_t( __( 'Online course · 6 weeks', 'tothiq-persona' ), _x( 'دورة عبر الإنترنت · 6 أسابيع', 'Arabic version of: Online course · 6 weeks', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo esc_html( $tothiq_title ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tothiq-lead"} -->
<p class="tothiq-lead"><?php echo esc_html( tothiq_persona_text( 'course_lead', tothiq_persona_t( __( 'A six-week course that takes you from a vague idea of your brand to a clear position, a message your team can repeat and a launch plan.', 'tothiq-persona' ), _x( 'دورة من ستة أسابيع تنقلك من فكرة غامضة عن علامتك إلى تموضع واضح ورسالة يرددها فريقك وخطة إطلاق.', 'Arabic version of: A six-week course that takes you from a vague idea of your b', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"tothiq-course-meta","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-course-meta"><?php foreach ( $tothiq_course_meta as $tothiq_item ) : ?><!-- wp:paragraph {"className":"tothiq-course-meta__item"} -->
<p class="tothiq-course-meta__item"><strong class="tothiq-ltr-number"><?php echo esc_html( tothiq_persona_latin_digits( $tothiq_item[0] ) ); ?></strong><br><?php echo esc_html( $tothiq_item[1] ); ?></p>
<!-- /wp:paragraph --><?php endforeach; ?></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tothiq-byline","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-byline"><?php $tothiq_photo = tothiq_persona_photo( 'hero', 'images/portrait.webp', tothiq_persona_name( $tothiq_lang ) ); ?>
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tothiq-byline__photo"} -->
<figure class="wp-block-image size-full tothiq-byline__photo"><img src="<?php echo esc_url( $tothiq_photo['url'] ); ?>" alt="<?php echo esc_attr( $tothiq_photo['alt'] ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tothiq-byline__text","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-byline__text"><!-- wp:paragraph {<?php tothiq_persona_bind( 'content', 'name', $tothiq_lang ); ?>,"className":"tothiq-byline__name"} -->
<p class="tothiq-byline__name"><?php tothiq_persona_value( 'name', $tothiq_lang ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {<?php tothiq_persona_bind( 'content', 'role', $tothiq_lang ); ?>,"className":"tothiq-byline__role"} -->
<p class="tothiq-byline__role"><?php tothiq_persona_value( 'role', $tothiq_lang ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tothiq-landing-block","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-landing-block"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'learn_eyebrow', tothiq_persona_t( __( 'What you will learn', 'tothiq-persona' ), _x( 'ما ستتعلمه', 'Arabic version of: What you will learn', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( tothiq_persona_text( 'learn_heading', tothiq_persona_t( __( 'By the end of the course you will', 'tothiq-persona' ), _x( 'في نهاية الدورة ستتمكن من', 'Arabic version of: By the end of the course you will', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tothiq-learn","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-learn"><?php foreach ( $tothiq_learn as $tothiq_item ) : ?><!-- wp:paragraph {"className":"tothiq-learn__item"} -->
<p class="tothiq-learn__item"><?php echo esc_html( $tothiq_item[0] ); ?></p>
<!-- /wp:paragraph --><?php endforeach; ?></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tothiq-landing-block","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-landing-block"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'curriculum_eyebrow', tothiq_persona_t( __( 'Curriculum', 'tothiq-persona' ), _x( 'المنهج', 'Arabic version of: Curriculum', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( tothiq_persona_text( 'curriculum_heading', tothiq_persona_t( __( 'Six weeks, one step at a time', 'tothiq-persona' ), _x( 'ستة أسابيع، خطوة بخطوة', 'Arabic version of: Six weeks, one step at a time', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tothiq-modules","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-modules"><?php foreach ( $tothiq_modules as $tothiq_n => $tothiq_item ) : ?><!-- wp:details {"className":"tothiq-module"<?php echo 0 === $tothiq_n ? ',"showContent":true' : ''; ?>} -->
<details class="wp-block-details tothiq-module"<?php echo 0 === $tothiq_n ? ' open' : ''; ?>><summary><span class="tothiq-module__n tothiq-ltr-number"><?php echo (int) $tothiq_n + 1; ?></span><span class="tothiq-module__title"><small><?php echo esc_html( $tothiq_item[0] ); ?></small><?php echo esc_html( $tothiq_item[1] ); ?></span><span class="tothiq-module__meta"><?php echo esc_html( tothiq_persona_latin_digits( $tothiq_item[2] ) ); ?></span></summary><!-- wp:list {"className":"tothiq-module__lessons"} -->
<ul class="wp-block-list tothiq-module__lessons"><?php foreach ( tothiq_persona_lines( $tothiq_item[3] ) as $tothiq_line ) : ?><!-- wp:list-item -->
<li><?php echo esc_html( $tothiq_line ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list --></details>
<!-- /wp:details --><?php endforeach; ?></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tothiq-landing-block","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-landing-block"><!-- wp:paragraph {"className":"tothiq-eyebrow"} -->
<p class="tothiq-eyebrow"><?php echo esc_html( tothiq_persona_text( 'instructor_eyebrow', tothiq_persona_t( __( 'Your instructor', 'tothiq-persona' ), _x( 'المدرب', 'Arabic version of: Your instructor', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"tothiq-instructor","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-instructor"><?php $tothiq_photo = tothiq_persona_photo( 'hero', 'images/portrait.webp', tothiq_persona_name( $tothiq_lang ) ); ?>
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tothiq-instructor__photo"} -->
<figure class="wp-block-image size-full tothiq-instructor__photo"><img src="<?php echo esc_url( $tothiq_photo['url'] ); ?>" alt="<?php echo esc_attr( $tothiq_photo['alt'] ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tothiq-instructor__text","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-instructor__text"><!-- wp:paragraph {<?php tothiq_persona_bind( 'content', 'name', $tothiq_lang ); ?>,"className":"tothiq-instructor__name"} -->
<p class="tothiq-instructor__name"><?php tothiq_persona_value( 'name', $tothiq_lang ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-muted"} -->
<p class="tothiq-muted"><?php echo esc_html( tothiq_persona_text( 'instructor_bio', tothiq_persona_t( __( 'Twelve years in brand and marketing across the Gulf, 80+ brand launches, and former head of marketing at a regional retailer.', 'tothiq-persona' ), _x( 'اثنا عشر عاما في العلامات التجارية والتسويق في الخليج، وأكثر من 80 إطلاقا، ورئيسة تسويق سابقة في شركة تجزئة إقليمية.', 'Arabic version of: Twelve years in brand and marketing across the Gulf, 80+ bra', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tothiq-lcards","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-lcards"><?php foreach ( $tothiq_course_quotes as $tothiq_item ) : ?><!-- wp:group {"className":"tothiq-lcard","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-lcard"><!-- wp:paragraph -->
<p><?php echo esc_html( tothiq_persona_latin_digits( $tothiq_item[0] ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-lcard__by"} -->
<p class="tothiq-lcard__by"><?php echo esc_html( $tothiq_item[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tothiq-course__aside","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-course__aside"><!-- wp:group {"className":"tothiq-price-card","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-price-card"><!-- wp:paragraph {"className":"tothiq-price-card__cover"} -->
<p class="tothiq-price-card__cover"><?php echo esc_html( tothiq_persona_text( 'course_cover', tothiq_persona_t( __( 'Cohort 3 · starts 12 October', 'tothiq-persona' ), _x( 'الدفعة 3 · تبدأ 12 أكتوبر', 'Arabic version of: Cohort 3 · starts 12 October', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"tothiq-price-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-price-card__body"><!-- wp:paragraph {"className":"tothiq-price-card__price"} -->
<p class="tothiq-price-card__price"><strong><?php echo esc_html( tothiq_persona_latin_digits( $tothiq_price ) ); ?></strong> <s><?php echo esc_html( tothiq_persona_latin_digits( $tothiq_old ) ); ?></s></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-price-card__seats"} -->
<p class="tothiq-price-card__seats"><?php echo esc_html( tothiq_persona_text( 'course_seats', tothiq_persona_t( __( '18 of 25 seats taken', 'tothiq-persona' ), _x( '18 من 25 مقعدا محجوزة', 'Arabic version of: 18 of 25 seats taken', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-seatbar"} -->
<p class="tothiq-seatbar" style="--tothiq-seats:<?php echo (int) $tothiq_pct; ?>%"><span class="screen-reader-text"><?php echo esc_html( $tothiq_pct . '%' ); ?></span></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"tothiq-price-card__cta"} -->
<div class="wp-block-buttons tothiq-price-card__cta"><?php tothiq_persona_button( $tothiq_enrol, 'whatsapp_url', $tothiq_lang, 'whatsapp', $tothiq_msg ); ?>
</div>
<!-- /wp:buttons -->
<!-- wp:buttons {"className":"tothiq-price-card__call"} -->
<div class="wp-block-buttons tothiq-price-card__call"><?php tothiq_persona_button( tothiq_persona_text( 'course_call', tothiq_persona_t( __( 'Questions? Book a call', 'tothiq-persona' ), _x( 'لديك سؤال؟ احجز مكالمة', 'Arabic version of: Questions? Book a call', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ), 'booking_url', $tothiq_lang, 'link', array() ); ?>
</div>
<!-- /wp:buttons -->
<!-- wp:list {"className":"tothiq-price-card__list"} -->
<ul class="wp-block-list tothiq-price-card__list"><?php foreach ( $tothiq_course_includes as $tothiq_item ) : ?><!-- wp:list-item -->
<li><?php echo esc_html( tothiq_persona_latin_digits( $tothiq_item[0] ) ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tothiq-mbar","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-mbar"><!-- wp:paragraph {"className":"tothiq-mbar__price"} -->
<p class="tothiq-mbar__price"><strong><?php echo esc_html( tothiq_persona_latin_digits( $tothiq_price ) ); ?></strong> <s><?php echo esc_html( tothiq_persona_latin_digits( $tothiq_old ) ); ?></s></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"tothiq-mbar__cta"} -->
<div class="wp-block-buttons tothiq-mbar__cta"><?php tothiq_persona_button( $tothiq_enrol, 'whatsapp_url', $tothiq_lang, 'whatsapp', $tothiq_msg ); ?>
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
