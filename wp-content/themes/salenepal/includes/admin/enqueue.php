<?php

function salenepal_admin_enqueue(){
    if(!isset($_GET['page']) || $_GET['page'] != "salenepal_theme_opts"){
        return;
    }
    
    wp_register_style ('salenepal_bootstrap' , get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style ('salenepal_bootstrap');
    
    wp_register_script ('salenepal_custom' ,  get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), false, true);
    wp_enqueue_script( 'salenepal_custom');
}

?>