<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress_Demo
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">
			<div class="column half">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
   					<img id="footer-logo" src="<?php bloginfo('template_directory'); ?>/images/logo-header.png" alt="Larryville Blue" />
				</a>
			</div>
    		<div class="column half">
    			<nav class="footer-navigation" role="navigation">
    			<!-- footer navigation -->
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>

				<!-- social navigation -->
				<?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
				</nav>
    		</div>
		</div><!-- #footer row -->
		
		<div class="row">
		<div class="site-info">
			<p>Copyright  <?php echo date("Y"); ?> <?php bloginfo('url'); ?> All Rights Reserved.</p>
		</div><!-- .site-info -->
		</div><!-- .row -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
