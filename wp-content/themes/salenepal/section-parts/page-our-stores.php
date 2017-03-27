<?php 
/*
* Template Name: - FAQ's
*/
get_header(); ?>

<!--breadcrumb start-->
<div class="breadcrumb-wrapper">
    <div class="container">
        <h1>FAQ's</h1>
    </div>
</div>
<!--end breadcrumb-->

<div class="space-60"></div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php while(have_posts()): the_post(); ?>
                <?php the_content();?>
            <?php endwhile ?>
        </div>
    </div><!--End row-->
</div><!--End Container-->

<?php get_footer(); ?>