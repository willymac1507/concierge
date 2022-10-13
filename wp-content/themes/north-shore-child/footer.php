<?php
/**
 * Template Name: No Footer Widgets
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package CityLogic
 */
?>

	</div><!-- #content -->
</div><!-- .content-container -->

<footer id="colophon" class="site-footer" role="contentinfo">
	
	<div class="site-footer-bottom-bar">
	
		<div class="site-container">
			
			<div class="site-footer-bottom-bar-left">

             	<?php printf( __( 'Theme by %1$s', 'citylogic' ), '<a href="https://www.outtheboxthemes.com" rel="nofollow">camelCase</a>' ); ?>

			</div>
	        
	        <div class="site-footer-bottom-bar-right">

	        	<?php
				if ( is_active_sidebar( 'footer-bottom-bar-right' ) ) {
					dynamic_sidebar( 'footer-bottom-bar-right' );
 				}
				?>

	        </div>
	        
	    </div>
		
        <div class="clearboth"></div>
	</div>
	
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>