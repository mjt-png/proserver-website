<?php get_header(); ?>

<main id="main">

<!-- ============ HERO ============ -->
<section class="hero" id="hero">
	<div class="hero-grid" aria-hidden="true"></div>
	<div class="hero-glow" aria-hidden="true"></div>

	<div class="pendant" aria-hidden="true">
		<div class="pendant-swing">
			<span class="pendant-cord"></span>
			<svg class="pendant-bulb" viewBox="0 0 60 90">
				<defs>
					<radialGradient id="bulbGlass" cx="50%" cy="40%" r="60%">
						<stop offset="0" stop-color="#fff6d6"/>
						<stop offset=".55" stop-color="#ffd66b"/>
						<stop offset="1" stop-color="#f3a514"/>
					</radialGradient>
				</defs>
				<rect x="22" y="0" width="16" height="14" rx="2" fill="#3a4048"/>
				<rect x="20" y="12" width="20" height="6" rx="2" fill="#4b525c"/>
				<path d="M30 18c-15 0-26 11-26 25 0 10 6 16 11 22 3 4 4 8 4 12h22c0-4 1-8 4-12 5-6 11-12 11-22 0-14-11-25-26-25z" fill="url(#bulbGlass)"/>
				<path d="M24 62c0-8 3-16 6-22 3 6 6 14 6 22" fill="none" stroke="#c46a00" stroke-width="1.6" stroke-linecap="round"/>
				<rect x="19" y="77" width="22" height="9" rx="3" fill="#3a4048"/>
			</svg>
			<span class="pendant-light"></span>
		</div>
	</div>

	<div class="floaters" aria-hidden="true">
		<svg class="fl fl-1 is-red" data-speed="-0.35" data-rot="60"><use href="#i-wrench"/></svg>
		<svg class="fl fl-2" data-speed="-0.2" data-rot="-35"><use href="#i-screwdriver"/></svg>
		<svg class="fl fl-3" data-speed="-0.5" data-rot="25"><use href="#i-bolt"/></svg>
		<svg class="fl fl-4" data-speed="-0.15" data-rot="-50"><use href="#i-drop"/></svg>
		<svg class="fl fl-5 is-red" data-speed="-0.45" data-rot="80"><use href="#i-pipe"/></svg>
		<svg class="fl fl-6" data-speed="-0.3" data-rot="-70"><use href="#i-hammer"/></svg>
		<svg class="fl fl-7" data-speed="-0.6" data-rot="45"><use href="#i-plug"/></svg>
	</div>

	<div class="container hero-inner">
		<div class="hero-copy">
			<p class="eyebrow" data-reveal><span class="pulse-dot"></span> كهرباء • سباكة • تأسيس • صيانة</p>
			<h1 class="hero-title">
				<span class="line"><span>نأسّس صح،</span></span>
				<span class="line"><span>ونصلّح من <em>أول مرة.</em></span></span>
			</h1>
			<p class="hero-sub" data-reveal style="--d:.35s">
				برو سيرفر لأعمال الكهرباء والسباكة — تأسيس متكامل للمشاريع الجديدة، وصيانة سريعة للمنازل والمنشآت، بفنيين معتمدين وتسعير واضح قبل ما نبدأ.
			</p>
			<div class="hero-ctas" data-reveal style="--d:.5s">
				<a class="btn btn-red btn-lg magnetic" href="#contact">
					اطلب فني الآن
					<svg class="ic"><use href="#i-arrow"/></svg>
				</a>
				<a class="btn btn-outline btn-lg" href="https://wa.me/<?php ps_wa(); ?>" target="_blank" rel="noopener">
					<svg class="ic"><use href="#i-wa"/></svg>
					واتساب مباشر
				</a>
			</div>
			<ul class="hero-trust" data-reveal style="--d:.65s">
				<li><svg class="ic"><use href="#i-shield"/></svg> ضمان على الأعمال</li>
				<li><svg class="ic"><use href="#i-helmet"/></svg> فنيون معتمدون</li>
				<li><svg class="ic"><use href="#i-tag"/></svg> سعر واضح قبل التنفيذ</li>
			</ul>
		</div>

		<div class="hero-visual" aria-hidden="true">
			<div class="hv-stage" data-tilt>
				<div class="ring ring-dash"></div>
				<div class="ring ring-solid"></div>
				<div class="orbit" data-spin="0.12">
					<span class="orb" style="--a:0deg"><svg><use href="#i-bolt"/></svg></span>
					<span class="orb" style="--a:60deg"><svg><use href="#i-drop"/></svg></span>
					<span class="orb" style="--a:120deg"><svg><use href="#i-wrench"/></svg></span>
					<span class="orb" style="--a:180deg"><svg><use href="#i-bulb"/></svg></span>
					<span class="orb" style="--a:240deg"><svg><use href="#i-faucet"/></svg></span>
					<span class="orb" style="--a:300deg"><svg><use href="#i-plug"/></svg></span>
				</div>
				<div class="hv-core">
					<img src="<?php ps_img( 'mark-light.png' ); ?>" alt="" width="200" height="232">
				</div>
				<div class="hv-card hv-card-1">
					<span class="hv-ic"><svg><use href="#i-clock"/></svg></span>
					<div><strong>استجابة سريعة</strong><small><?php ps_e( 'hours' ); ?></small></div>
				</div>
				<div class="hv-card hv-card-2">
					<span class="hv-ic red"><svg><use href="#i-shield"/></svg></span>
					<div><strong>شغل مضمون</strong><small>ضمان مكتوب على المصنعية</small></div>
				</div>
			</div>
		</div>
	</div>

	<a class="scroll-hint" href="#services" aria-label="انزل للخدمات">
		<span class="mouse"><span></span></span>
		<small>مرّر للأسفل</small>
	</a>
