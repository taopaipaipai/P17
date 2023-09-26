<?php 

// Désenregistrer le script du thème parent le 20/07/2023 21:15:03
function disable_font_parent_theme_script() {	

  wp_deregister_style( 'ashe-playfair-font', ashe_playfair_font_url(), array(), '1.0.0' );
  wp_deregister_style( 'ashe-opensans-font', ashe_opensans_font_url(), array(), '1.0.0' );

  // Load Kalam if selected
  if ( ashe_options( 'typography_logo_family' ) == 'Kalam' || ashe_options( 'typography_nav_family' ) == 'Kalam' ) {
  	wp_deregister_style( 'ashe-kalam-font', ashe_kalam_font_url(), array(), '1.0.0' );
  }

  // Load Rokkitt if selected
  if ( ashe_options( 'typography_logo_family' ) == 'Rokkitt' || ashe_options( 'typography_nav_family' ) == 'Rokkitt' ) {
  	wp_deregister_style( 'ashe-rokkitt-font', ashe_rokkitt_font_url(), array(), '1.0.0' );
  }
}

add_action('wp_enqueue_scripts', 'disable_font_parent_theme_script',11);

function desactivation_fontello_scripts() {

	// Fontello Icons
	wp_dequeue_style( 'fontello', get_theme_file_uri( '/assets/css/fontello.css' ) );
	wp_deregister_style( 'fontello', get_theme_file_uri( '/assets/css/fontello.css' ) );

}

add_action('wp_enqueue_scripts', 'desactivation_fontello_scripts',11);

// on charge de nouveau la font Fontello mais cette fois ci dans le theme enfant --> elle est charger dans le fichier theme.css du theme enfant

function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );


// ceci est commentaire
