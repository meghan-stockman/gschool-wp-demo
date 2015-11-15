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
					    <h3><?php the_title(); ?></h3>
					    <a href="<?php the_permalink(); ?>">➞</a>
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
