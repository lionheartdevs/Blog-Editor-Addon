<?php



namespace LionHeart\BlogEditorAddon\SRC\ADMIN;

add_action('edit_form_after_title', __NAMESPACE__ . '\enable_blog_page_editor');
/**
 * @param
 */
//we get the page_for_posts ID - this would be the page that is registered as the 'blog page'.
//If you are on the blog page, then add an editor.
function enable_blog_page_editor($post){
	if(get_option('page_for_posts') == $post->ID){
		add_post_type_support('page', 'editor');
	}}
