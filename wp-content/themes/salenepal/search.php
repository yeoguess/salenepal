<?php

get_header();

if (have_posts()) : ?>

<?php
    while (have_posts()) : the_post(); ?>
        <div class="container">
            <h3>Search results for: <?php the_search_query(); ?></h3>
            
            <!-- post-thumbnail -->
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
            </div>
            <!-- /post-thumbnail -->

            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <p class="post-info"><?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in

            <?php

            $categories = get_the_category();
            $separator = ", ";
            $output = '';

            if ($categories) {
                foreach ($categories as $category) {
                    $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;
                }
                echo trim($output, $separator);
                }
                ?>
            </p>

</div>

<?php endwhile;

else :

    echo '<p>No content found</p>';

endif;

get_footer();

?>
