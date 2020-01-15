<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title() . ' | ' . bloginfo('name'); ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/safari-pinned-tab.svg" color="#ababab">
    <meta name="google-site-verification" content="EgFwV_6nnyFcLp7Pgzxi9ZQukwTmygZH8s68ySsIpC8" />
    <meta name="msapplication-TileColor" content="#660066">
    <?php wp_head(); ?>
</head>

<body id="<?php if(is_front_page()) { echo "homepage"; } ?>">
    <header>

        <nav class="navbar navbar-expand-md navbar-fixed-top bg-nav">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="MACCTI Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <!-- <li class="nav-item active">
                            <a class="nav-link" href="#">What You Learn</a>
                        </li> -->
                        <?php if(is_front_page()) { 
                            ?>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#courses">Courses</a>
                            </li>
                        <?php
                         } else {
                             ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                             <?php
                         } ?>
                        
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">What You Need</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        <?php 
                            if(is_user_logged_in()) {
                                $user = wp_get_current_user();
                            ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <h6 class="dropdown-item text-gray">Hello, <?php echo $user->user_firstname; ?>!</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/my-account/">My Account</a>
                            <a class="dropdown-item" href="/eb-my-courses/">My Courses</a>
                            <a class="dropdown-item" href="/my-account/customer-logout/">Log out</a>
                            </div>
                        </li> <?php
                        } else {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/my-account/">Log In</a>
                            </li>
                            <?php
                        }?>
                    </ul>
                </div>
            </div>

        </nav>
        <?php if(is_front_page()) {
            ?>
            <div class="main-banner">
            <div class="overlay container">
                <div class="overlay-contents">
                    <h3><?php bloginfo('description'); ?></h3>
                    <!-- <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/watch-the-demo.png" alt="Button"> -->
                </div>

            </div>
        </div>
        <?php
        } ?>
    </header>