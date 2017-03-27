<?php get_header(); ?>

<!--breadcrumb start-->
<div class="breadcrumb-wrapper">
  <div class="container">
    <h1>Advertisement Detail</h1>
  </div>
</div>
<!--end breadcrumb-->

<div class="container">
    <?php custom_breadcrumbs(); ?>
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
        
        <div class="space-60"></div>
        <?php
          $userid = get_post_field( 'post_author',  get_queried_object_id() );
          $query = "SELECT * FROM wp_365register WHERE id = $userid";
          $user = $wpdb->get_results( $query );
        ?>
        <div class="seller-details">
          <h4 class="title"><a>Seller Details</a></h4>
            <p><strong>Name:</strong> <?php echo $user[0]->name?> </p>
            <p><strong>E-mail:</strong> <?php echo $user[0]->email; ?> </p>
            <?php if($user[0]->address) { ?>
            <p><strong>Adress:</strong> <?php echo $user[0]->address; ?> </p>
            <?php } ?>
            <p><strong>Mobile Number:</strong> <?php echo $user[0]->contact; ?> </p>   
        </div><!--End seller-details-->
      </div><!--End col-md-5-->
      
      <div class="col-md-7">

        <div class="product-detail-desc">
          <h3 class="title"><a><?php the_title(); ?></a></h3>
          <?php if (get_field('description')) { ?>
              <p><strong>Details:</strong> <?php the_field('description'); ?> </p>
              <?php } ?>
        </div><!--End product-detail-desc-->

        <div class="product-detail-desc">
          <h4 class="title"><a>Pricing Details</a></h4>
            <p><strong>Price:</strong> <?php the_field('price'); ?> </p>
          <?php if (get_field('price_negotiable')) { ?>
            <p><strong>Price Negotiable:</strong> <?php the_field('price_negotiable'); ?> </p>
          <?php } ?>
          <?php if (get_field('condition')) { ?>
            <p><strong>Condition:</strong> <?php the_field('condition'); ?> </p>
          <?php } ?>
          <?php if (get_field('used_for')) { ?>
            <p><strong>Used For:</strong> <?php the_field('used_for'); ?> </p>
          <?php } ?>
        </div><!--End product-detail-desc-->

      <?php if (get_field('features')) { ?>
        <div class="product-detail-desc">
          <h4><a>Item Specification</a></h4>
          <p><strong>Features:</strong> <?php the_field('features'); ?> </p>
        </div><!--End product-detail-desc-->
        <?php } ?>

      <?php if (get_field('delivery_area') || get_field('delivery_charges') || get_field('warrenty_type') || get_field('warrenty_period') || get_field('warrenty_includes')) { ?>
              <div class="product-detail-desc">
                    <h4><a>Delivery & Warranty Details</a></h4>
                    <?php if (get_field('home_delivery')) { ?>
                    <p><strong>Home Delivery:</strong> <?php the_field('home_delivery'); ?> </p>
                    <?php } ?>
                    <?php if (get_field('delivery_charges')) { ?>
                    <p><strong>Delivery Charges:</strong> <?php the_field('delivery_charges'); ?> </p>
                    <?php } ?>
                    <?php if (get_field('warrenty_type')) { ?>
                    <p><strong>Warrenty Type:</strong> <?php the_field('warrenty_type'); ?> </p>
                    <?php } ?>
                    <?php if (get_field('warrenty_period')) { ?>
                    <p><strong>Warrenty Period:</strong> <?php the_field('warrenty_period'); ?> </p>
                    <?php } ?>
                    <?php if (get_field('warrenty_includes')) { ?>
                    <p><strong>Warrenty Includes:</strong> <?php the_field('warrenty_includes'); ?> </p>
                    <?php } ?>
                    <?php if (get_field('delivery_area')) { ?>
                  <p><strong>Delivery Area:</strong> <?php the_field('delivery_area'); ?> </p>
                  <?php } ?>
              </div><!--End product-detail-desc-->
      <?php } ?>
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
  </div><!--End col-md-12-->



</div><!--End row-single product-->

  <div class="col-md-6">
    <section class="new-arrivals">
        <div class="container">
            <h2 class="section-heading">Ads By: <a><?php 
              if ($user[0]->name) 
                {
                  echo $user[0]->name; 
                } else
                { echo "Sales Nepal"; } ?></a></h2>
            
            <!--owl carousel-->
            <div class="row">
                <div id="owl-slider" class="col-md-12">
                    <?php $new = new WP_Query(array
                        (
                            'post_type' => 'product',
                            'posts_per_page' => '10',
                            'author' => $user[0]->id
                        ));
                      ?>
                    <?php
                    if ($new->have_posts() ) : while ($new->have_posts() ) : $new->the_post();

                    $img = get_field('upload_image');?>

                    <div class="item">
                        <div class="item_holder">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail');?></a>
                            <div class="title">
                                <h5><?php the_title(); ?></h5>
                                <span class="price"><?php echo get_field('price'); ?></span>
                            </div>
                        </div><!--item holder-->
                    </div> <!--item loop-->
                    
                    <?php endwhile; endif; wp_reset_query(); ?>
                </div><!--End owl slider-->
            </div><!--End row-->
        </div><!--End container-->
    </section><!--end new arrivals-->

  </div><!--End col-md-6-->

</div><!--End container-->

<?php get_footer(); ?>
