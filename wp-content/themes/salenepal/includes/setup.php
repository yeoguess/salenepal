<?php

function salenepal_setup_theme(){
    register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'secondary' => __('Secondary Menu'),
    ));
}

?>