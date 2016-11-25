<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Art Sasha</title>
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();
    ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();
    ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();
    ?>/assets/css/style-responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();
    ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();
    ?>/assets/css/vertical-rhythm.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();
    ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();
    ?>/assets/css/magnific-popup.css">
    <script type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/SmoothScroll.js"></script>
    <script type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.localScroll.min.js"></script>
    <script type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.viewport.mini.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.countTo.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.appear.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.sticky.js"></script>
    <script type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/assets/js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below
    **** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/gmap3.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/masonry.pkgd.min.js"></script>
    <script type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.simple-text-rotator.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/all.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/contact-form.js"></script>
    <script type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.ajaxchimp.min.js"></script>
    <!--[if lt IE 10]>
    <script type="text/javascript" src="js/placeholder.js"></script><![endif]-->
    <?php wp_head(); ?>
</head>
<body class="appear-animate">
<div class="page-loader">
    <div class="loader">Loading...</div>
</div>
<!-- End Page Loader -->
<!-- Page Wrap -->
<div class="page" id="top">
    <nav class="main-nav dark transparent stick-fixed">
        <div class="full-wrapper relative clearfix">
            <!-- Logo ( * your text or image into link tag *) -->
            <div class="nav-logo-wrap local-scroll">
                <a href="mp-index.html" class="logo">
                    <img src="<?php echo get_template_directory_uri();
                    ?>/assets/images/logo-white.png" alt=""/>
                </a>
            </div>
            <div class="mobile-nav">
                <i class="fa fa-bars"></i>
            </div>
            <!-- Main Menu -->
            <div class="inner-nav desktop-nav">
                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'clearlist', 'menu_id' => 'primary-menu',
                    'container' => 'inner-nav desktop-nav'
                ));
                ?>
            </div>
            <!-- End Main Menu -->
        </div>
    </nav>