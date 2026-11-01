<!doctype html>
<html lang="ar" dir="rtl">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- أيقونات الموقع (SVG sprite) -->
<svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false">
	<defs>
		<symbol id="i-wrench" viewBox="0 0 24 24"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></symbol>
		<symbol id="i-bolt" viewBox="0 0 24 24"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></symbol>
		<symbol id="i-bulb" viewBox="0 0 24 24"><path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"/><path d="M9 18h6"/><path d="M10 22h4"/></symbol>
		<symbol id="i-drop" viewBox="0 0 24 24"><path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"/></symbol>
		<symbol id="i-plug" viewBox="0 0 24 24"><path d="M12 22v-5"/><path d="M9 8V2"/><path d="M15 8V2"/><path d="M18 8v5a4 4 0 0 1-4 4h-4a4 4 0 0 1-4-4V8z"/></symbol>
		<symbol id="i-screwdriver" viewBox="0 0 24 24"><path d="M14 2l8 8-3 3-8-8z"/><path d="M15 9 4.5 19.5"/><path d="M4.5 19.5 3 21"/><path d="M16.5 4.5l3 3"/></symbol>
		<symbol id="i-hammer" viewBox="0 0 24 24"><path d="m15 12-8.37 8.37a2.12 2.12 0 1 1-3-3L12 9"/><path d="m18 15 4-4"/><path d="m21.5 11.5-1.9-1.9a2 2 0 0 1-.6-1.4V7l-2.26-1.13a6 6 0 0 0-2.68-.62H9.5l.92.46A6 6 0 0 1 13 9.8V11l2 2h1.17a2 2 0 0 1 1.42.59l1.91 1.91"/></symbol>
		<symbol id="i-faucet" viewBox="0 0 24 24"><path d="M3 8h3v7H3z"/><path d="M6 10h9a4 4 0 0 1 4 4v1h-3v-1a1 1 0 0 0-1-1H6"/><path d="M11 10V6"/><path d="M8.5 6h5"/><path d="M17.5 19.2c0 .9-.6 1.6-1 1.6s-1-.7-1-1.6.8-1.9 1-2.2c.2.3 1 1.3 1 2.2z"/></symbol>
		<symbol id="i-pipe" viewBox="0 0 24 24"><path d="M4 6h7a8 8 0 0 1 8 8v6"/><path d="M4 11h7a3 3 0 0 1 3 3v6"/><path d="M3 4.5v8"/><path d="M12.5 21h8"/></symbol>
		<symbol id="i-gauge" viewBox="0 0 24 24"><path d="m12 14 4-4"/><path d="M3.34 19a10 10 0 1 1 17.32 0"/><circle cx="12" cy="14" r="1"/></symbol>
		<symbol id="i-helmet" viewBox="0 0 24 24"><path d="M2 18h20"/><path d="M4 18v-2a8 8 0 0 1 16 0v2"/><path d="M10 9V5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4"/></symbol>
		<symbol id="i-shield" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></symbol>
		<symbol id="i-clock" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></symbol>
		<symbol id="i-phone" viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></symbol>
		<symbol id="i-wa" viewBox="0 0 24 24"><path d="M3 21l1.65-4.8A9 9 0 1 1 7.9 19.6z"/><path d="M9 8.6c0 3.4 2.9 6.4 6.4 6.4l1-1.6-2.1-1-1 .9a5 5 0 0 1-2.6-2.6l.9-1-1-2.1z"/></symbol>
		<symbol id="i-pin" viewBox="0 0 24 24"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></symbol>
		<symbol id="i-mail" viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 6L2 7"/></symbol>
		<symbol id="i-check" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></symbol>
		<symbol id="i-arrow" viewBox="0 0 24 24"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></symbol>
		<symbol id="i-home" viewBox="0 0 24 24"><path d="m3 10 9-7 9 7v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M9 22V12h6v10"/></symbol>
		<symbol id="i-building" viewBox="0 0 24 24"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01M16 6h.01M12 6h.01M12 10h.01M12 14h.01M16 10h.01M16 14h.01M8 10h.01M8 14h.01"/></symbol>
		<symbol id="i-store" viewBox="0 0 24 24"><path d="M3 9l1.5-5h15L21 9"/><path d="M3 9a3 3 0 0 0 6 0 3 3 0 0 0 6 0 3 3 0 0 0 6 0"/><path d="M5 12v9h14v-9"/><path d="M10 21v-5h4v5"/></symbol>
		<symbol id="i-crane" viewBox="0 0 24 24"><path d="M6 22V4"/><path d="M2 22h8"/><path d="M6 4h15"/><path d="M6 4l4 4"/><path d="M18 4v6"/><path d="M16.5 10h3v2.5h-3z"/><path d="M6 9 3 4h3"/></symbol>
		<symbol id="i-scan" viewBox="0 0 24 24"><path d="M3 7V5a2 2 0 0 1 2-2h2M17 3h2a2 2 0 0 1 2 2v2M21 17v2a2 2 0 0 1-2 2h-2M7 21H5a2 2 0 0 1-2-2v-2"/><path d="M12 16.5a3.5 3.5 0 0 0 3.5-3.5c0-1.6-1.6-3.2-3.5-5.5-1.9 2.3-3.5 3.9-3.5 5.5a3.5 3.5 0 0 0 3.5 3.5z"/></symbol>
		<symbol id="i-calendar" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/><path d="m9 16 2 2 4-4"/></symbol>
		<symbol id="i-tag" viewBox="0 0 24 24"><path d="M12.6 2.6A2 2 0 0 0 11.2 2H4a2 2 0 0 0-2 2v7.2a2 2 0 0 0 .6 1.4l8.7 8.7a2.4 2.4 0 0 0 3.4 0l6.6-6.6a2.4 2.4 0 0 0 0-3.4z"/><circle cx="7.5" cy="7.5" r="1.5"/></symbol>
		<symbol id="i-users" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.9M16 3.1a4 4 0 0 1 0 7.8"/></symbol>
		<symbol id="i-chat" viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></symbol>
		<symbol id="i-plus" viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></symbol>
		<symbol id="i-insta" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><path d="M17.5 6.5h.01"/></symbol>
		<symbol id="i-x" viewBox="0 0 24 24"><path d="M4 4l16 16M20 4 4 20" /></symbol>
		<symbol id="i-tiktok" viewBox="0 0 24 24"><path d="M15 3c.4 2.4 1.9 4 4.5 4.2v3.2c-1.7 0-3.2-.5-4.5-1.4v6.2a5.8 5.8 0 1 1-5.8-5.8h.3v3.2h-.3a2.6 2.6 0 1 0 2.6 2.6V3z"/></symbol>
		<symbol id="i-snap" viewBox="0 0 24 24"><path d="M12 3c3 0 5 2.2 5 5.2v2.3l1.8-.5c.6 0 .9.7.4 1.1l-2 1.2c.6 1.8 2 3.2 3.8 3.7-.3.8-1.5 1.1-2.7 1.3l-.4 1.5-2-.2c-1.4.3-2.3 1.4-3.9 1.4s-2.5-1.1-3.9-1.4l-2 .2-.4-1.5c-1.2-.2-2.4-.5-2.7-1.3 1.8-.5 3.2-1.9 3.8-3.7l-2-1.2c-.5-.4-.2-1.1.4-1.1l1.8.5V8.2C7 5.2 9 3 12 3z"/></symbol>
		<symbol id="g-gear" viewBox="0 0 100 100"><path fill-rule="evenodd" d="M91.0 50.0 L99.8 54.7 L98.3 62.9 L88.4 64.3 L85.5 70.5 L90.8 79.0 L85.4 85.4 L76.1 81.6 L70.5 85.5 L70.8 95.5 L62.9 98.3 L56.8 90.4 L50.0 91.0 L45.3 99.8 L37.1 98.3 L35.7 88.4 L29.5 85.5 L21.0 90.8 L14.6 85.4 L18.4 76.1 L14.5 70.5 L4.5 70.8 L1.7 62.9 L9.6 56.8 L9.0 50.0 L0.2 45.3 L1.7 37.1 L11.6 35.7 L14.5 29.5 L9.2 21.0 L14.6 14.6 L23.9 18.4 L29.5 14.5 L29.2 4.5 L37.1 1.7 L43.2 9.6 L50.0 9.0 L54.7 0.2 L62.9 1.7 L64.3 11.6 L70.5 14.5 L79.0 9.2 L85.4 14.6 L81.6 23.9 L85.5 29.5 L95.5 29.2 L98.3 37.1 L90.4 43.2Z M68 50 A18 18 0 1 0 32 50 A18 18 0 1 0 68 50Z"/><circle cx="50" cy="50" r="26" fill="none" stroke-width="3" stroke="currentColor" opacity=".35"/></symbol>
		<symbol id="i-menu" viewBox="0 0 24 24"><path d="M4 7h16M4 12h16M4 17h10"/></symbol>
	</defs>
