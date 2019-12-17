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

<body id="<?php is_front_page()? "homepage": "" ?>">
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
    </header>
    <main class="bg-light">
        <div class="home-banner">
            <div class="container">
                <h1>Contact Us</h1>

                <form id="contact-form" method="POST" action="/contact.php" role="form">

                    

                    <div class="controls">

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="form_name">Name</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your name *" required="required"
                                        data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="form_email">Email</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required"
                                        data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="form_email">Cell</label>
                                        <input id="form_email" type="tel" name="tel" class="form-control" placeholder="Please enter your cell number"
                                            data-error="Valid phone number is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                            </div>
                            <div class="col-12">
                                    <div class="form-group">
                                        <label for="form_email">Reason for contact</label>
                                        <input id="form_email" type="text" name="subject" class="form-control" placeholder="Reason for contact"
                                            data-error="Valid phone number is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Message</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="What do you need? *" rows="4" required="required"
                                        data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 messages"></div>
                            <div class="col-md-12">
                                <button type="submit" class="">Send message <i class="fas fa-arrow-right"></i></button>
                                
                            </div>
                        </div>
                    </div>

                </form>
            </div>

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