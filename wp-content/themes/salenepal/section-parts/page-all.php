<?php
/*
*Template Name: - All Classifieds
 */
get_header();
?>

<!--breadcrumb start-->
<div class="breadcrumb-wrapper">
    <div class="container">
        <h1>All Classifieds</h1>
    </div>
</div>
<!--end breadcrumb-->

<!--Main Content-->
<div class="container">
  <div class="auto-container">
    <div class="clearfix">
      <div class="space-60"></div>
      
      <?php 
        $ourCurrentpage = get_query_var('paged');
        $products = new WP_Query(array(
          'post_type' => 'product',
          'posts_per_page' => '16',
          'paged' => $ourCurrentpage
        ));
        
        if($products->have_posts()) :
          while ($products->have_posts()) :
            $products->the_post();?>
        
        <div class="col-md-3" style="height:250px">
          <center><?php the_post_thumbnail('thumbnail', array('class' => 'img-rounded') );?>
            <h5 style="padding:10px; font-weight: 700"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5></center>   
        </div><!--End col-md-3 col-md-12 col-xs-12-->
        
        <?php endwhile;
        
        echo paginate_links(array(
          'total' => $products->max_num_pages
          ));
        
        endif;
        ?>
    </div><!--End row clearfix-->

  </div><!--End auto-container-->
</div><!--End Main-->

<?php get_footer(); ?>