<!--slider revolution 5 start-->
<article class="content">
    <div class="rev_slider_wrapper">
        <!-- START REVOLUTION SLIDER 5.0 auto mode -->
        <div id="rev_slider" class="rev_slider"  data-version="5.0">
            <ul>
                <?php $slide = new WP_Query(array
                    (
                        'post_type' => 'slideshow',
                        'posts_per_page' => '10',
                        'order' => 'ASC'
                    ));

                    if ($slide->have_posts() ) : while ($slide->have_posts() ) : $slide->the_post();

                    $img = get_field('upload_image');?>

                    <!-- SLIDE  -->
                    <li data-transition="fade">
                    <!-- MAIN IMAGE -->
                    <img src="<?php echo $img['url']?>" alt=""  width="1920" height="600">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption slider-title tp-resizeme"
                        data-transform_idle="o:1;"
                        data-x="center" data-hoffset="0"
                        data-y="top" data-voffset="200"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="500"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        <?php the_title(); ?>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption slider-caption tp-resizeme"
                        data-transform_idle="o:1;"
                        data-x="center" data-hoffset="0"
                        data-y="top" data-voffset="280"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="800"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        <?php echo get_field('secondary_title'); ?>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption slider-button tp-resizeme"
                        data-transform_idle="o:1;"
                        data-x="center" data-hoffset="0"
                        data-y="top" data-voffset="320"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="1200"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        <a href="#"><?php echo get_field('button'); ?></a>
                    </div>
                    </li>

                <?php endwhile; endif; wp_reset_query(); ?>
            </ul>
        </div><!-- END REVOLUTION SLIDER -->
    </div><!--End Revolution Slider Wrapper-->
</article><!--slider revolution 5 end-->