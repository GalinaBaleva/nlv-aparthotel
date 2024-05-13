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
            <a class="navbar-brand" href="<?php home_url() ?>">NLV <span>Apartments</span></a>
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu">Menu</span>
            </button> -->

            <div class="collapse navbar-collapse" id="ftco-nav">
                <?php
                wp_nav_menu($args = array(
                    'menu'                => "navbar-collapse", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                    'menu_class'        => "navbar-nav ml-auto", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                    'menu_id'            => "navbar-nav-id", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
                    'container'            => "ul", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                    'container_class'    => "collapse navbar-collapse", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                    'container_id'        => "ftco-nav", // (string) The ID that is applied to the container.
                    'theme_location'    => "headmenu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                ));
                ?>
            </div>
        </div>
    </nav>

    <?php
    if (is_front_page()) {
    ?>
        <!-- END nav -->
        <div class="hero">
            <section class="home-slider owl-carousel">
                <div class="slider-item" style="background-image:url(<?php echo URL_IMG; ?>IMG_0417s-1mbs-light-scaled.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text align-items-center justify-content-end">
                            <div class="col-md-6 ftco-animate">
                                <div class="text">
                                    <h2>New Line Village Apartmentshotel</h2>
                                    <h1 class="mb-3">It feels like staying in your own home.</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item" style="background-image:url(<?php echo URL_IMG; ?>IMG_0314_edited_s.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text align-items-center justify-content-end">
                            <div class="col-md-6 ftco-animate">
                                <div class="text">
                                    <h2>More than a holiday place... an experience</h2>
                                    <h1 class="mb-3">Best place for the whole family.</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <?php
    } else {
    ?>
        <!-- END nav -->
        <div class="hero-wrap" style="background-image: url('<?php echo URL_IMG; ?>IMG_0417s-1mbs-light-scaled.jpg');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
                    <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                        <div class="text">
                            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span> <span>About Us</span></p>
                            <h1 class="mb-4 bread"><?php the_title() ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    };

    ?>