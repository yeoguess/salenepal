<?php get_header(); ?>

<!--breadcrumb start-->
<div class="breadcrumb-wrapper">
  <div class="container">
    <h1>Advertisement Detail</h1>
  </div>
</div>
<!--end breadcrumb-->

<div class="container">
    
<div class="space-60"></div>

<div class="row single-product">
  <div class="col-md-9">
    <div class="row">
      <div class="col-md-5 margin-b-30">
        <div id="product-single"  class="owl-carousel owl-theme single-product-slider">
          <div class="item">
            <?php the_post_thumbnail('thumbnail');?>                              
          </div><!--End item-->
        </div><!--End product-single-->
      </div><!--End col-md-5-->
      
       <div class="col-md-7">
        <div class="product-detail-desc">
          <h3 class="title"><a><?php the_title(); ?></a></h3>
              <p><strong>Details:</strong></p>
        </div><!--End product-detail-desc-->
        <div class="product-detail-desc">
        <h3 class="title"><a>Pricing Details</a></h3>
        <p><strong>Price:</strong> </p>
        
        </div>
        <div class="product-detail-desc">
        <h3><a>Item Specification</a></h3>
        <p><strong>Features:</strong> <?php the_field('features'); ?> </p>
        </div>
   
      </div><!--End col-md-7-->
    </div><!--row end-->
    
  <div class="space-40"></div>
  
  </div><!--End col-md-9-->
  
  <div class="col-md-3">
    <div class="sidebar-widget">
      <ul class="list-unstyled">
        <?php
                $terms = get_terms( 'product_category' );
                echo '<ul>';
                foreach ( $terms as $term ) {
                
                // The $term is an object, so we don't need to specify the $taxonomy.
                $term_link = get_term_link( $term );
    
                // If there was an error, continue to the next term.
                if ( is_wp_error( $term_link ) ) {
                    continue;
                }
             
                // We successfully got a link. Print it out.
                echo '<li><a href="' . esc_url( $term_link ) . '">' . $term->name . '</a></li>';
                }
                    echo '</ul>';
                ?>
      </ul>
    </div><!--sidebar-widget end-->
  </div><!--sidebar col-->
  
  <div class="col-md-12">
    <nav class="text-center">
      <ul class="pagination">
        <li>
          <?php previous_post_link('%link', '<i class="fa fa-chevron-left"></i> %title') ; ?>
        </li>
        <li>
          <?php next_post_link('%link', '%title <i class="fa fa-chevron-right"></i>' ) ; ?>
        </li>
      </ul>
    </nav>
  </div>
  
 
</div><!--End row-single product-->
</div><!--End container-->

<?php get_footer(); ?>