</svg>

<a class="skip-link" href="#main">تخطَّ إلى المحتوى</a>

<div class="scroll-wire" aria-hidden="true"><span></span></div>

<header class="site-header" id="top">
	<div class="container header-inner">
		<a class="brand" href="<?php ps_home(); ?>" aria-label="برو سيرفر — الرئيسية">
			<img src="<?php ps_img( 'logo-h.png' ); ?>" alt="ProServer" width="170" height="40" class="brand-dark">
			<img src="<?php ps_img( 'logo-h-light.png' ); ?>" alt="" width="170" height="40" class="brand-light" aria-hidden="true">
		</a>

		<nav class="main-nav" id="main-nav" aria-label="القائمة الرئيسية">
			<a href="<?php ps_home(); ?>#services">خدماتنا</a>
			<a href="<?php ps_home(); ?>#process">آلية العمل</a>
			<a href="<?php ps_home(); ?>#why">ليش برو سيرفر</a>
			<a href="<?php ps_home(); ?>#sectors">مجالاتنا</a>
			<a href="<?php ps_home(); ?>#faq">الأسئلة الشائعة</a>
			<a href="<?php ps_home(); ?>#contact" class="nav-cta-mobile">اطلب خدمة</a>
		</nav>

		<div class="header-actions">
			<a class="btn btn-sm btn-ghost hide-sm" href="tel:<?php ps_tel(); ?>">
				<svg class="ic"><use href="#i-phone"/></svg><span dir="ltr"><?php ps_e( 'phone' ); ?></span>
			</a>
			<a class="btn btn-sm btn-red" href="<?php ps_home(); ?>#contact">اطلب فني</a>
			<button class="menu-toggle" aria-controls="main-nav" aria-expanded="false" aria-label="فتح القائمة">
				<span></span><span></span><span></span>
			</button>
		</div>
	</div>
</header>
