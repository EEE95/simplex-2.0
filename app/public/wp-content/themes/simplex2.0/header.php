<?php
/**
 * The Header for our theme.
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>
        <header id="header" class="header fixed-top" data-scrollto-offset="0">
            <div class="header-container">
                <a href="index.php" class="logo align-items-center scrollto">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo-text">
                    <h1>Simplex<span></span></h1>
                </a>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto" href="index.php#hero">Home</a></li>
                        <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
                        <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li class="dropdown"><a href="#"><span>Drop Down</span><i class="chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Drop Down 1</a></li>
                                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="chevron-down dropdown-indicator"></i></a> 
                                    <ul>
                                        <li><a href="#">Deep Drop Down 1</a></li>
                                        <li><a href="#">Deep Drop Down 2</a></li>
                                        <li><a href="#">Deep Drop Down 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Drop Down 2</a></li>
                                <li><a href="#">Drop Down 3</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php#contact" class="nav-link scrollto">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle"></i>
                </nav>

            </div>
        </header>
      