<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage TemplateMela
 * @since TemplateMela 1.0
 */
?>
<?php tmpmela_content_after(); ?>
</div>
<!-- .main-content-inner -->
</div>
<!-- .main_inner -->
</div>
<!-- #main -->
<?php tmpmela_footer_before(); ?>
<?php if ( is_active_sidebar( 'footer-newsletter-widget-area' ) ) : ?>
	<div class="footer-newsletter">
		<div class="theme-container">
			<?php dynamic_sidebar( 'footer-newsletter-widget-area' ); ?>
		</div>
	</div>
<?php endif; ?>
<footer id="colophon" class="site-footer" >	
	<?php tmpmela_footer_inside(); ?>
	<?php get_sidebar('footer'); ?>
	<?php if ( has_nav_menu('footer-menu') ) : ?>
	<div class="footer-middle">
		<div class="theme-container">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu','menu_class' => 'mega' ) ); ?>
		</div>
 	</div>
 	<?php endif; ?>
	<div class="footer-bottom">
	 	<div class="theme-container">	
		  	<div class="site-info">  <?php echo esc_html__( 'Copyright', 'shopinia' ); ?> &copy; <?php echo esc_attr(date('Y')); ?> <?php echo esc_attr(stripslashes(get_option('tmpmela_footer_slog')));?>
						<?php do_action( 'tmpmela_credits' ); ?>
				</div>
			<?php if ( is_active_sidebar( 'footer-bottom-widget-area' ) ) : ?>
				<?php dynamic_sidebar( 'footer-bottom-widget-area' ); ?>
			<?php endif; ?>	
			</div>
	</div>
</footer>
<!-- #colophon -->
<?php tmpmela_footer_after(); ?>
</div>
<!-- #page -->
<?php tmpmela_go_top(); ?>
<?php tmpmela_get_widget('before-end-body-widget'); ?>
<?php wp_footer(); ?>
</body>
</html>