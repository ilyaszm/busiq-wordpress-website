<!--

    BUSIQ template by IZEMSPOT
    izemspot.netlify.com
    Free for personal and commercial use under the MIT License

    INDEX PAGE

-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="<?php the_author(); ?>">
    <title>
        <?php bloginfo( 'name' ); ?> -
        <?php is_front_page() ? bloginfo( 'description' ) : single_post_title( '', true ); ?>
    </title>
    <?php wp_head(); ?>
</head>
<body>
    
    <!-- NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><?php bloginfo( 'name' ); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
            wp_nav_menu ( array(
                'menu'            => 'primary_menu',
                'theme_location'  => 'primary_menu',
                'container'       => 'div',
                'container_id'    => 'bs4navbar',
                'container_class' => 'collapse navbar-collapse',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav ml-auto',
                'depth'           => 2,
                'fallback_cb'     => 'bs4navwalker::fallback',
                'walker'          => new bs4navwalker()
            ));
            ?>
        </div>
    </nav>

    <!-- SLIDESHOW SECTION -->
    <section id="slideshow">
  
        <div class="slide active">
            <div class="bg1">
                <div class="slider-center">
                    <div class="slide-text text-center">
                        <h2 class="slide-title">welcome to <?php bloginfo( 'name' ); ?></h2>
                        <p class="slide-para">An agency created specially for people who need to fix their car</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="slide">
            <div class="bg2">
                <div class="slider-center">
                    <div class="slide-text text-center">
                        <h2 class="slide-title">the all new one garage</h2>
                        <p class="slide-para">A faster and more secure way to fix your car</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="slide last">
            <div class="bg3">
                <div class="slider-center">
                    <div class="slide-text text-center">
                        <h2 class="slide-title">we are open 24/7</h2>
                        <p class="slide-para">Connect with us, and organise a schedule</p>
                    </div>
                </div>
            </div>
       </div>
  
        <div class="slideshow-nav">
            <a href="#" class="nav-link previous"><i class="fa fa-angle-left"></i></a>
            <a href="#" class="nav-link next"><i class="fa fa-angle-right"></i></a>
        </div>
  
    </section>

    <!-- ABOUT SECTION -->
    <section id="about-section">
        <div class="container p-5">
            <div class="titles pb-5">
                <h1 class="section-title text-center text-uppercase text-white wow fadeInDown" data-wow-duration="2s" data-wow-delay=".3s">about us</h1>
                <h3 class="section-subtitle text-center text-capitalize text-white wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">the story of our project</h3>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-8 picture">
                    <img src="<?php wp_get_attachment_image_src( './assets/img/garage.jpg' ); ?>" alt="garage" class="img-fluid wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".5s">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h4 class="text-white wow fadeInRight" data-wow-duration="2s" data-wow-delay=".5s">The agency was born in 2012 in Torino.</h4>
                    <p class="text-white-50 wow fadeInRight" data-wow-duration="2s" data-wow-delay=".5s">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati voluptate perspiciatis minus assumenda sed esse, mollitia, quas, impedit quisquam officia in tenetur? Deserunt repellendus alias dolores eum blanditiis! Facilis voluptatibus doloribus, quisquam asperiores quaerat dolor! Ratione dolores, minima provident qui ex est quaerat consectetur voluptas atque amet voluptate illo praesentium.</p>
                    <a href="about.html" class="btn light-button text-capitalize font-weight-bold wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">read more...</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section id="services-section">
        <div class="med">
            <div class="container p-5">
                <div class="titles pb-5">
                    <h1 class="section-title text-center text-uppercase text-white wow fadeInDown" data-wow-duration="2s" data-wow-delay=".3s">our services</h1>
                    <h3 class="section-subtitle text-center text-capitalize text-white wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">we offer many services but the three main ones are:</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="item-services py-5 px-4 mb-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
                            <i class="fas fa-tools service-ico py-3"></i>
                            <h4 class="text-uppercase text-white">
                                body
                                <br>
                                work repair
                            </h4>
                            <p class="text-white-50">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate reiciendis aperiam optio.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item-services py-5 px-4 mb-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">
                            <i class="fas fa-file-alt service-ico py-3"></i>
                            <h4 class="text-uppercase text-white">
                                1 year
                                <br>
                                waranty
                            </h4>
                            <p class="text-white-50">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate reiciendis aperiam optio.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item-services py-5 px-4 mb-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
                            <i class="fas fa-stopwatch service-ico py-3"></i>
                            <h4 class="text-uppercase text-white">
                                fast
                                <br>
                                and efficient work
                            </h4>
                            <p class="text-white-50">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate reiciendis aperiam optio.
                            </p>
                        </div>
                    </div>
                </div>
                <a href="services.html" class="btn light-button text-capitalize font-weight-bold mt-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".7s">check more...</a>
            </div>
        </div>
    </section>

    <!-- TEAM SECTION -->
    <section id="team-section">
        <div class="container p-5">
            <div class="titles pb-5">
                <h1 class="section-title text-center text-uppercase text-white wow fadeInDown" data-wow-duration="2s" data-wow-delay=".3s">our team</h1>
                <h3 class="section-subtitle text-center text-capitalize text-white wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">team members who establish the agency</h3>
            </div>
            <div class="row">
                <div class="card-group">
                    <div class="card m-3 rounded wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
                        <img src="assets/img/p1.jpg" class="card-img-top img-fluid" alt="p1">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize text-white">john doe</h5>
                            <p class="card-text text-capitalize text-white">founder / CEO</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                <ul class="list-inline">
                                    <a href="#"><li class="list-inline-item px-1"><i class="fab fa-facebook"></i></li></a>
                                    <a href="#"><li class="list-inline-item px-1"><i class="fab fa-twitter"></i></li></a>
                                    <a href="#"><li class="list-inline-item px-1"><i class="fas fa-envelope"></i></li></a>
                                </ul>
                            </small>
                        </div>
                    </div>
                    <div class="card m-3 rounded wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">
                        <img src="assets/img/p2.jpg" class="card-img-top img-fluid" alt="p2">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize text-white">jessie coleman</h5>
                            <p class="card-text text-capitalize text-white">business head</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                <ul class="list-inline">
                                    <a href="#"><li class="list-inline-item px-1"><i class="fab fa-facebook"></i></li></a>
                                    <a href="#"><li class="list-inline-item px-1"><i class="fab fa-twitter"></i></li></a>
                                    <a href="#"><li class="list-inline-item px-1"><i class="fas fa-envelope"></i></li></a>
                                </ul>
                            </small>
                        </div>
                    </div>
                    <div class="card m-3 rounded wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
                        <img src="assets/img/p3.jpg" class="card-img-top img-fluid" alt="p3">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize text-white">sarah kidman</h5>
                            <p class="card-text text-capitalize text-white">marketing manager</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                <ul class="list-inline">
                                    <a href="#"><li class="list-inline-item px-1"><i class="fab fa-facebook"></i></li></a>
                                    <a href="#"><li class="list-inline-item px-1"><i class="fab fa-twitter"></i></li></a>
                                    <a href="#"><li class="list-inline-item px-1"><i class="fas fa-envelope"></i></li></a>
                                </ul>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact-section">
        <div class="container text-center">
            <div class="titles pb-3">
                <h1 class="section-title text-center text-uppercase text-white">contact us</h1>
                <h3 class="section-subtitle text-center text-white-50">
                    If you have any answers or demands, please feel free to contact us. We're here to help and answer any question you might have.
                </h3>
            </div>
            <a href="contact.html" class="btn light-button text-capitalize font-weight-bold">reach us</a>
        </div>
    </section>

<?php get_footer(); ?>