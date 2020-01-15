<?php get_header(); ?>
    <main class="bg-light">
        <div class="home-banner">
            <div class="container">
                <h1 id="contact">Contact Us</h1>

                <form id="contact-form" method="POST" action="/contact.php" role="form">

                    

                    <div class="controls">

                        <div class="row">
                            <?php 
                            if(have_posts()) {
                                while(have_posts()) {
                                    the_post();
                                    the_content();
                                }
                            } ?>
                        </div>
                    </div>

                </form>
            </div>

        </div>

    </main>
    <?php get_footer(); ?>