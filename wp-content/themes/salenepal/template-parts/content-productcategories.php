<!--popular products-->
<section class="featured-products">
    <div class="container">

        <div class="hd-search">
        <?php get_search_form(); ?>
        </div>
    
        <h2 class="section-heading">Categories</h2>
        
        <div class="row">
            <div class="col-sm-3">        
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
            </div>
        
            <?php get_template_part('template-parts/content-product'); ?>
        
        </div><!--row-->
    </div><!--End container-->
</section><!--end Popular products-->