</section>

<!-- ============ TOOL BELT (moves with scroll) ============ -->
<section class="belt" aria-hidden="true">
	<div class="belt-row" data-x="-260">
		<span>تأسيس كهرباء</span><svg><use href="#i-bolt"/></svg>
		<span>صيانة سباكة</span><svg><use href="#i-drop"/></svg>
		<span>كشف تسربات</span><svg><use href="#i-scan"/></svg>
		<span>لوحات توزيع</span><svg><use href="#i-gauge"/></svg>
		<span>تمديدات صرف</span><svg><use href="#i-pipe"/></svg>
		<span>تركيب إنارة</span><svg><use href="#i-bulb"/></svg>
		<span>سخانات ومضخات</span><svg><use href="#i-faucet"/></svg>
		<span>تأسيس كهرباء</span><svg><use href="#i-bolt"/></svg>
		<span>صيانة سباكة</span><svg><use href="#i-drop"/></svg>
	</div>
	<div class="belt-row belt-row-2" data-x="260">
		<svg><use href="#i-wrench"/></svg><svg><use href="#i-screwdriver"/></svg><svg><use href="#i-hammer"/></svg><svg><use href="#i-plug"/></svg><svg><use href="#i-helmet"/></svg><svg><use href="#i-pipe"/></svg><svg><use href="#i-gauge"/></svg><svg><use href="#i-faucet"/></svg><svg><use href="#i-wrench"/></svg><svg><use href="#i-screwdriver"/></svg><svg><use href="#i-hammer"/></svg><svg><use href="#i-plug"/></svg><svg><use href="#i-helmet"/></svg><svg><use href="#i-pipe"/></svg><svg><use href="#i-gauge"/></svg><svg><use href="#i-faucet"/></svg><svg><use href="#i-wrench"/></svg><svg><use href="#i-screwdriver"/></svg>
	</div>
</section>

