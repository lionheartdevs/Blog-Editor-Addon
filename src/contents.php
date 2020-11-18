<?php



namespace LionHeart\BlogEditorAddon\SRC;


//add_action after callback is hooked.
add_action('after_setup_theme', __NAMESPACE__ . '\unregister_callbacks');
/**
 * Unregister callbacks.
 */
function unregister_callbacks(){
	remove_action('genesis_before_loop', 'genesis_do_posts_page_heading');
}

//during the genesis_before_loop hook - run the post_content_run function.
add_action('genesis_before_loop', __NAMESPACE__ . '\post_content_run');

/**
 * This function posts the title, and sanitized content to the post_page.
 */
function post_content_run(){

	if(! is_home()){
		return;
	}

	$post_content = get_posts_page();
	if( ! $post_content){
		return;
	}

	$post_sanitize_content = prepare_contents_for_render( $post_content ->post_content );
	$title = esc_html($post_content ->post_title);

	include ('views/content.php');



}

/**
 * Gets the post page data and object for the database.
 *
 * @return \WP_Post|null
 */
function get_posts_page(){

	$posts_page_id = get_option('page_for_posts');

	return get_post($posts_page_id);

}

/**
 *
 * This function retreived raw contents fron the database and sanitizes and renders it. It uses wp_kses_post to sanitize the content, after that it runs do_shortcode which filters any shortcodes in the content
 *
 * @param $post_content
 *
 * @return string Returns HTML
 */

function prepare_contents_for_render ( $post_content ){

	$post_content = wp_kses_post( $post_content);
	$post_content = do_shortcode( $post_content);

	return wpautop($post_content);

}

