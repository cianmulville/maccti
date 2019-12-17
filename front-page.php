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
            <div class="container">
                <p class="lead">
                    The premier learning service for cannabis compliance training. MACCTI courses have been designed by experts for employers
                    and employees in the regulated cannabis industry to give you the real-world information you need - quickly
                    and comprehensively.
                </p>
            </div>

        </div>
        <div class="home-banner-boxed">
            <div class="box left-box green first">
                <div class="container">
                    <p>
                        For employees: Affordable and flexible, MACCTI’s world-class online training allows you to study anywhere anytime, and quickly
                        gain certification to advance your career. Our interactive and engaging programs offer the full range
                        of user accessibility options to support the success of all participants.
                    </p>
                </div>

            </div>
            <div class="box right-box first">
                <div class="overlay">

                </div>
            </div>
            <div class="box left-box second">
                <div class="overlay">

                </div>
            </div>
            <div class="box right-box purple second">
                <div class="container">
                    <p>
                        For employers:  MACCTI training ensures that all persons operating within the regulated cannabis industry are fully aware
                        of the legal framework; their roles and responsibilities and the importance of compliance with the
                        regulations. Protect your business from potential risks and liabilities by enrolling all your staff
                        now. Our courses allow  flexibility and guarantee that you meet your obligations.
                    </p>
                </div>

            </div>
        </div>
        <div class="home-banner bg-light">
            <div class="container">
                <p class="lead">
                    At MACCTI, our mission is to deliver accessible, world-class training to all participants in the industry to ensure the highest
                    possible standards of integrity, responsible usage, public safety requirements and compliance with the
                    law.
                </p>
                <br></br>
                <p class="lead">
                    Designed and delivered by industry professionals working in collaboration with legal and insurance experts, law enforcement,
                    health professionals and the highest trained elite &amp; special forces operators.
                </p>
            </div>

        </div>
        <div class="home-banner bg-white maccti-flex-row">
            <div class="col-half text-center">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/screenshot.png" alt="MACCTI iPad screenshot">
            </div>
            <div class="col-half" id="what-you-learn">
                <h5 class="text-dark">What you will learn:</h5>
                <ul class="text-gray bullet-list">
                    <li>Health &amp; Safety Standards</li>
                    <li>Anti-Diversion Techniques</li>
                    <li>ID &amp; Common Verification Issues</li>
                    <li>Local &amp; Commonwealth Laws</li>
                    <li>Rules of Conduct</li>
                    <li>Seed to Sale Tracking Requirements</li>
                    <li>Industry Best Practices</li>
                </ul>

            </div>
        </div>
        <div class="home-banner bg-purple pb-200" id="courses">
            <h3 class="text-white text-center">Courses coming soon</h3>
        </div>
        <div class="container-offset">

            <div class="maccti-flex-row price-boxes">
                <div class="price-box-single col-third">
                    <h5 class="box-top">Responsible Vendor Program</h5>
                    <div class="price">
                        <span>Coming soon</span>
                    </div>
                    <div class="price-course-features">
                        <ul class="list-check">
                            <li>Fully online training</li>
                            <li>Study anywhere, anytime</li>
                            <li>Affordable and flexible</li>
                            <li>Get learning, get earning</li>
                        </ul>
                        <!-- <a href="#" class="text-center m-auto">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/buy-green.png" alt="Buy Now button">
                        </a> -->
                        <a href="/contact" class="">Register interest
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="price-box-single col-third">
                    <h5 class="box-top">Responsible Transporter Program</h5>
                    <div class="price">
                        <span>Coming soon</span>
                    </div>
                    <div class="price-course-features">
                        <ul class="list-check">
                            <li>Fully online training</li>
                            <li>Study anywhere, anytime</li>
                            <li>Affordable and flexible</li>
                            <li>Get learning, get earning</li>
                        </ul>
                        <!-- <a href="#" class="text-center m-auto">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/buy-purple.png" alt="Buy Now button">
                        </a> -->
                        <a href="/contact" class="">Register interest
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="price-box-single col-third">
                    <h5 class="box-top">Operational Comms, Convoy Discipline &amp; Route Selection</h5>
                    <div class="price">
                        <span>Request price</span>
                    </div>
                    <div class="price-course-features">
                        <ul class="list-check">
                            <li>Customized</li>
                            <li>Delivered in person</li>
                            <li>Special Forces Experts</li>
                            <li>Elite training for high risk industry</li>
                        </ul>
                        <p>* In partnership with Apex Consilium</p>
                        <a href="/contact/" class="">Register interest
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="home-banner bg-white">
            <div class="container">
                <h3 class="text-darkish text-center">What you will need to enroll:</h3>
                <p class="text-medium text-darkish">
                    State Issued ID (Driver’s License or State ID Card)
                    <br> Valid Credit Card
                    <br> Create an MACCTI Learner’s profile
                </p>
            </div>

        </div>
        <div class="bg-white text-center pb-100">
            <div class="container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/box.png" alt="Complete the course" class="img-responsive">
            </div>

        </div>
        <div class="home-banner bg-light">
            <div class="container">
                <p class="uppercase text-purple large-p">
                    OUR COURSES MEET ALL MASSACHUSETTS ANNUAL TRAINING REQUIREMENTS AS OUTLINED IN CHAPTER 55 OF THE ACTS OF 2017; MASSACHUSETTS
                    GENERAL LAWS CHAPTER 94G, 935 CMR 500.000, AND ALL OTHER COMMONWEALTH CANNABIS REGULATIONS.
                </p>
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