<!-- ============ SERVICES ============ -->
<section class="section services" id="services">
	<svg class="bg-tool bg-tool-1" data-speed="0.25" data-rot="120" aria-hidden="true"><use href="#i-wrench"/></svg>
	<svg class="bg-tool bg-tool-2" data-speed="-0.2" data-rot="-90" aria-hidden="true"><use href="#i-screwdriver"/></svg>

	<div class="container">
		<header class="section-head" data-reveal>
			<span class="kicker">خدماتنا</span>
			<h2>كل اللي يحتاجه بيتك أو منشأتك <span class="red">تحت سقف واحد</span></h2>
			<p>من أول سلك في التأسيس إلى آخر خلاط في التشطيب — فريق واحد مسؤول عن الشغل كامل.</p>
		</header>

		<div class="cards">
			<article class="card" data-reveal style="--d:0s" data-anim="bolt">
				<div class="card-ic"><svg><use href="#i-bolt"/></svg></div>
				<h3>تأسيس الكهرباء</h3>
				<p>تمديدات كاملة للمباني الجديدة بمواصفات كود البناء السعودي، مع توزيع أحمال مدروس.</p>
				<ul class="ticks">
					<li>تمديد المواسير والأسلاك</li>
					<li>لوحات توزيع وقواطع</li>
					<li>أنظمة تأريض وحماية</li>
				</ul>
				<a class="card-link" href="#contact" data-service="تأسيس الكهرباء">اطلب الخدمة <svg class="ic"><use href="#i-arrow"/></svg></a>
			</article>

			<article class="card" data-reveal style="--d:.08s" data-anim="bulb">
				<div class="card-ic"><svg><use href="#i-bulb"/></svg></div>
				<h3>صيانة الكهرباء</h3>
				<p>تشخيص دقيق للأعطال وحلها من جذورها — مو ترقيع مؤقت يرجع بعد أسبوع.</p>
				<ul class="ticks">
					<li>انقطاع وفصل القواطع</li>
					<li>تركيب الإنارة والأفياش</li>
					<li>فحص الأحمال والتماسات</li>
				</ul>
				<a class="card-link" href="#contact" data-service="صيانة الكهرباء">اطلب الخدمة <svg class="ic"><use href="#i-arrow"/></svg></a>
			</article>

			<article class="card" data-reveal style="--d:.16s" data-anim="pipe">
				<div class="card-ic"><svg><use href="#i-pipe"/></svg></div>
				<h3>تأسيس السباكة</h3>
				<p>شبكات تغذية وصرف متكاملة بمواد معتمدة واختبار ضغط قبل الإغلاق.</p>
				<ul class="ticks">
					<li>تمديدات التغذية والصرف</li>
					<li>خزانات ومضخات</li>
					<li>تأسيس السخانات والحمامات</li>
				</ul>
				<a class="card-link" href="#contact" data-service="تأسيس السباكة">اطلب الخدمة <svg class="ic"><use href="#i-arrow"/></svg></a>
			</article>

			<article class="card" data-reveal style="--d:0s" data-anim="drop">
				<div class="card-ic"><svg><use href="#i-faucet"/></svg></div>
				<h3>صيانة السباكة</h3>
				<p>تسريب، انسداد، ضعف ضغط؟ نوصلك ونحلها بأقل إزعاج وبدون فوضى.</p>
				<ul class="ticks">
					<li>فتح الانسدادات</li>
					<li>تبديل الخلاطات والأطقم</li>
					<li>صيانة السخانات والمضخات</li>
				</ul>
				<a class="card-link" href="#contact" data-service="صيانة السباكة">اطلب الخدمة <svg class="ic"><use href="#i-arrow"/></svg></a>
			</article>

			<article class="card" data-reveal style="--d:.08s" data-anim="scan">
				<div class="card-ic"><svg><use href="#i-scan"/></svg></div>
				<h3>كشف التسربات</h3>
				<p>أجهزة كشف إلكترونية تحدد مكان التسريب بدقة — بدون تكسير عشوائي للبلاط والجدران.</p>
				<ul class="ticks">
					<li>تسربات الخزانات والمواسير</li>
					<li>تسربات الحمامات والمطابخ</li>
					<li>تقرير بالمشكلة والحل</li>
				</ul>
				<a class="card-link" href="#contact" data-service="كشف التسربات">اطلب الخدمة <svg class="ic"><use href="#i-arrow"/></svg></a>
			</article>

			<article class="card" data-reveal style="--d:.16s" data-anim="cal">
				<div class="card-ic"><svg><use href="#i-calendar"/></svg></div>
				<h3>عقود الصيانة الدورية</h3>
				<p>للفلل والعمائر والمحلات: زيارات مجدولة تكتشف المشكلة قبل ما تصير عطل مكلف.</p>
				<ul class="ticks">
					<li>جدول زيارات ثابت</li>
					<li>أولوية في البلاغات</li>
					<li>تقارير بعد كل زيارة</li>
				</ul>
				<a class="card-link" href="#contact" data-service="عقد صيانة دورية">اطلب الخدمة <svg class="ic"><use href="#i-arrow"/></svg></a>
			</article>
		</div>
	</div>
</section>

