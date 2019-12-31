<?php get_header(); ?>
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
    <?php get_footer(); ?>