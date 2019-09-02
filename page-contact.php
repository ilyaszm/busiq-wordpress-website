<?php get_header(); ?>

<!--

    CONTACT PAGE

-->

    <!-- CONTACT SECTION -->
    <section id="contact-section">
        <div class="container text-center">
            <div class="titles pb-3">
                <h1 class="section-title text-center text-uppercase text-white wow fadeInDown" data-wow-duration="2s" data-wow-delay=".3s">contact us</h1>
                <h3 class="section-subtitle text-center text-white-50 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                    If you have any answers or demands, please feel free to contact us. We're here to help and answer any question you might have.
                </h3>
            </div>
            <div class="row py-5 text-white-50 wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s">
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control text-white">
                                    <label for="name" class="">Your name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control text-white">
                                    <label for="email" class="">Your email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control text-white">
                                    <label for="subject" class="">Subject</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control text-white md-textarea"></textarea>
                                    <label for="message">Your message</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-md-left">
                            <button id="contactBtn" class="btn light-button text-capitalize font-weight-bold wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s" type="submit">
                                send
                            </button>
                        </div>
                    </form>
                </div>
                <div class="status"></div>
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>City, gh 75001, Country</p>
                        </li>
                    
                        <li>
                            <i class="fas fa-phone mt-4"></i>
                            <p>+ 000 000 000</p>
                        </li>
                    
                        <li>
                            <i class="fas fa-envelope mt-4"></i>
                            <p>contact@busiq.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>