<!-- ============ PROCESS (wire draws with scroll) ============ -->
<section class="section process" id="process">
	<div class="container">
		<header class="section-head light" data-reveal>
			<span class="kicker">آلية العمل</span>
			<h2>من الاتصال إلى التسليم… <span class="red">٤ خطوات واضحة</span></h2>
			<p>ما فيه مفاجآت: تعرف وش بيصير، ومتى، وبكم — قبل ما نلمس أي شي.</p>
		</header>

		<div class="steps" id="steps">
			<svg class="steps-wire" aria-hidden="true">
				<path class="wire-bg"/>
				<path class="wire-fg"/>
				<circle class="wire-spark" r="7"/>
			</svg>
			<div class="step">
				<span class="step-node"><svg><use href="#i-chat"/></svg></span>
				<span class="step-no">01</span>
				<h3>تواصل معنا</h3>
				<p>اتصال أو واتساب، وتوصف لنا المشكلة أو المشروع.</p>
			</div>
			<div class="step">
				<span class="step-node"><svg><use href="#i-gauge"/></svg></span>
				<span class="step-no">02</span>
				<h3>معاينة وتسعير</h3>
				<p>فني مختص يعاين، ويعطيك سعر واضح ومكتوب.</p>
			</div>
			<div class="step">
				<span class="step-node"><svg><use href="#i-wrench"/></svg></span>
				<span class="step-no">03</span>
				<h3>تنفيذ احترافي</h3>
				<p>شغل نظيف بمواد معتمدة وبالموعد المتفق عليه.</p>
			</div>
			<div class="step">
				<span class="step-node"><svg><use href="#i-shield"/></svg></span>
				<span class="step-no">04</span>
				<h3>تسليم وضمان</h3>
				<p>نختبر معك كل شي، ونسلّمك ضمان على المصنعية.</p>
			</div>
		</div>
	</div>
</section>

<!-- ============ WHY US ============ -->
<section class="section why" id="why">
	<div class="container why-inner">
		<div class="why-visual" aria-hidden="true">
			<svg class="gear gear-a" data-rot="180"><use href="#g-gear"/></svg>
			<svg class="gear gear-b" data-rot="-260"><use href="#g-gear"/></svg>
			<svg class="gear gear-c" data-rot="300"><use href="#g-gear"/></svg>
			<svg class="why-wrench" data-rot="-40" data-speed="0.12"><use href="#i-wrench"/></svg>
			<div class="why-badge" data-reveal>
				<strong><span data-count="<?php ps_attr( 'stat_years' ); ?>">0</span>+</strong>
				<small>سنة خبرة في الميدان</small>
			</div>
		</div>

		<div class="why-copy">
			<header class="section-head left" data-reveal>
				<span class="kicker">ليش برو سيرفر؟</span>
				<h2>لأن الشغل الصح <span class="red">ما يحتاج يتعاد</span></h2>
			</header>
			<ul class="features">
				<li data-reveal style="--d:0s">
					<span class="f-ic"><svg><use href="#i-helmet"/></svg></span>
					<div><h3>فنيون معتمدون</h3><p>كل فني متخصص في مجاله: كهربائي للكهرباء، وسبّاك للسباكة.</p></div>
				</li>
				<li data-reveal style="--d:.08s">
					<span class="f-ic"><svg><use href="#i-tag"/></svg></span>
					<div><h3>تسعير واضح</h3><p>سعر مكتوب قبل التنفيذ، وبدون تكاليف مخفية آخر الشغل.</p></div>
				</li>
				<li data-reveal style="--d:.16s">
					<span class="f-ic"><svg><use href="#i-clock"/></svg></span>
					<div><h3>التزام بالموعد</h3><p>نحترم وقتك: نوصل بالموعد، ونسلّم بالمدة المتفق عليها.</p></div>
				</li>
				<li data-reveal style="--d:.24s">
					<span class="f-ic"><svg><use href="#i-shield"/></svg></span>
					<div><h3>ضمان ونظافة</h3><p>ضمان على المصنعية، ونرجّع المكان أنظف مما كان.</p></div>
				</li>
			</ul>
		</div>
	</div>

	<div class="container">
		<div class="stats">
			<div class="stat" data-reveal><strong><span data-count="<?php ps_attr( 'stat_projects' ); ?>">0</span>+</strong><small>مشروع وطلب صيانة منجز</small></div>
			<div class="stat" data-reveal style="--d:.08s"><strong><span data-count="<?php ps_attr( 'stat_techs' ); ?>">0</span>+</strong><small>فني ومهندس في الفريق</small></div>
			<div class="stat" data-reveal style="--d:.16s"><strong><span data-count="<?php ps_attr( 'stat_satisfaction' ); ?>">0</span>%</strong><small>نسبة رضا العملاء</small></div>
			<div class="stat" data-reveal style="--d:.24s"><strong><span data-count="<?php ps_attr( 'stat_years' ); ?>">0</span>+</strong><small>سنوات خبرة</small></div>
		</div>
	</div>
