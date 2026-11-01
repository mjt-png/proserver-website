<footer class="site-footer">
	<div class="footer-wire" aria-hidden="true"></div>
	<div class="container footer-grid">
		<div class="f-brand">
			<img src="<?php ps_img( 'logo-light.png' ); ?>" alt="ProServer" width="150" height="95" loading="lazy">
			<p>برو سيرفر لأعمال تأسيس وصيانة الكهرباء والسباكة — شغل احترافي، سعر واضح، وضمان.</p>
			<div class="socials">
				<?php if ( ps_opt( 'instagram' ) ) : ?><a href="<?php echo esc_url( ps_opt( 'instagram' ) ); ?>" target="_blank" rel="noopener" aria-label="إنستقرام"><svg><use href="#i-insta"/></svg></a><?php endif; ?>
				<?php if ( ps_opt( 'x' ) ) : ?><a href="<?php echo esc_url( ps_opt( 'x' ) ); ?>" target="_blank" rel="noopener" aria-label="إكس"><svg><use href="#i-x"/></svg></a><?php endif; ?>
				<?php if ( ps_opt( 'tiktok' ) ) : ?><a href="<?php echo esc_url( ps_opt( 'tiktok' ) ); ?>" target="_blank" rel="noopener" aria-label="تيك توك"><svg><use href="#i-tiktok"/></svg></a><?php endif; ?>
				<?php if ( ps_opt( 'snapchat' ) ) : ?><a href="<?php echo esc_url( ps_opt( 'snapchat' ) ); ?>" target="_blank" rel="noopener" aria-label="سناب شات"><svg><use href="#i-snap"/></svg></a><?php endif; ?>
				<a href="https://wa.me/<?php ps_wa(); ?>" target="_blank" rel="noopener" aria-label="واتساب"><svg><use href="#i-wa"/></svg></a>
			</div>
		</div>
		<div>
			<h4>خدماتنا</h4>
			<ul>
				<li><a href="<?php ps_home(); ?>#services">تأسيس الكهرباء</a></li>
				<li><a href="<?php ps_home(); ?>#services">صيانة الكهرباء</a></li>
				<li><a href="<?php ps_home(); ?>#services">تأسيس السباكة</a></li>
				<li><a href="<?php ps_home(); ?>#services">صيانة السباكة</a></li>
				<li><a href="<?php ps_home(); ?>#services">كشف التسربات</a></li>
			</ul>
		</div>
		<div>
			<h4>روابط</h4>
			<ul>
				<li><a href="<?php ps_home(); ?>#process">آلية العمل</a></li>
				<li><a href="<?php ps_home(); ?>#why">ليش برو سيرفر</a></li>
				<li><a href="<?php ps_home(); ?>#faq">الأسئلة الشائعة</a></li>
				<li><a href="<?php ps_home(); ?>#contact">اطلب خدمة</a></li>
			</ul>
		</div>
		<div>
			<h4>تواصل</h4>
			<ul class="f-contact">
				<li><svg><use href="#i-phone"/></svg><a href="tel:<?php ps_tel(); ?>" dir="ltr"><?php ps_e( 'phone' ); ?></a></li>
				<li><svg><use href="#i-mail"/></svg><a href="mailto:<?php ps_attr( 'email' ); ?>"><?php ps_e( 'email' ); ?></a></li>
				<li><svg><use href="#i-clock"/></svg><span><?php ps_e( 'hours' ); ?></span></li>
				<li><svg><use href="#i-pin"/></svg><span><?php ps_e( 'city' ); ?></span></li>
			</ul>
		</div>
	</div>
	<div class="container footer-bottom">
		<small>© <span data-year>2026</span> برو سيرفر ProServer — جميع الحقوق محفوظة.</small>
		<a href="#top" class="to-top" aria-label="العودة للأعلى"><svg class="ic"><use href="#i-arrow"/></svg></a>
	</div>
</footer>

<!-- أزرار عائمة -->
<a class="fab-wa" href="https://wa.me/<?php ps_wa(); ?>" target="_blank" rel="noopener" aria-label="تواصل واتساب">
	<svg><use href="#i-wa"/></svg>
</a>
<div class="mobile-bar">
	<a href="tel:<?php ps_tel(); ?>"><svg><use href="#i-phone"/></svg> اتصال</a>
	<a href="https://wa.me/<?php ps_wa(); ?>" target="_blank" rel="noopener" class="wa"><svg><use href="#i-wa"/></svg> واتساب</a>
	<a href="<?php ps_home(); ?>#contact" class="req"><svg><use href="#i-wrench"/></svg> اطلب فني</a>
</div>

<?php wp_footer(); ?>
</body>
</html>
