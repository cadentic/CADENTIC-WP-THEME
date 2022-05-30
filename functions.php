<?php
function cadentic_files () {


    /*wp_enqueue_script('cadentic_owl_carousel',get_theme_file_uri('js/owl.carousel.min.js', '1.0'), array('jquery'), time(), true );
    //wp_enqueue_script('cadentic_wow_carousel',get_theme_file_uri('js/wow.min.js', '1.0'), array(), time(), true );
   //   wp_register_script( 'wow', get_stylesheet_directory_uri() . '/js/wow.min.js' );
   // wp_enqueue_script('cadentic_jquery_carousel',get_theme_file_uri('js/jquery-multitabs.js', '1.0'), array('jquery'), time(), true );
    //wp_enqueue_script('cadentic_jquery1113_carousel',get_theme_file_uri('js/jquery-1.11.3.min.js', '1.0'), array('jquery'), time(), true );
   
    //wp_enqueue_script('cadentic_bootstrap_carousel',get_theme_file_uri('js/bootstrap.min.js'), array('jquery'), time(), true );
    
    wp_enqueue_style('cadentic_font_awesome','https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900', false);
    
    wp_enqueue_style('cadentic_font_popins','https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700', false);
    
    wp_enqueue_style('cadentic_font_confortaa','https://fonts.googleapis.com/css?family=Comfortaa:300,400,700|Josefin+Sans:100i,300,400,700|Raleway:100,200,300,400,500,600,700,800,900', false);
    
    wp_enqueue_style('cadentic_main_styles',get_stylesheet_uri(), false);
    
    wp_enqueue_style('cadentic_animate_styles',get_theme_file_uri('css/animate.css', '1.0'), false);
    wp_enqueue_style('cadentic_owl_styles',get_theme_file_uri('css/owl.theme.default.min.css', '1.0'), false);
    //wp_enqueue_style('cadentic_owlcarousel_styles',get_theme_file_uri('css/owl.carousel.min.css'), false);
    wp_enqueue_style('cadentic_bootstrap_theme_styles',get_theme_file_uri('css/bootstrap-theme.min.css', '1.0'), false);
    wp_enqueue_style('cadentic_jquery_styles',get_theme_file_uri('css/jquery-multitabs.css', '1.0'), false);
    wp_enqueue_style('cadentic_font_awesome_styles',get_theme_file_uri('css/font-awesome.min.css','1.0'), false);
    wp_enqueue_style('cadentic_main_css_styles',get_theme_file_uri('css/main.css','1.0'), false);
    

    wp_enqueue_style('cadentic_responsive_css_styles',get_theme_file_uri('responsive.css', '1.0'), false);
    
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', false);
    
    wp_enqueue_script( 'owl-js', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js',array('jquery'), time(), true );
    wp_enqueue_script( 'jq-js', 'https://code.jquery.com/jquery-3.5.0.js', array('jquery'), time(), true );
    wp_enqueue_style( 'wpdocs-datatables-bootstrap-style', 'https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css' );
    
   wp_enqueue_style( 'wpdocs-bootstrap-style', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' );
   wp_enqueue_style('wpdocs-bootstrap-style');
  // wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), '1.12.9', true);
   // wp_enqueue_script('popper');
    
    */
  


    
}
 if( !defined('THEME_IMG_PATH')){
   define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/images' );
  }

       if( !defined('THEME_JS_PATH')){
   define( 'THEME_JS_PATH', get_stylesheet_directory_uri() . '/js' );

        if( !defined('THEME_CSS_PATH')){
 define( 'THEME_CSS_PATH', get_stylesheet_directory_uri() . '/css' );
}

       if( !defined('THEME_MAIN_CSS_PATH')){
define( 'THEME_MAIN_CSS_PATH', get_stylesheet_directory_uri() );
}

      if( !defined('THEME_CRAFTED_PATH')){
define( 'THEME_CRAFTED_PATH', get_stylesheet_directory_uri() . '/CraftedImages');
}


  }

add_action('wp_enqueue_scripts','cadentic_files');
?>