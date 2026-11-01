<?php get_header(); ?>

<main id="main" class="page-main">
	<section class="page-hero">
		<div class="hero-grid" aria-hidden="true"></div>
		<div class="container">
			<h1><?php echo is_singular() ? esc_html( get_the_title() ) : esc_html( wp_get_document_title() ); ?></h1>
		</div>
	</section>

	<div class="container page-content">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class( 'entry' ); ?>>
					<?php if ( ! is_singular() ) : ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
					<?php else : ?>
						<?php the_content(); ?>
					<?php endif; ?>
				</article>
			<?php endwhile; ?>
			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<p>لا يوجد محتوى هنا. <a href="<?php ps_home(); ?>">العودة للرئيسية</a></p>
		<?php endif; ?>
	</div>
</main>

<?php get_footer(); ?>
