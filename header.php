
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
    <nav id="about-navbar" class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">busiq</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo site_url(''); ?>">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url( '/about' ); ?>">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php site_url( '/services' ); ?>">services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php site_url( '/contact' ); ?>">contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php site_url( '/blog' ); ?>">blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>