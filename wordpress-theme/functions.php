<?php
/**
 * ProServer theme functions.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'PS_VERSION', '1.0.0' );

/* ------------------------------------------------------------------
 * القيم الافتراضية — تُعدَّل من: المظهر ← تخصيص ← بيانات برو سيرفر
 * ------------------------------------------------------------------ */
function ps_defaults() {
	return array(
		'phone'              => '0500000000',
		'whatsapp'           => '966500000000',
		'email'              => 'info@proserver.sa',
		'city'               => 'المملكة العربية السعودية',
		'hours'              => 'يوميًا من ٨ صباحًا حتى ١١ مساءً',
		'stat_years'         => '10',
		'stat_projects'      => '1200',
		'stat_techs'         => '25',
		'stat_satisfaction'  => '98',
		'instagram'          => '',
		'x'                  => '',
		'tiktok'             => '',
		'snapchat'           => '',
	);
}

function ps_opt( $key ) {
	$defaults = ps_defaults();
	$default  = isset( $defaults[ $key ] ) ? $defaults[ $key ] : '';
	return get_theme_mod( 'ps_' . $key, $default );
}

/* طباعة آمنة للقيم داخل القوالب */
function ps_e( $key ) {
	echo esc_html( ps_opt( $key ) );
}
function ps_attr( $key ) {
	echo esc_attr( ps_opt( $key ) );
}
function ps_img( $file ) {
	echo esc_url( get_template_directory_uri() . '/assets/img/' . $file );
}
function ps_home() {
	echo esc_url( home_url( '/' ) );
}
function ps_tel() {
	echo esc_attr( preg_replace( '/[^0-9+]/', '', ps_opt( 'phone' ) ) );
}
function ps_wa() {
	echo esc_attr( preg_replace( '/[^0-9]/', '', ps_opt( 'whatsapp' ) ) );
}

/* ------------------------------------------------------------------
 * إعداد القالب
 * ------------------------------------------------------------------ */
add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );
	register_nav_menus( array( 'primary' => 'القائمة الرئيسية' ) );
} );

add_action( 'wp_enqueue_scripts', function () {
	$uri = get_template_directory_uri();
	wp_enqueue_style( 'ps-fonts', 'https://fonts.googleapis.com/css2?family=Cairo:wght@600;700;800;900&family=IBM+Plex+Sans+Arabic:wght@400;500;600;700&display=swap', array(), null );
	wp_enqueue_style( 'ps-main', $uri . '/assets/css/main.css', array( 'ps-fonts' ), PS_VERSION );
	wp_enqueue_script( 'ps-main', $uri . '/assets/js/main.js', array(), PS_VERSION, true );
} );

add_action( 'wp_head', function () {
	echo '<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
	echo '<meta name="theme-color" content="#16191d">' . "\n";
	if ( ! has_site_icon() ) {
		echo '<link rel="icon" type="image/png" href="' . esc_url( get_template_directory_uri() . '/assets/img/favicon.png' ) . '">' . "\n";
	}
	if ( is_front_page() ) {
		$desc = 'برو سيرفر — تأسيس وصيانة الكهرباء والسباكة وكشف التسربات للمنازل والمنشآت بفنيين معتمدين وضمان على الأعمال.';
		echo '<meta name="description" content="' . esc_attr( $desc ) . '">' . "\n";
		echo '<meta property="og:title" content="' . esc_attr( get_bloginfo( 'name' ) ) . '">' . "\n";
		echo '<meta property="og:description" content="' . esc_attr( $desc ) . '">' . "\n";
		echo '<meta property="og:image" content="' . esc_url( get_template_directory_uri() . '/assets/img/logo.png' ) . '">' . "\n";
	}
}, 1 );

/* ------------------------------------------------------------------
 * التخصيص (Customizer)
 * ------------------------------------------------------------------ */
add_action( 'customize_register', function ( $wp_customize ) {
	$wp_customize->add_section( 'ps_info', array(
		'title'    => 'بيانات برو سيرفر',
		'priority' => 30,
	) );

	$fields = array(
		'phone'             => 'رقم الجوال (للاتصال)',
		'whatsapp'          => 'رقم الواتساب بالصيغة الدولية (مثال 9665XXXXXXXX)',
		'email'             => 'البريد الإلكتروني',
		'city'              => 'المدينة / نطاق الخدمة',
		'hours'             => 'أوقات العمل',
		'stat_years'        => 'رقم: سنوات الخبرة',
		'stat_projects'     => 'رقم: مشاريع منجزة',
		'stat_techs'        => 'رقم: عدد الفنيين',
		'stat_satisfaction' => 'رقم: نسبة رضا العملاء %',
		'instagram'         => 'رابط إنستقرام (اختياري)',
		'x'                 => 'رابط إكس (اختياري)',
		'tiktok'            => 'رابط تيك توك (اختياري)',
		'snapchat'          => 'رابط سناب شات (اختياري)',
	);

	$defaults = ps_defaults();
	foreach ( $fields as $key => $label ) {
		$is_url = in_array( $key, array( 'instagram', 'x', 'tiktok', 'snapchat' ), true );
		$wp_customize->add_setting( 'ps_' . $key, array(
			'default'           => $defaults[ $key ],
			'sanitize_callback' => $is_url ? 'esc_url_raw' : 'sanitize_text_field',
		) );
		$wp_customize->add_control( 'ps_' . $key, array(
			'label'   => $label,
			'section' => 'ps_info',
			'type'    => $is_url ? 'url' : 'text',
		) );
	}
} );
