<?php
/**
 * Blog Editor Addon For WordPress
 *
 * @package     LionHeart\BlogEditorAddon
 * @author      Chris Norman
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Blog Editor Addon
 * Plugin URI:  https://lionheartdevs.com
 * Description: This is a addon on to make editing and adding content to your blogs easier. From the blogs post_page you are using, you will be able to add content from a single point and that content will render on the screen - fully rendered. Current this plugin is for Genesis Framework.
 * Version:     1.0.0
 * Author:      Chris Norman
 * Author URI:  https://lionheartdevs.com
 * Text Domain: lionheart_blogeditoraddon
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace LionHeart\BlogEditorAddon ;

//security feature to make sure this plugin is running in a WordPress installation.
if(!defined('ABSPATH')){
    exit(' Error! Please try to use this plugin as intended. ');
}


//this require the file in question to be loaded. - if using composer. This helps autoload scripts for processing.
require_once(__DIR__ . '/assets/vendor/autoload.php');