</section>

<!-- ============ SECTORS ============ -->
<section class="section sectors" id="sectors">
	<div class="container">
		<header class="section-head" data-reveal>
			<span class="kicker">مجالات عملنا</span>
			<h2>نخدم كل نوع مبنى <span class="red">بنفس المعايير</span></h2>
		</header>
		<div class="sector-grid">
			<div class="sector" data-reveal style="--d:0s">
				<svg><use href="#i-home"/></svg>
				<h3>الفلل والمنازل</h3>
				<p>صيانة منزلية وتأسيس للفلل الجديدة والملاحق.</p>
			</div>
			<div class="sector" data-reveal style="--d:.08s">
				<svg><use href="#i-building"/></svg>
				<h3>الشقق والعمائر</h3>
				<p>عقود صيانة للعمائر السكنية وإدارة الأملاك.</p>
			</div>
			<div class="sector" data-reveal style="--d:.16s">
				<svg><use href="#i-store"/></svg>
				<h3>المحلات والمكاتب</h3>
				<p>تجهيز وصيانة بأقل تعطيل لساعات عملك.</p>
			</div>
			<div class="sector" data-reveal style="--d:.24s">
				<svg><use href="#i-crane"/></svg>
				<h3>المشاريع تحت الإنشاء</h3>
				<p>تأسيس كامل بالتنسيق مع المقاول والمهندس.</p>
			</div>
		</div>
	</div>
</section>

<!-- ============ CTA BAND ============ -->
<section class="cta-band">
	<svg class="cta-tool cta-tool-1" data-x="-120" data-rot="50" aria-hidden="true"><use href="#i-wrench"/></svg>
	<svg class="cta-tool cta-tool-2" data-x="140" data-rot="-40" aria-hidden="true"><use href="#i-bolt"/></svg>
	<div class="container cta-inner" data-reveal>
		<div>
			<h2>عندك عطل الحين؟ لا تنتظره يكبر.</h2>
			<p>كلّمنا ونرتّب لك أقرب موعد — <?php ps_e( 'hours' ); ?>.</p>
		</div>
		<div class="cta-actions">
			<a class="btn btn-white btn-lg" href="tel:<?php ps_tel(); ?>"><svg class="ic"><use href="#i-phone"/></svg> اتصل الآن</a>
			<a class="btn btn-dark btn-lg" href="https://wa.me/<?php ps_wa(); ?>" target="_blank" rel="noopener"><svg class="ic"><use href="#i-wa"/></svg> واتساب</a>
		</div>
	</div>
</section>

<!-- ============ FAQ ============ -->
<section class="section faq" id="faq">
	<div class="container faq-inner">
		<header class="section-head left" data-reveal>
			<span class="kicker">الأسئلة الشائعة</span>
			<h2>أسئلة <span class="red">يسألونها عملاؤنا</span></h2>
			<p>ما لقيت جوابك؟ <a href="https://wa.me/<?php ps_wa(); ?>" target="_blank" rel="noopener">اسألنا على الواتساب</a>.</p>
		</header>
		<div class="faq-list">
			<details data-reveal>
				<summary>هل أعرف السعر قبل ما تبدأون؟<svg class="ic"><use href="#i-plus"/></svg></summary>
				<div class="faq-a"><p>أكيد. بعد المعاينة نعطيك سعر واضح ومكتوب، وما نبدأ إلا بموافقتك — وما فيه أي تكلفة إضافية بدون علمك.</p></div>
			</details>
			<details data-reveal>
				<summary>هل عندكم ضمان على الشغل؟<svg class="ic"><use href="#i-plus"/></svg></summary>
				<div class="faq-a"><p>نعم، نعطي ضمان على المصنعية، ومدته تختلف حسب نوع العمل وتنكتب لك في عرض السعر.</p></div>
			</details>
			<details data-reveal>
				<summary>مين يوفّر المواد؟<svg class="ic"><use href="#i-plus"/></svg></summary>
				<div class="faq-a"><p>نقدر نوفّر لك مواد معتمدة بأسعار مناسبة، أو توفرها أنت ونركّبها — الخيار لك.</p></div>
			</details>
			<details data-reveal>
				<summary>تشتغلون مع المقاولين والمشاريع الكبيرة؟<svg class="ic"><use href="#i-plus"/></svg></summary>
				<div class="faq-a"><p>نعم، ننفّذ التأسيس الكامل للكهرباء والسباكة للمشاريع، ونقدّم عقود صيانة دورية للعمائر والمنشآت التجارية.</p></div>
			</details>
			<details data-reveal>
				<summary>كيف أحجز موعد؟<svg class="ic"><use href="#i-plus"/></svg></summary>
				<div class="faq-a"><p>عبّي النموذج تحت أو كلّمنا على الواتساب، ونتواصل معك لتحديد موعد المعاينة.</p></div>
			</details>
		</div>
	</div>
