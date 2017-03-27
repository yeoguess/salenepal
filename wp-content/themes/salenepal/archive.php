<?php get_header();?>

<!--breadcrumb start-->
<div class="breadcrumb-wrapper">
    <div class="container">
        <h1>Advertisements Grid</h1>
    </div>
</div>
<!--end breadcrumb-->
<div class="container">
    
    <div class="breadcrumb">
        <?php custom_breadcrumbs(); ?>
    </div>
    
    <div class="col-md-9">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="col-md-4" style="height:350px">
                <div class="item_holder">
                    <?php the_post_thumbnail('thumbnail');?>
                        <div class="title">
                            <h5><strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong></h5>
                            Price: <span><?php the_field('price'); ?></span>
                        </div><!--End title-->
                </div><!--End item holder-->
            </div><!--End col-md-4-->
        <?php endwhile; ?>
    </div><!--End col md 9-->

    <?php
        $terms = get_terms( 'product_category' );
    ?>
    
    <div class="col-md-3">
        <div class="sidebar-widget">
            <h3>Categories</h3>
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
    </div><!--end col-md-3-->

</div><!--end container-->

<?php get_footer(); ?>


