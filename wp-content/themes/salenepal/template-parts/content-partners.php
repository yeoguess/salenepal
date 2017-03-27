 <!--partners-->
<section class="partners">
    <div class='container'>
        <h2 class="section-heading">Our Partners</h2>
        <div class="row">
            <div id="owl-partners" class="col-md-12">
                <?php $partner = new WP_Query(array
                    (
                        'post_type' => 'partners',
                        'posts_per_page' => '10',
                        'order' => 'ASC'
                    ));
                
                if ($partner->have_posts() ) : while ($partner->have_posts() ) : $partner->the_post();

                $img = get_field('upload_image');?>

                <div class="item">
                    <img src="<?php echo $img['url']?>" alt="parner" class="img-responsive">
                </div>
                
                <?php endwhile; endif; wp_reset_query(); ?>
            </div><!--End owl-partners-->
        </div><!--End row-->
    </div><!--End container-->
</section><!--end partners-->