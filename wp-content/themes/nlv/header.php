<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?php wp_title(); ?>
    </title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if (is_singular() && get_option('thread_comments'))
        wp_enqueue_script('comment-reply'); ?>

    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700&display=swap" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Harbor<span>lights</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="rooms.html" class="nav-link">Our Rooms</a></li>
                    <li class="nav-item"><a href="restaurant.html" class="nav-link">Restaurant</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <div class="hero">
        <section class="home-slider owl-carousel">
            <div class="slider-item" style="background-image:url(<?php echo URL_IMG; ?>bg_1.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-end">
                        <div class="col-md-6 ftco-animate">
                            <div class="text">
                                <h2>More than a hotel... an experience</h2>
                                <h1 class="mb-3">Hotel for the whole family, all year round.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image:url(<?php echo URL_IMG; ?>bg_2.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-end">
                        <div class="col-md-6 ftco-animate">
                            <div class="text">
                                <h2>Harbor Lights Hotel &amp; Resort</h2>
                                <h1 class="mb-3">It feels like staying in your own home.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>