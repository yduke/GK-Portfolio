<?php
/**
 * The template for displaying the footer
 *
 */
 
?>
		</div><!-- #main -->
	</div><!-- #page -->
	
	<footer id="gk-footer" role="contentinfo">
		<?php if (is_active_sidebar('bottom')) : ?>
		<div id="gk-bottom" role="complementary">
			<div class="widget-area">
				<?php dynamic_sidebar('bottom'); ?>
			</div>
		</div>
		<?php endif; ?>
		
		<div id="gk-social">
			<?php wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'social-menu')); ?>
		</div>
		
		<div id="gk-copyrights">
			<?php do_action('portfolio_credits'); ?>
			
			<p class="copyright"><?php _e('2018 All Rights Reserved ','gk-portfolio'); ?> <a href="<?php echo esc_url( __('http://www.dukeyin.com/', 'gk-portfolio'));?>">Duke Art</a></p>
			<p class="poweredby"><?php _e('Created by  ','gk-portfolio'); ?> <a href="<?php echo esc_url( __('http://www.dukeyin.com/', 'gk-portfolio'));?>">Duke Yin</a></p>
		</div><!-- .site-info -->
	</footer><!-- end of #gk-footer -->
	
	<?php wp_footer(); ?>
</body>
</html>