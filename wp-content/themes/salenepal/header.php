<?php session_start(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    </body>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <title>
          <?php bloginfo('name'); ?> |
          <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
        </title>

        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <?php wp_head(); ?>
    </head>
       
    <!--header start-->
    <hea4der class="header">
        <!--top bar-->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <ul class="list-inline">
                            <?php if($_SESSION['id']) { ?>
                                <span style="margin-left:85%;margin-top:35px;position:absolute;z-index: 999999;"><a style="color:white!important" class="btn btn-danger post-ad" href="<?php echo get_site_url() . '/' . '/profile' ?>">My Profile</a></span>
                            <?php } else { ?>
                                <span style="margin-left:85%;margin-top:35px;position:absolute;z-index: 999999;"><a style="color:white!important" class="btn btn-danger post-ad" href="<?php echo get_site_url() . '/' . '/register' ?>"> <i class="fa fa-registered"></i>Register </a></li></span>
                                <span style="margin-left:95%;margin-top:35px;position:absolute;z-index: 999999;"><a style="color:white!important" class="btn btn-info post-ad" href="<?php echo get_site_url() . '/' . '/login' ?>""><i class="fa fa-sign-in"></i> Login </a></span>
                            <?php } ?>
                        </ul>
                    </div><!--End col-sm-12-->
                </div><!--end row-->
            </div><!--end container-->
        </div><!--top bar end-->

        <!--main navigation start-->
        <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-static-top yamm sticky">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div><!--/.nav-collapse -->
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown-toggle js-activated" data-toggle="dropdown">
                            <?php
                                wp_nav_menu( array(
                                    'menu'              => 'primary',
                                    'theme_location'    => 'primary',
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
                </div><!--end navbar header-->
            </div><!--end container-->
        </nav><!--main navigation end-->
    </header><!--header end-->
</body>
</html>