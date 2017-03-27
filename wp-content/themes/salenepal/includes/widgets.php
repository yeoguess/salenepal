<?php

function salenepal_widgets(){
    register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div class="widget-item">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="my-special-class">',
        'after_title'   => '</h4>'

        ));

    register_sidebar(array(
        'name'          => 'Footer 1',
        'id'            => 'footer1'
        ));

    register_sidebar(array(
        'name'          => 'Footer 2',
        'id'            => 'footer2' 
        ));

    register_sidebar(array(
        'name'          => 'Footer 3',
        'id'            => 'footer3',
         'before_widget' => '<div class="widget-item">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="my-special-class">',
        'after_title'   => '</h4>' 
        ));
}

?>