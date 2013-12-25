<?php 
/*
Plugin Name: Ar Simple Social Share
Description: Add a group of simple dropdown social sharing buttons on your wordpress website
Plugin URI: http://arwpthemes.com/plugins/ar-simple-social-share
Author: AR WP Themes
Author URI: http://arwpthemes.com 
Version: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
include_once 'ar-framework/options-init.php';
define('PLUGIN_NAME','Ar Simple Social Share');
define('PLUGIN_DIR', 'ar-simple-social-share');
define('IMG_DIR', 'ar-simple-social-share/images');

// Add Scripts to header

function uzzal_head_materials(){
	$css_dir = plugins_url()."/".PLUGIN_DIR."/css";
	echo "<link href='$css_dir/ar-style.css' rel='stylesheet' />";
	echo "<link href='http://fonts.googleapis.com/css?family=PT+Sans|Great+Vibes|EB+Garamond' rel='stylesheet' type='text/css'>";
}
add_action('wp_head', 'uzzal_head_materials');

	// Function with sharing links

	function ar_simple_social_share($content){
		$img_url     =  plugins_url()."/".IMG_DIR;
		$share_url   =  get_permalink();
		$share_title =  get_the_title();
		$content .= '<div class="ar_share_wrapper" style="font-family: '.get_option('ar_title_font', 'Great Vibes').'">
						<ul>
							<li>'.get_option("ar_title_id", "Share on Social Netwrorks.").'
								<ul class="share">';
								if(get_option('show_facebook', 'true') == "true"){
									$content .= 	'<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$share_url.'"><img src="'.$img_url.'/facebook.png" /></a></li>';
								}
								if(get_option('show_twitter', 'true') == "true"){
									$content .=    '<li><a target="_blank" href="https://twitter.com/intent/tweet?url='.$share_url.'&text='.$share_title.'"><img src="'.$img_url.'/twitter.png" /></a></li>';
								}
								if(get_option('show_pinterest', 'true') == "true"){
									$content .=		'<li><a target="_blank" href="http://pinterest.com/pin/create/button/?url='.$share_url.'"><img src="'.$img_url.'/pinterest.png" /></a></li>';
								}
								if(get_option('show_google_plus', 'true') == "true"){
									$content .= 	'<li><a target="_blank" href="https://plus.google.com/share?url='.$share_url.'"><img src="'.$img_url.'/google_plus.png" /></a></li>';
								}
								if(get_option('show_reddit', 'true') == "true"){
									$content .= 	'<li><a target="_blank" href="http://www.reddit.com/submit?url='.$share_url.'"><img src="'.$img_url.'/reddit.png" /></a></li>';
								}
								if(get_option('show_stumbleupon', 'true') == "true"){
									$content .= 	'<li><a target="_blank" href="http://www.stumbleupon.com/submit?url='.$share_url.'"><img src="'.$img_url.'/stumbleupon.png" /></a></li>';
								}
								$content .=  '</ul>
							</li>
						</ul>
					</div><!--/.ar_share_wrapper-->
					<div class="clear"></div>';
				return $content;					
	}	
	if(get_option('to_excerpt', 'true') == "true"){
		add_filter('excerpt_more', 'ar_simple_social_share');
	}
	function include_in_post_content(){
		if(get_option('to_single', 'true') == "true"){
			if(is_single()){
				add_filter('the_content', 'ar_simple_social_share');
				} else {
					echo '';
				}
			}
	}

	add_action('template_redirect','include_in_post_content');

	function include_in_page_content(){
		if(get_option('to_page', 'true') == "true"){
			if(is_page()){
				add_filter('the_content', 'ar_simple_social_share');
				} else {
					echo '';
				}
			}
	}

	add_action('template_redirect','include_in_page_content');

	// Create The Shortcode
	add_shortcode('ar-simple-social-share', 'ar_simple_social_share');

?>