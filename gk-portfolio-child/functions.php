<?php
function dukeart_get_meta_box( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = array(
		'id' => 'art-work',
		'title' => esc_html__( 'Art Work', 'gk-portfolio' ),
		'post_types' => array( 'post' ),
		'context' => 'after_editor',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'full-image',
				'type' => 'url',
				'name' => esc_html__( 'full-image', 'gk-portfolio' ),
				'desc' => esc_html__( 'Full image url here', 'gk-portfolio' ),
				'placeholder' => esc_html__( 'Full image url here', 'gk-portfolio' ),
				'size' => 70,
			),
			array(
				'id' => $prefix . 'thumbnail',
				'type' => 'url',
				'name' => esc_html__( 'thumbnail', 'gk-portfolio' ),
				'desc' => esc_html__( 'Thumbnail image url here', 'gk-portfolio' ),
				'placeholder' => esc_html__( 'thumbnail image url here', 'gk-portfolio' ),
				'size' => 70,
			),
			array(
				'id' => $prefix . 'big-image',
				'type' => 'url',
				'name' => esc_html__( 'big-image', 'gk-portfolio' ),
				'desc' => esc_html__( 'Big image url here', 'gk-portfolio' ),
				'size' => 70,
			),
			array(
				'id' => $prefix . 'designed-by',
				'type' => 'text',
				'name' => esc_html__( 'designed-by', 'gk-portfolio' ),
				'size' => 70,
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'dukeart_get_meta_box' );?>