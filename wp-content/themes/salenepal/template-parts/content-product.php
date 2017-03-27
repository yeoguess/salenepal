<div class="col-md-9">
  <?php 
    $products = new WP_Query(array(
              'post_type' => 'product',
              'posts_per_page' => '15'
  ));
  
  if($products->have_posts()) :
    while ($products->have_posts()) :
      $products->the_post();?>
      <div class="col-md-4" style="height:250px">
        <center>
          <?php the_post_thumbnail('thumbnail', array('class' => 'img-rounded') );?>
          <h5 style="padding:10px; font-weight: 700"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        </center>   
      </div><!--End col-md-3 col-md-12 col-xs-12-->
      <?php endwhile; endif; ?>

</div><!--End col-md-9-->