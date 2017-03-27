<?php

function salenepal_admin_menu(){
    add_menu_page(
        'SaleNepal Theme Options',
        'Theme Options',
        'edit_theme_options',
        'salenepal_theme_opts',
        'salenepal_theme_opts_page'

    );
}



?>