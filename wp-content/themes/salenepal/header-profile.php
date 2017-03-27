<?php session_start(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
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
    <header class="header">

        <!--main navigation start-->
        <nav class="navbar navbar-default navbar-static-top yamm sticky">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
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
                            </ul>
                        </div><!--end navbar header-->
                        <header id="header">
                              <div class="container">
                                <div class="row">
                                  <div class="col-md-10">
                                    <!--breadcrumb start-->
                                    <div class="breadcrumb-wrapper">
                                        <div class="container">
                                            <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Welcome, <?php echo $_SESSION['name']; ?> </h1>
                                        </div>
                                    </div>
                                    <!--end breadcrumb-->
                                  </div>
                                </div>
                              </div>
                        </header>
                </div><!--end container-->
        </nav><!--main navigation end-->
        
    </header><!--header end-->

