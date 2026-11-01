/* ProServer — interactions & scroll motion (vanilla, no dependencies) */
(function () {
	'use strict';

	var d = document;
	var body = d.body;
	var $ = function (s, c) { return (c || d).querySelector(s); };
	var $$ = function (s, c) { return Array.prototype.slice.call((c || d).querySelectorAll(s)); };
	var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	var canHover = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
	var clamp = function (v, a, b) { return Math.min(b, Math.max(a, v)); };

	/* ---------- Page loaded: hero title + lights on ---------- */
	var started = false;
	function start() {
		if (started) return;
		started = true;
		body.classList.add('loaded');
		var hero = $('.hero');
		if (!hero) return;
		if (reduce) { hero.classList.add('lights-on'); return; }
		// flicker the pendant bulb on, like a real light switching on
		[700, 820, 900, 1060, 1180].forEach(function (t, i) {
			setTimeout(function () { hero.classList.toggle('lights-on', i % 2 === 0); }, t);
		});
	}
	if (d.fonts && d.fonts.ready) d.fonts.ready.then(start);
	setTimeout(start, 900);

	var yearEl = $('[data-year]');
	if (yearEl) yearEl.textContent = new Date().getFullYear();

	/* ---------- Mobile menu ---------- */
	var toggle = $('.menu-toggle');
	function setNav(open) {
		body.classList.toggle('nav-open', open);
		if (toggle) {
			toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
			toggle.setAttribute('aria-label', open ? 'إغلاق القائمة' : 'فتح القائمة');
		}
	}
	if (toggle) {
		toggle.addEventListener('click', function () { setNav(!body.classList.contains('nav-open')); });
		$$('.main-nav a').forEach(function (a) { a.addEventListener('click', function () { setNav(false); }); });
		d.addEventListener('keydown', function (e) { if (e.key === 'Escape') setNav(false); });
	}

	/* ---------- Reveal on scroll ---------- */
	var revealEls = $$('[data-reveal]');
	if ('IntersectionObserver' in window && !reduce) {
		var io = new IntersectionObserver(function (entries) {
			entries.forEach(function (en) {
				if (en.isIntersecting) { en.target.classList.add('in'); io.unobserve(en.target); }
			});
		}, { rootMargin: '0px 0px -8% 0px', threshold: 0.12 });
		revealEls.forEach(function (el) { io.observe(el); });
	} else {
		revealEls.forEach(function (el) { el.classList.add('in'); });
	}

	/* ---------- Counters ---------- */
	function runCount(el) {
		var target = parseFloat(String(el.dataset.count).replace(/[^\d.]/g, '')) || 0;
		if (reduce) { el.textContent = target.toLocaleString('en'); return; }
		var t0 = null, dur = 1800;
		function step(t) {
			if (!t0) t0 = t;
			var p = clamp((t - t0) / dur, 0, 1);
			var e = 1 - Math.pow(1 - p, 3);
			el.textContent = Math.round(target * e).toLocaleString('en');
			if (p < 1) requestAnimationFrame(step);
		}
		requestAnimationFrame(step);
	}
	var counters = $$('[data-count]');
	if ('IntersectionObserver' in window) {
		var cio = new IntersectionObserver(function (entries) {
			entries.forEach(function (en) {
				if (en.isIntersecting) { runCount(en.target); cio.unobserve(en.target); }
			});
		}, { threshold: 0.6 });
		counters.forEach(function (el) { cio.observe(el); });
	} else {
		counters.forEach(runCount);
	}

	/* ---------- Belt rows: duplicate content so they never show gaps ---------- */
	$$('.belt-row').forEach(function (row) { row.innerHTML += row.innerHTML; });

	/* ---------- Process wire (built from the real node positions) ---------- */
	var steps = $('#steps');
	var wire = null;
	function roundedPath(pts, r) {
		if (pts.length < 2) return '';
		var dStr = 'M' + pts[0].x + ' ' + pts[0].y;
		for (var i = 1; i < pts.length - 1; i++) {
			var A = pts[i - 1], P = pts[i], B = pts[i + 1];
			var la = Math.hypot(A.x - P.x, A.y - P.y), lb = Math.hypot(B.x - P.x, B.y - P.y);
			if (!la || !lb) continue;
			var rr = Math.min(r, la / 2, lb / 2);
			var s = { x: P.x + (A.x - P.x) / la * rr, y: P.y + (A.y - P.y) / la * rr };
			var e = { x: P.x + (B.x - P.x) / lb * rr, y: P.y + (B.y - P.y) / lb * rr };
			dStr += ' L' + s.x + ' ' + s.y + ' Q' + P.x + ' ' + P.y + ' ' + e.x + ' ' + e.y;
		}
		var L = pts[pts.length - 1];
		return dStr + ' L' + L.x + ' ' + L.y;
	}
	function route(nodes) {
		// orthogonal "conduit" route between node centres
		var pts = [nodes[0]];
		for (var i = 1; i < nodes.length; i++) {
			var a = nodes[i - 1], b = nodes[i];
			if (Math.abs(a.y - b.y) > 1 && Math.abs(a.x - b.x) > 1) {
				var mx = (a.x + b.x) / 2;
				pts.push({ x: mx, y: a.y }, { x: mx, y: b.y });
			}
			pts.push(b);
		}
		return pts;
	}
	function buildWire() {
		if (!steps) return;
		var svg = $('.steps-wire', steps);
		var bgP = $('.wire-bg', svg), fgP = $('.wire-fg', svg), spark = $('.wire-spark', svg);
		var box = steps.getBoundingClientRect();
		var nodeEls = $$('.step-node', steps);
		var centres = nodeEls.map(function (n) {
			var r = n.getBoundingClientRect();
			return { x: r.left - box.left + r.width / 2, y: r.top - box.top + r.height / 2 };
		});
		svg.setAttribute('viewBox', '0 0 ' + box.width + ' ' + box.height);
		var full = roundedPath(route(centres), 28);
		bgP.setAttribute('d', full);
		fgP.setAttribute('d', full);
		var len = fgP.getTotalLength();
		fgP.style.strokeDasharray = len + ' ' + len;
		// path length at which each node is reached
		var tmp = d.createElementNS('http://www.w3.org/2000/svg', 'path');
		svg.appendChild(tmp);
		var marks = centres.map(function (c, i) {
			if (i === 0) return 0;
			tmp.setAttribute('d', roundedPath(route(centres.slice(0, i + 1)), 28));
			return tmp.getTotalLength();
		});
		svg.removeChild(tmp);
		wire = { fg: fgP, spark: spark, len: len, marks: marks, steps: $$('.step', steps), last: -1 };
	}

	/* ---------- Scroll / parallax engine ---------- */
	var header = $('.site-header');
	var progressBar = $('.scroll-wire span');
	var hero = $('.hero');
	var heroGrid = hero ? $('.hero-grid', hero) : null;
	var pendant = $('.pendant-swing');
	var orbit = $('[data-spin]');
	var stage = $('[data-tilt]');

	var movers = $$('[data-speed], [data-rot], [data-x]').map(function (el) {
		return {
			el: el,
			speed: parseFloat(el.dataset.speed) || 0,
			rot: parseFloat(el.dataset.rot) || 0,
			x: parseFloat(el.dataset.x) || 0,
			host: el.closest('section') || el.parentElement,
			depth: el.classList.contains('fl') ? (parseFloat(el.dataset.speed) || 0) : 0
		};
	});

	var lastY = window.scrollY, swing = 0, swingV = 0, mouse = { x: 0, y: 0, tx: 0, ty: 0 };
	var vh = window.innerHeight;
	var t0 = performance.now();

	function frame(now) {
		var y = window.scrollY;
		var dy = y - lastY;
		var docH = d.documentElement.scrollHeight - vh;

		// progress bar + header state
		if (progressBar) progressBar.style.setProperty('--p', docH > 0 ? (y / docH).toFixed(4) : 0);
		if (header) {
			header.classList.toggle('scrolled', y > 30);
			if (!body.classList.contains('nav-open')) {
				if (dy > 4 && y > 500) header.classList.add('hidden');
				else if (dy < -4) header.classList.remove('hidden');
			}
		}
		body.classList.toggle('show-fab', hero ? y > hero.offsetHeight * 0.6 : y > 400);

		if (!reduce) {
			// ease mouse
			mouse.x += (mouse.tx - mouse.x) * 0.08;
			mouse.y += (mouse.ty - mouse.y) * 0.08;

			// read all rects first, then write
			var rects = movers.map(function (m) { return m.host.getBoundingClientRect(); });
			movers.forEach(function (m, i) {
				var r = rects[i];
				if (r.bottom < -200 || r.top > vh + 200) return;
				var centre = r.top + r.height / 2 - vh / 2;
				var p = clamp((vh - r.top) / (vh + r.height), 0, 1) - 0.5; // -0.5 … 0.5
				var tx = m.x * p * 2 + mouse.x * m.depth * -60;
				var ty = centre * m.speed + mouse.y * m.depth * -60;
				var rot = m.rot * p * 2;
				m.el.style.transform = 'translate3d(' + tx.toFixed(1) + 'px,' + ty.toFixed(1) + 'px,0) rotate(' + rot.toFixed(1) + 'deg)';
			});

			if (heroGrid && y < vh * 1.2) heroGrid.style.setProperty('--gy', (y * 0.25).toFixed(1) + 'px');

			// orbit: slow constant spin + scroll
			if (orbit) {
				var spin = (now - t0) / 1000 * 6 + y * (parseFloat(orbit.dataset.spin) || 0);
				orbit.style.setProperty('--r', spin.toFixed(2) + 'deg');
			}

			// 3D tilt of hero visual with mouse
			if (stage && canHover) {
				stage.style.transform = 'rotateY(' + (mouse.x * 10).toFixed(2) + 'deg) rotateX(' + (-mouse.y * 10).toFixed(2) + 'deg)';
			}

			// pendant bulb: spring physics driven by scroll velocity
			if (pendant && y < vh * 1.3) {
				swingV += clamp(dy, -60, 60) * 0.012 + mouse.x * 0.02;
				swingV += -swing * 0.06;
				swingV *= 0.92;
				swing = clamp(swing + swingV, -28, 28);
				pendant.style.setProperty('--sw', swing.toFixed(2) + 'deg');
			}
		}

		// process wire
		if (wire) {
			var sr = steps.getBoundingClientRect();
			var prog = reduce ? 1 : clamp((vh * 0.7 - sr.top) / (sr.height * 0.95), 0, 1);
			var at = wire.len * prog;
			wire.fg.style.strokeDashoffset = (wire.len - at).toFixed(1);
			if (wire.len) {
				var pt = wire.fg.getPointAtLength(at);
				wire.spark.setAttribute('cx', pt.x);
				wire.spark.setAttribute('cy', pt.y);
			}
			steps.classList.toggle('live', prog > 0.001 && prog < 0.999);
			wire.steps.forEach(function (s, i) { s.classList.toggle('on', at >= wire.marks[i] - 2); });
		}

		lastY = y;
		requestAnimationFrame(frame);
	}

	if (hero && canHover && !reduce) {
		hero.addEventListener('pointermove', function (e) {
			mouse.tx = (e.clientX / window.innerWidth - 0.5);
			mouse.ty = (e.clientY / window.innerHeight - 0.5);
		});
		hero.addEventListener('pointerleave', function () { mouse.tx = 0; mouse.ty = 0; });
	}

	function onResize() {
		vh = window.innerHeight;
		buildWire();
	}
	window.addEventListener('resize', function () {
		clearTimeout(onResize._t);
		onResize._t = setTimeout(onResize, 150);
	});
	window.addEventListener('load', buildWire);
	if (d.fonts && d.fonts.ready) d.fonts.ready.then(buildWire);
	buildWire();
	requestAnimationFrame(frame);

	/* ---------- Card tilt + spotlight ---------- */
	if (canHover && !reduce) {
		$$('.card').forEach(function (card) {
			card.addEventListener('pointermove', function (e) {
				var r = card.getBoundingClientRect();
				var px = (e.clientX - r.left) / r.width, py = (e.clientY - r.top) / r.height;
				card.style.setProperty('--mx', (px * 100) + '%');
				card.style.setProperty('--my', (py * 100) + '%');
				card.style.transform = 'perspective(900px) rotateY(' + ((px - 0.5) * 8).toFixed(2) + 'deg) rotateX(' + (-(py - 0.5) * 8).toFixed(2) + 'deg) translateY(-6px)';
			});
			card.addEventListener('pointerleave', function () { card.style.transform = ''; });
		});

		$$('.magnetic').forEach(function (btn) {
			btn.addEventListener('pointermove', function (e) {
				var r = btn.getBoundingClientRect();
				var x = e.clientX - r.left - r.width / 2, y = e.clientY - r.top - r.height / 2;
				btn.style.transform = 'translate(' + (x * 0.18).toFixed(1) + 'px,' + (y * 0.3).toFixed(1) + 'px)';
			});
			btn.addEventListener('pointerleave', function () { btn.style.transform = ''; });
		});
	}

	/* ---------- Active nav link ---------- */
	var navLinks = $$('.main-nav a[href*="#"]');
	if ('IntersectionObserver' in window && navLinks.length) {
		var nio = new IntersectionObserver(function (entries) {
			entries.forEach(function (en) {
				if (!en.isIntersecting) return;
				navLinks.forEach(function (a) {
					a.classList.toggle('active', a.getAttribute('href').split('#')[1] === en.target.id);
				});
			});
		}, { rootMargin: '-45% 0px -50% 0px' });
		$$('main section[id]').forEach(function (s) { nio.observe(s); });
	}

	/* ---------- Contact form → WhatsApp ---------- */
	var form = $('#contact-form');
	var select = $('#cf-service');
	$$('[data-service]').forEach(function (a) {
		a.addEventListener('click', function () { if (select) select.value = a.dataset.service; });
	});
	if (form) {
		form.addEventListener('submit', function (e) {
			e.preventDefault();
			var f = form.elements;
			var required = [f.name, f.phone, f.service];
			var bad = required.filter(function (el) { return !el.value.trim(); });
			required.forEach(function (el) { el.classList.toggle('invalid', bad.indexOf(el) > -1); });
			var err = $('.form-error', form);
			if (bad.length) { err.hidden = false; bad[0].focus(); return; }
			err.hidden = true;
			var lines = [
				'السلام عليكم، أبغى أطلب خدمة من برو سيرفر:',
				'• الاسم: ' + f.name.value.trim(),
				'• الجوال: ' + f.phone.value.trim(),
				'• الخدمة: ' + f.service.value
			];
			if (f.area.value.trim()) lines.push('• الموقع: ' + f.area.value.trim());
			if (f.msg.value.trim()) lines.push('• التفاصيل: ' + f.msg.value.trim());
			var url = 'https://wa.me/' + form.dataset.wa + '?text=' + encodeURIComponent(lines.join('\n'));
			window.open(url, '_blank', 'noopener');
		});
		$$('input, select', form).forEach(function (el) {
			el.addEventListener('input', function () { el.classList.remove('invalid'); });
		});
	}
})();
