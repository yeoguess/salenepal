<?php session_start();
/*
* Template Name: - Log Out
*/
get_header(); ?>

<?php session_destroy() ; 
    $url= get_site_url();
    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
?>