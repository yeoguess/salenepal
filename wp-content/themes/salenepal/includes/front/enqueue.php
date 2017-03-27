<?php
    
    function salenepal_enqueue() {
    
    wp_register_style ('salenepal_bootstrap' , get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_register_style ('salenepal_stylesheet' , get_template_directory_uri() . '/assets/css/style.css');
    wp_register_style ('salenepal_flexslider' , get_template_directory_uri() . '/assets/css/flexslider.css');
    wp_register_style ('salenepal_font-awesome' , get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_register_style ('salenepal_jquery-custom' , get_template_directory_uri() . '/assets/css/jquery.mCustomScrollbar.css');
    wp_register_style ('salenepal_lightbox' , get_template_directory_uri() . '/assets/css/lightbox.css');
    wp_register_style ('salenepal_layers' , get_template_directory_uri() . '/assets/css/layers.css');
    wp_register_style ('salenepal_navigation' , get_template_directory_uri() . '/assets/css/navigation.css');
    wp_register_style ('salenepal_owl.carousel' , get_template_directory_uri() . '/assets/css/owl.carousel.css');
    wp_register_style ('salenepal_owl.theme' , get_template_directory_uri() . '/assets/css/owl.theme.css');
    wp_register_style ('salenepal_owl.transitions' , get_template_directory_uri() . '/assets/css/owl.transitions.css');
    wp_register_style ('salenepal_peicon' , get_template_directory_uri() . '/assets/css/Pe-icon-7-stroke.css');
    wp_register_style ('salenepal_settings' , get_template_directory_uri() . '/assets/css/settings.css');
    wp_register_style ('salenepal_sky-forms' , get_template_directory_uri() . '/assets/css/sky-forms.css');
    wp_register_style ('salenepal_yamm' , get_template_directory_uri() . '/assets/css/yamm.css');
    
    wp_enqueue_style ('salenepal_bootstrap');
    wp_enqueue_style ('salenepal_stylesheet');
    wp_enqueue_style ('salenepal_flexslider');
    wp_enqueue_style ('salenepal_font-awesome');
    wp_enqueue_style ('salenepal_jquery-custom');
    wp_enqueue_style ('salenepal_lightbox');
    wp_enqueue_style ('salenepal_layers');
    wp_enqueue_style ('salenepal_navigation');
    wp_enqueue_style ('salenepal_owl.carousel');
    wp_enqueue_style ('salenepal_owl.theme');
    wp_enqueue_style ('salenepal_owl.transitions');
    wp_enqueue_style ('salenepal_peicon');
    wp_enqueue_style ('salenepal_settings');
    wp_enqueue_style ( 'salenepal_sky-forms' );
    wp_enqueue_style ('salenepal_yamm');
    
    wp_register_script ('salenepal_jquery.min' ,  get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), '', true);
    wp_register_script ('salenepal_jquery-migrate' ,  get_template_directory_uri() . '/assets/js/jquery-migrate.min.js', array('jquery'), '', true);
    wp_register_script ('salenepal_jquery.easing' ,  get_template_directory_uri() . '/assets/js/jquery.easing.1.3.min.js', array('jquery'), '', true);
    wp_register_script ('salenepal_bootstrap' ,  get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true);
    wp_register_script ('salenepal_jquery.sticky' ,  get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery'), '', true);
    wp_register_script ('salenepal_bootstrap-hover' ,  get_template_directory_uri() . '/assets/js/bootstrap-hover-dropdown.min.js', array('jquery'), '', true);
    wp_register_script ('salenepal_jquery.mousewheel' ,  get_template_directory_uri() . '/assets/js/jquery.mousewheel.min.js', array('jquery'), '', true);
    wp_register_script ('salenepal_jquery-mCustomScrollbar' ,  get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'), '', true);
    wp_register_script ('salenepal_jquery.flexslider' ,  get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array('jquery'), '', true);
    wp_register_script ('salenepal_owl' ,  get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '', true);
    wp_register_script ('salenepal_tweetie' ,  get_template_directory_uri() . '/assets/js/tweetie.min.js', array('jquery'), '', true);
    wp_register_script ('salenepal_custom' ,  get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '', true);
    wp_register_script ('salenepal_jquery.themepunch.revolution' ,  get_template_directory_uri() . '/assets/js/jquery.themepunch.revolution.min.js', array('jquery'), '', true);
    wp_register_script ('salenepal_jquery.themepunch.tools' ,  get_template_directory_uri() . '/assets/js/jquery.themepunch.tools.min.js', array('jquery'), '', true);
    wp_register_script ('salenepal_revolution.slideanims' ,  get_template_directory_uri() . '/assets/js/revolution.extension.slideanims.min.js', array('jquery'), '', true);
    wp_register_script ('salenepal_revolution.layeranimation' ,  get_template_directory_uri() . '/assets/js/revolution.extension.layeranimation.min.js', array('jquery'), '', true);
    wp_register_script ('salenepal_revolution.navigation' ,  get_template_directory_uri() . '/assets/js/revolution.extension.navigation.min.js', array('jquery'), '', true);
    wp_register_script ('salenepal_elevatezoom' ,  get_template_directory_uri() . '/assets/js/jquery.elevatezoom.js', array('jquery'), '', true);
   

    wp_enqueue_script( 'salenepal_jquery.min');
    wp_enqueue_script( 'salenepal_jquery-migrate');
    wp_enqueue_script( 'salenepal_jquery.easing');
    wp_enqueue_script( 'salenepal_bootstrap');
    wp_enqueue_script( 'salenepal_jquery.sticky');
    wp_enqueue_script( 'salenepal_bootstrap-hover');
    wp_enqueue_script( 'salenepal_jquery.mousewheel');
    wp_enqueue_script( 'salenepal_jquery-mCustomScrollbar');
    wp_enqueue_script( 'salenepal_jquery.flexslider');
    wp_enqueue_script( 'salenepal_owl');
    wp_enqueue_script( 'salenepal_tweetie');
    wp_enqueue_script( 'salenepal_custom');
    wp_enqueue_script( 'salenepal_jquery.themepunch.revolution');
    wp_enqueue_script( 'salenepal_jquery.themepunch.tools');
    wp_enqueue_script( 'salenepal_revolution.slideanims');
    wp_enqueue_script( 'salenepal_revolution.layeranimation');
    wp_enqueue_script( 'salenepal_revolution.navigation');
    wp_enqueue_script( 'salenepal_elevatezoom');
    }

?>