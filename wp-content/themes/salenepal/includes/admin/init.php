<?php

function salenepal_admin_init(){
    include('enqueue.php');
    
    add_Action('admin_enqueue_scripts', 'salenepal_admin_enqueue');
}

?>