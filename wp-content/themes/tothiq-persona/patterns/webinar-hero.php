<?php
/**
 * Title: Webinar — top
 * Slug: tothiq-persona/webinar-hero
 * Categories: tothiq-persona
 * Description: Live badge, title, date, time and place, a countdown to the start, and Save my seat (WhatsApp) and Add to calendar buttons. The start is set in Content as "2026-10-14 19:00", in your site's timezone.
 */

$tothiq_lang = tothiq_persona_lang( isset( $tothiq_lang ) ? $tothiq_lang : null );
$tothiq_title = tothiq_persona_text( 'webinar_title', tothiq_persona_t( __( 'Launch without guessing: the 30-day brand launch plan', 'tothiq-persona' ), _x( 'أطلق دون تخمين: خطة إطلاق العلامة في 30 يوما', 'Arabic version of: Launch without guessing: the 30-day brand launch plan', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang );
$tothiq_start = tothiq_persona_webinar_start( $tothiq_lang );
$tothiq_msg   = array( 'msg' => sprintf( /* translators: %s: webinar name. */ tothiq_persona_t( __( 'Hello, please save me a seat at: %s', 'tothiq-persona' ), _x( 'مرحبا، أرجو حجز مقعد لي في: %s', 'Arabic version of: Hello, please save me a seat at: %s', 'tothiq-persona' ), $tothiq_lang ), $tothiq_title ) );
$tothiq_date_text = tothiq_persona_text( 'webinar_date_text', '', $tothiq_lang );
if ( '' === $tothiq_date_text && $tothiq_start ) {
	$tothiq_date_text = wp_date( 'l j F', $tothiq_start->getTimestamp() );
}
$tothiq_time_text = $tothiq_start ? tothiq_persona_clock( $tothiq_start->format( 'H:i' ) . ' – ' . $tothiq_start->modify( '+' . max( 15, (int) tothiq_persona_text( 'webinar_minutes', '60', $tothiq_lang ) ) . ' minutes' )->format( 'H:i' ), $tothiq_lang ) : '';
$tothiq_cls = tothiq_persona_cls( 'tothiq-webinar-hero', $tothiq_lang );
?>
<!-- wp:group {"className":"<?php echo esc_attr( $tothiq_cls ); ?>","layout":{"type":"constrained"}} -->
<div class="wp-block-group <?php echo esc_attr( $tothiq_cls ); ?>"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"tothiq-tag tothiq-tag--live"} -->
<p class="tothiq-tag tothiq-tag--live"><?php echo esc_html( tothiq_persona_text( 'webinar_tag', tothiq_persona_t( __( 'Free live webinar', 'tothiq-persona' ), _x( 'ندوة مباشرة مجانية', 'Arabic version of: Free live webinar', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo esc_html( $tothiq_title ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tothiq-lead"} -->
<p class="tothiq-lead"><?php echo esc_html( tothiq_persona_text( 'webinar_lead', tothiq_persona_t( __( 'A 60-minute live session on planning a launch that people notice, with a template you can use the same week.', 'tothiq-persona' ), _x( 'جلسة مباشرة مدتها 60 دقيقة عن التخطيط لإطلاق يلاحظه الناس، مع قالب تستخدمه في الأسبوع نفسه.', 'Arabic version of: A 60-minute live session on planning a launch that people no', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"tothiq-webinar-facts","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-webinar-facts"><!-- wp:paragraph {"className":"tothiq-webinar-fact"} -->
<p class="tothiq-webinar-fact"><strong><?php echo esc_html( $tothiq_date_text ); ?></strong><br><?php echo esc_html( tothiq_persona_t( __( 'Date', 'tothiq-persona' ), _x( 'التاريخ', 'Arabic version of: Date', 'tothiq-persona' ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-webinar-fact"} -->
<p class="tothiq-webinar-fact"><strong class="tothiq-range"><?php echo esc_html( $tothiq_time_text ); ?></strong><br><?php echo esc_html( tothiq_persona_text( 'webinar_time_note', tothiq_persona_t( __( 'Kuwait time (GMT+3)', 'tothiq-persona' ), _x( 'بتوقيت الكويت', 'Arabic version of: Kuwait time (GMT+3)', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tothiq-webinar-fact"} -->
<p class="tothiq-webinar-fact"><strong><?php echo esc_html( tothiq_persona_text( 'webinar_where', tothiq_persona_t( __( 'Online · English and Arabic', 'tothiq-persona' ), _x( 'عبر الإنترنت · بالعربية والإنجليزية', 'Arabic version of: Online · English and Arabic', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></strong><br><?php echo esc_html( tothiq_persona_t( __( 'Where', 'tothiq-persona' ), _x( 'المكان', 'Arabic version of: Where', 'tothiq-persona' ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tothiq-countdown-slot<?php echo esc_attr( 'ar' === $tothiq_lang ? ' tothiq-lang-ar' : '' ); ?>","layout":{"type":"default"}} -->
<div class="wp-block-group tothiq-countdown-slot<?php echo esc_attr( 'ar' === $tothiq_lang ? ' tothiq-lang-ar' : '' ); ?>"><!-- wp:paragraph -->
<p><?php echo esc_html( $tothiq_date_text . ' · ' . $tothiq_time_text ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:buttons {"className":"tothiq-actions-row"} -->
<div class="wp-block-buttons tothiq-actions-row"><?php tothiq_persona_button( tothiq_persona_text( 'webinar_button', tothiq_persona_t( __( 'Save my seat on WhatsApp', 'tothiq-persona' ), _x( 'احجز مقعدك عبر واتساب', 'Arabic version of: Save my seat on WhatsApp', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ), 'whatsapp_url', $tothiq_lang, 'cta', $tothiq_msg ); ?>
<?php $tothiq_cal = tothiq_persona_calendar_url( $tothiq_title, $tothiq_lang ); if ( '' !== $tothiq_cal ) { tothiq_persona_link_button( tothiq_persona_t( __( 'Add to calendar', 'tothiq-persona' ), _x( 'أضف إلى التقويم', 'Arabic version of: Add to calendar', 'tothiq-persona' ), $tothiq_lang ), $tothiq_cal, 'ghost-dark' ); } ?>
</div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"tothiq-webinar-note"} -->
<p class="tothiq-webinar-note"><?php echo esc_html( tothiq_persona_text( 'webinar_note', tothiq_persona_t( __( '212 people registered · the recording goes to everyone who signs up', 'tothiq-persona' ), _x( '212 شخصا سجلوا · التسجيل يصل لكل من يسجل', 'Arabic version of: 212 people registered · the recording goes to everyone who s', 'tothiq-persona' ), $tothiq_lang ), $tothiq_lang ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
