<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package activello
 */
?>
				</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
			</div><!-- close .row -->
		</div><!-- close .container -->
	</div><!-- close .site-content -->

	<div id="footer-area">
		<footer id="colophon" class="site-footer display-none" role="contentinfo">
			<div class="site-info container">
				<div class="row">

					<!-- ajout de ma nouvelle widget area -->
					<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
					<div id="footer-widget-area" class="fwa-footer-widget widget-area" role="complementary">
					<?php dynamic_sidebar( 'footer-widget-area' ); ?>
					</div>
					<?php endif; ?>
					<!-- fin nouvelle widget area -->

				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
