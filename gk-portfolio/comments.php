<?php

/**
 *
 * Comments part
 *
 **/

?>

<?php if (post_password_required()) : ?>
<section id="comments">
	<p class="no-password"><?php _e('This post is password protected. Enter the password to view any comments.', 'gk-portfolio'); ?></p>
</section>

<?php
		return;/* Stop the rest of comments.php from being processed */	
	endif;
?>

<?php if (have_comments() || comments_open()) : ?>
<div id="comments" class="comments-area">
	<?php if (have_comments()) : ?>
		<h3 class="comments-title">
			<span>
				<?php if(get_comments_number() == 1) : ?>
				<?php _e('1 Comment', 'gk-portfolio'); ?>
				<?php elseif(get_comments_number() == 2) : ?>
				<?php _e('2 Comments', 'gk-portfolio'); ?>
				<?php elseif(get_comments_number() > 2) : ?>
				<?php printf(__('%1$s Comments', 'gk-portfolio'), number_format_i18n(get_comments_number())); ?>
				<?php endif; ?>
			</span>
		</h3>

		<ol class="comment-list">
			<?php 
			
			wp_list_comments(
				array( 
					'avatar_size' => 64,
					'callback' => 'portfolio_comment_template', 
					'style' => 'ol'
				)
			); 
			
			?>
		</ol><!-- .comment-list -->

		<?php
			// Are there comments to navigate through?
			if (get_comment_pages_count() > 1 && get_option('page_comments')) :
		?>
		<nav>
			<h1 class="screen-reader-text section-heading"><?php _e('Comment navigation', 'gk-portfolio'); ?></h1>
			<div class="nav-prev"><?php previous_comments_link(__('&larr; Older Comments', 'gk-portfolio')); ?></div>
			<div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'gk-portfolio')); ?></div>
		</nav><!-- .comment-navigation -->
		<?php endif; ?>

		<?php if (!comments_open() && get_comments_number()) : ?>
		<p class="no-comments"><?php _e('Comments are closed.' , 'gk-portfolio'); ?></p>
		<?php endif; ?>
	<?php endif; // have_comments() ?>

	<?php 
		comment_form(
			array(
				'title_reply' => '<span>' . __('Leave a Reply', 'gk-portfolio') . '</span>'
			)
		); 
	?>
</div><!-- #comments -->
<?php endif;