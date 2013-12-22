<?php 
define('AR_SIMPLE_SS_PLUGIN_URL', plugins_url());
$options = array(
	/*
     * 
     * General Settings Section
     * 
     */
	
    array(
        "type" => "section",
        "icon" => "acera-icon-home",
        "title" => "General Settings",
        "id" => "general",
        "expanded" => "true"
    ),
    
	    array(
	        "section" => "general",
	        "type" => "heading",
	        "title" => "Select Icons",
	        "id" => "general-visual"
	    ),
	    	array(
	        "under_section" => "general-visual",
	        "type" => "text",
	        "name" => "Title",
	        "display_checkbox_id" => "ar_title_show",
	        "default" => "Share on Social Networks",
	        "id" => "ar_title_id",
	        "desc" => "Put the title here.",),

			array(
		        "under_section" => "general-visual",
		        "type" => "select",
		        "name" => "Title Font",
		        "display_checkbox_id" => "ar_title_font_check",
		        "options" => array("Great Vibes", "PT Sans", "EB Garamond"), //Required
		        "default" => "Great Vibes",
		        "id" => "ar_title_font",
		        "desc" => "Select Font for Title",),

		    array(
		    "under_section" => "general-visual", //Required
		    "type" => "checkbox_image", //Required
		    "name" => "Icons", //Required
		    "show_labels" => "false",
		    "display_checkbox_id" => "toggle_checkbox_id",
		    "image_src" => array(
		    		AR_SIMPLE_SS_PLUGIN_URL . "/ar-simple-social-share/images/facebook.png",
		    		AR_SIMPLE_SS_PLUGIN_URL . "/ar-simple-social-share/images/twitter.png",
		    		AR_SIMPLE_SS_PLUGIN_URL . "/ar-simple-social-share/images/pinterest.png",
		    		AR_SIMPLE_SS_PLUGIN_URL . "/ar-simple-social-share/images/google_plus.png",
		    		AR_SIMPLE_SS_PLUGIN_URL . "/ar-simple-social-share/images/reddit.png",
		    		AR_SIMPLE_SS_PLUGIN_URL . "/ar-simple-social-share/images/stumbleupon.png"
		    		),
		    "image_size" => array("32"),
		    "id" => array("show_facebook", "show_twitter", "show_pinterest", "show_google_plus", "show_reddit", "show_stumbleupon"), //Required
		    "options" => array("Facebook", "Twitter", "Pinterest", "Google Plus", "Reddit", "StumbleUpon"), //Required
		    "desc" => "Select icons that you want to appear on Sharing popup. <br />Default : All Selected",
		    "default" => array("checked", "checked", "checked", "checked", "checked", "checked")),

	    

	    array(
	        "section" => "general",
	        "type" => "heading",
	        "title" => "Visiblity",
	        "id" => "general-general"
	    ),
	    
		    array(
			     "under_section" => "general-general",
				"type" => "checkbox",
				"name" => "<strong>Show Social Sharing On</strong>",
				"id" => array( "to_excerpt", "to_single", "to_page"),				
				"options" => array("Automatically show after Excerpt", "Automatically show after Content (Post)", "Automatically show after Content (Page)"),
			        "desc" => "Choose if you want the sharing option to show automatically after excerpt & content.",
				"default" => array("checked", "checked", "checked",)),
		    
	    
	    array(
	        "section" => "general",
	        "type" => "heading",
	        "title" => "Credits",
	        "id" => "general-credit"
	    ),
	    
	    array(
		    "under_section" => "general-credit",
			"type" => "checkbox",
			"name" => "",
			"id" => array(),				
			"options" => array(),
		        "desc" => "<h3>Ar Simple Social Share Plugin.</h3>
		        <p><strong>This plugin is brought to you by AR WP Themes.</strong><br />We are woring on Developing
		        more WordPress Themes & Plugins. Stay in touch :) <br /> Don't forget to visit our website
	    		Join our mailing list.<br />
	    		Website: <a href='http://arwpthemes.com'>www.arwpthemes.com</a><br />
	    		<br />
	    		We send occassional updates on many wordpress issues & also about our new products. You can 
	    		also subscribe to the list. We never spam.<br />
	    		<strong><a href='http://eepurl.com/EthR9' target='_blank'>Subscribe to our Newsletter.</a></strong>
		        </p>
		        <h2>Next Update!</h2><br />
		        <p>We will add more social networks in later versions. You can suggest some popular sites.
		        Simply send an email to mamb2b.awal@gmail.com</p>
		        <br />
		        <h1>Thank You <br /><br />
		        Ar WP Themes</h1>
		        ",
			"default" => array()),
    
    /*
     * 
     *  = General Settings Section
     * 
     */
    
    
    );

?>