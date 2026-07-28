<?php

add_action( 'init', 'acro_agenda_register_block_styles' );

function acro_agenda_register_block_styles() {
	register_block_style(
		'core/button',
		array(
			'name'  => 'soft',
			'label' => __( 'Suave (secundario)', 'acro-agenda' ),
		)
	);
}

add_action( 'wp_enqueue_scripts', 'acro_agenda_enqueue_styles' );

function acro_agenda_enqueue_styles() {
	wp_enqueue_style(
		'acro-agenda-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
