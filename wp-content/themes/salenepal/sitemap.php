<?php
/*
Template Name: Sitemap
*/
?>;


<script type="text/javascript">
$(document).ready(function () {
     
    $('#toggle-view li').click(function () {
 
        var text = $(this).children('div.panel');
 
        if (text.is(':hidden')) {
            text.slideDown('200');
            $(this).children('span').html('-');    
        } else {
            text.slideUp('200');
            $(this).children('span').html('+');    
        }
         
    });
});
</script>



<li>
<h2>POSTTYPENAME</h2>
<span>+</span>
<div class="panel">
<ul>
<?php
$myposts = get_posts('numberposts=-1&amp;post_type=POSTTYPENAME&amp;offset='.$debut);
foreach($myposts as $post) :
?>
<li class="sitemap"><?php the_time('d/m/y') ?>: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>
</div>
</li>
