<?php

	/*
		Template for the entry header
	*/


?>
<?php if(!is_singular() || (is_singular() && get_theme_mod('portfolio_post_show_featured_image', '1') == '1')) : ?>
<header class="entry-header no-anim<?php if(is_singular() && is_sticky()) :?> sticky<?php endif; ?><?php if(get_theme_mod('portfolio_full_width_images', '1') == '1') : ?> full-width-image<?php endif; ?><?php if(get_theme_mod('portfolio_post_show_title', '1') == '0') : ?> no-title<?php endif; ?>" data-url="<?php echo get_permalink(); ?>">
	<?php if (has_post_thumbnail() && ! post_password_required()) : ?>			
		<?php the_post_thumbnail(is_singular() ? 'full' : 'thumbnail'); ?>
	<?php endif; ?>
</header><!-- .entry-header -->
<?php endif; 