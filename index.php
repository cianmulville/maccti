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

<body id="homepage">
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
        <div class="main-banner">
            <div class="overlay container">
                <div class="overlay-contents">
                    <h3><?php bloginfo('description'); ?></h3>
                    <!-- <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/watch-the-demo.png" alt="Button"> -->
                </div>

            </div>
        </div>
    </header>
    <main>
        
        <div class="home-banner bg-light">
            <?php if(have_posts()) {
                while(have_posts()) {
                    the_post();
                    the_content();
                }
            } ?>

        </div>
    </main>
    <footer>
        <div class="footer-banner">
            <p>Follow our posts at:
                <i class="fab fa-twitter"></i>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-instagram"></i>
            </p>
        </div>
        <!-- <div class="maccti-flex-row justify-content-center pt-50 payment-info">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/SSL.png" alt="SSL">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/betalen-met-paypal-vloerkledenwebshopnl.png" alt="Paypal">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/credit_card_logos-2010-horiz1_copy.png" alt="Credit cards">
        </div> -->
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</body>

</html>