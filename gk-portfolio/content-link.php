<?php
/**
 * The default template for displaying Link post format
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div>
		<?php get_template_part('content', 'header'); ?>
		
		<?php get_template_part('content', 'meta'); ?>
	
		<div class="entry-content">
			<?php the_content(__('Read more', 'gk-portfolio')); ?>
			<?php echo portfolio_social_button(); ?>
			
			<?php wp_link_pages(array('before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'gk-portfolio') . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>')); ?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post -->

