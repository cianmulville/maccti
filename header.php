<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/safari-pinned-tab.svg" color="#ababab">
    <meta name="google-site-verification" content="EgFwV_6nnyFcLp7Pgzxi9ZQukwTmygZH8s68ySsIpC8" />
    <meta name="msapplication-TileColor" content="#660066">
    <link rel="stylesheet" href="https://use.typekit.net/twt3hey.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
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
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#courses">Courses</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">What You Need</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
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