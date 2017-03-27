<div class="footer-bottom" >
  <div class="container text-center">
      <img src="<?php bloginfo('template_url')?>/assets/images/logo.jpg" alt="">
        <ul class="list-inline">
          <li>
            <?php
              wp_nav_menu( array(
                'menu'              => 'secondary',
                'theme_location'    => 'secondary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
              );
            ?>
          </li>
        </ul>
        <span class="copyright">&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></span>
  </div><!--End container text-center-->
</div><!--End Footer Bottom-->

<?php wp_footer(); ?>

<script>
            /******************************************
             -  PREPARE PLACEHOLDER FOR SLIDER  -
             ******************************************/

            var revapi;
            jQuery(document).ready(function () {
                revapi = jQuery("#rev_slider").revolution({
                    sliderType: "standard",
                    sliderLayout: "auto",
                    delay: 9000,
                    navigation: {
                        arrows: {enable: true}
                    },
                    gridwidth: 1230,
                    gridheight: 500
                });
            }); /*ready*/
</script>