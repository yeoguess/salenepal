<?php 
/*
* Template Name: - Contact Us
*/
get_header(); ?>

<!--breadcrumb start-->
<div class="breadcrumb-wrapper">
    <div class="container">
        <h1>Get in touch!</h1>
    </div>
</div>
<!--end breadcrumb-->

<div class="space-60"></div>
    
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php while(have_posts()): the_post(); ?>
                <?php the_content();?>
            <?php endwhile ?>
            <?php get_template_part('content-form'); ?>
        </div><!--End col-md-6-->
    
        <div class="col-md-6">
            <?php echo ot_get_option('map_location')?>
            <div class="space-40"></div>
            <ul class="list-unstyled contact contact-info">
               <?php echo ot_get_option('contact_information')?>
            </ul>
        </div>
    </div><!--End row-->
</div><!--End Container-->

<?php get_footer(); ?>