</section>

<!-- ============ CONTACT ============ -->
<section class="section contact" id="contact">
	<div class="container contact-inner">
		<div class="contact-info" data-reveal>
			<span class="kicker">تواصل معنا</span>
			<h2>خلّنا نشوف <span class="red">وش يحتاج مكانك</span></h2>
			<p>عبّي البيانات وتوصلنا رسالتك على الواتساب مباشرة، ونرد عليك بأسرع وقت.</p>
			<ul class="contact-list">
				<li><span><svg><use href="#i-phone"/></svg></span><div><small>اتصال</small><a href="tel:<?php ps_tel(); ?>" dir="ltr"><?php ps_e( 'phone' ); ?></a></div></li>
				<li><span><svg><use href="#i-wa"/></svg></span><div><small>واتساب</small><a href="https://wa.me/<?php ps_wa(); ?>" target="_blank" rel="noopener">راسلنا الآن</a></div></li>
				<li><span><svg><use href="#i-mail"/></svg></span><div><small>البريد</small><a href="mailto:<?php ps_attr( 'email' ); ?>"><?php ps_e( 'email' ); ?></a></div></li>
				<li><span><svg><use href="#i-pin"/></svg></span><div><small>نطاق الخدمة</small><b><?php ps_e( 'city' ); ?></b></div></li>
			</ul>
		</div>

		<form class="contact-form" id="contact-form" data-wa="<?php ps_wa(); ?>" data-reveal style="--d:.1s" novalidate>
			<div class="field">
				<label for="cf-name">الاسم</label>
				<input id="cf-name" name="name" type="text" autocomplete="name" required placeholder="اسمك الكريم">
			</div>
			<div class="field">
				<label for="cf-phone">رقم الجوال</label>
				<input id="cf-phone" name="phone" type="tel" inputmode="tel" autocomplete="tel" required placeholder="05XXXXXXXX" dir="ltr">
			</div>
			<div class="field">
				<label for="cf-service">نوع الخدمة</label>
				<select id="cf-service" name="service" required>
					<option value="">اختر الخدمة</option>
					<option>تأسيس الكهرباء</option>
					<option>صيانة الكهرباء</option>
					<option>تأسيس السباكة</option>
					<option>صيانة السباكة</option>
					<option>كشف التسربات</option>
					<option>عقد صيانة دورية</option>
					<option>أخرى</option>
				</select>
			</div>
			<div class="field">
				<label for="cf-area">الحي / المدينة</label>
				<input id="cf-area" name="area" type="text" placeholder="مثال: حي النرجس">
			</div>
			<div class="field full">
				<label for="cf-msg">وصف المشكلة أو المشروع</label>
				<textarea id="cf-msg" name="msg" rows="4" placeholder="اكتب لنا التفاصيل باختصار…"></textarea>
			</div>
			<p class="form-error" role="alert" hidden>فضلًا عبّي الاسم ورقم الجوال ونوع الخدمة.</p>
			<button class="btn btn-red btn-lg full" type="submit">
				<svg class="ic"><use href="#i-wa"/></svg>
				أرسل الطلب عبر الواتساب
			</button>
		</form>
	</div>
</section>

</main>

<?php get_footer(); ?>
