<?php
/*
Plugin Name: Rivermouth Banners
Plugin URI:  http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Custom post type for banners
Version:     0.1
Author:      Rivermouth Ltd
Author URI:  http://rivermouth.fi
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: rivermouth-post-banner
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

class Rvrmth_PostBanner
{

	public function __construct()
	{
		add_action('init', array($this, 'create_post_type_banner'));
	}

	public function create_post_type_banner()
	{
		register_post_type('banner', array(
			'labels' => array(
				'name' => __( 'Banners', 'rivermouth-post-banner' ),
				'singular_name' => __( 'Banner', 'rivermouth-post-banner' )
			),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-slides',
			'menu_position' => 20,
			'supports' => array('title', 'editor', 'thumbnail', 'post-formats')
		));
	}

}

new Rvrmth_PostBanner();

?>
