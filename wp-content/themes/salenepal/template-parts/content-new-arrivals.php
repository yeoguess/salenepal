 <!--New Arrivals-->
<section class="new-arrivals">
    <div class="container">
        <h2 class="section-heading">Latest Posts</h2>
        
        <!--owl carousel-->
        <div class="row">
            <div id="owl-slider" class="col-md-12">
                <?php $new = new WP_Query(array
                    (
                        'post_type' => 'product',
                        'posts_per_page' => '10',
                        'order' => 'DSC'
                    ));

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
