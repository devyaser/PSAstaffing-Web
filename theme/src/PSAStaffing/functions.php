<?php

function reg_scripts() {
    wp_enqueue_style( 'bootstrapstyle', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'main_stylesheet', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'custom_style', get_template_directory_uri() . '/assets/style.css' );
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), true );
}
add_action('wp_enqueue_scripts', 'reg_scripts');

function add_custom_fonts() {
    // Enqueue the main stylesheet
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri());

    // Define the font face CSS for different weights
    $font_face_css = '
    @font-face {
        font-family: "Gabarito";
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url("' . get_template_directory_uri() . '/assets/fonts/Gabarito.woff2") format(\'woff2\');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: "Gabarito";
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: url("' . get_template_directory_uri() . '/assets/fonts/Gabarito-500.woff2") format(\'woff2\');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: "Gabarito";
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: url("' . get_template_directory_uri() . '/assets/fonts/Gabarito-600.woff2") format(\'woff2\');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
	@font-face {
		  font-family: "Gabarito";
		  font-style: normal;
		  font-weight: 700;
		  font-display: swap;
		  src: url("' . get_template_directory_uri() . '/assets/fonts/Gabarito-700.woff2") format(\'woff2\');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
	@font-face {
	  font-family: "Gabarito";
	  font-style: normal;
	  font-weight: 800;
	  font-display: swap;
	  src: url("' . get_template_directory_uri() . '/assets/fonts/Gabarito-800.woff2") format(\'woff2\');
	  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
	@font-face {
	  font-family: "Gabarito";
	  font-style: normal;
	  font-weight: 900;
	  font-display: swap;
	  src: url("' . get_template_directory_uri() . '/assets/fonts/Gabarito-900.woff2") format(\'woff2\');
	  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
	}

    // Add more font-face declarations for other weights...

    ';

    // Add the font face CSS inline
    wp_add_inline_style('main-stylesheet', $font_face_css);
}

// Hook the function to the wp_enqueue_scripts action
add_action('wp_enqueue_scripts', 'add_custom_fonts');


//

function enqueue_custom_scripts() {
    wp_enqueue_script('jquery');
}

function custom_scripts_footer() {
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/js/custom-scripts.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
add_action('wp_footer', 'custom_scripts_footer');


?>

