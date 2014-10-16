<?php

function employee_init() {
	register_post_type( 'employee', array(
		'labels'            => array(
			'name'                => __( 'Medewerkers', 'benchmark' ),
			'singular_name'       => __( 'Medewerker', 'benchmark' ),
			'all_items'           => __( 'Medewerkers', 'benchmark' ),
			'new_item'            => __( 'New Medewerker', 'benchmark' ),
			'add_new'             => __( 'Add New', 'benchmark' ),
			'add_new_item'        => __( 'Add New Medewerker', 'benchmark' ),
			'edit_item'           => __( 'Edit Medewerker', 'benchmark' ),
			'view_item'           => __( 'View Medewerker', 'benchmark' ),
			'search_items'        => __( 'Search Medewerkers', 'benchmark' ),
			'not_found'           => __( 'No Medewerkers found', 'benchmark' ),
			'not_found_in_trash'  => __( 'No Medewerkers found in trash', 'benchmark' ),
			'parent_item_colon'   => __( 'Parent Medewerker', 'benchmark' ),
			'menu_name'           => __( 'Medewerkers', 'benchmark' ),
		),
		'public'            => true,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'supports'          => array( 'title', 'editor' ),
		'has_archive'       => true,
		'rewrite'           => true,
		'query_var'         => true,
	) );

}
add_action( 'init', 'employee_init' );

function employee_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['employee'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Medewerker updated. <a target="_blank" href="%s">View Medewerker</a>', 'benchmark'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'benchmark'),
		3 => __('Custom field deleted.', 'benchmark'),
		4 => __('Medewerker updated.', 'benchmark'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Medewerker restored to revision from %s', 'benchmark'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Medewerker published. <a href="%s">View Medewerker</a>', 'benchmark'), esc_url( $permalink ) ),
		7 => __('Medewerker saved.', 'benchmark'),
		8 => sprintf( __('Medewerker submitted. <a target="_blank" href="%s">Preview Medewerker</a>', 'benchmark'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Medewerker scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Medewerker</a>', 'benchmark'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Medewerker draft updated. <a target="_blank" href="%s">Preview Medewerker</a>', 'benchmark'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'employee_updated_messages' );
