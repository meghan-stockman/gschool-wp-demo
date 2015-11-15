<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress_Demo
 */

get_header(); ?>

	<div id="primary" class="content-area portfolio">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<h2 class="portfolio-headline">Popular Comics</h2><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>

				
					 <div class="column third" style="background-image: url(<?php the_field('portfolio_feature_image'); ?>);">
					    <div class="portfolio-color-overlay"></div>
					    <h3 class="portfolio-title"><?php the_title(); ?></h3>
					    <a class="portfolio-link" href="<?php the_permalink(); ?>"><span class="dashicons dashicons-arrow-right-alt"></span></a>
					</div>
					
					
			<?php endwhile; ?>
			</div> <!-- End Row -->

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
