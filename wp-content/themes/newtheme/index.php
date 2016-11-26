<?php get_header();
?>
    <div class="home-section fullwidth-slider-fade bg-dark" id="home">
        <!-- Slide Item -->
        <section class="home-section bg-scroll bg-dark-alfa-50" style="height: 100vh;">
            <div class="video-background">
                <div class="video-foreground">
                    <iframe
                        src="<?php echo get_field( "youtube_iframe_src" );?>?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=W0LHTWG-UmQ"
                        frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <!-- End Slide Item -->
        <!-- Slide Item -->
    </div>
    <!-- End Fullwidth Slider -->
    <!-- About Section -->
    <section class="page-section" id="about">
        <div class="container relative">
            <h2 class="section-title font-alt align-left mb-70 mb-sm-40">
                Alexandru Raevschi
                <a href="#" class="section-more right">More about Alexandru Raevschi <i class="fa fa-angle-right"></i></a>
            </h2>
            <div class="section-text">
                <div class="row">
                    <div class="col-md-6 col-sm-6 mb-sm-50 mb-xs-30">
                        <?php echo get_field( "about_part_1" );?>
                    </div>
                    <div class="col-md-6 col-sm-6 mb-sm-50 mb-xs-30">
                        <?php echo get_field( "about_info_column_2" );?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->
    <!-- Call Action Section -->
    <section class="page-section pt-0 pb-0 banner-section bg-dark"
             data-background="<?php echo get_field( "backgrund_image" );?>" style="height: 400px">
    </section>

    <!-- End Portfolio Section -->
    <!-- Call Action Section -->
    <section class="small-section bg-dark">
        <div class="container relative">
            <div class="align-center">
                <h3 class="banner-heading font-alt">GO SEE MY WORKS</h3>
                <div class="local-scroll">
                    <a href="<?php echo get_page_link(119); ?>"
                       class="btn btn-mod btn-w btn-medium btn-round">Portfolio</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call Action Section -->
    <!-- Features Section -->
    <div class="row mb-60 mt-60">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <!-- Phone -->
                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                    <div class="contact-item">
                        <div class="ci-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="ci-title font-alt">
                            Call Us
                        </div>
                        <div class="ci-text">
                            <?php echo get_field( "phone" );?>
                        </div>
                    </div>
                </div>
                <!-- End Phone -->
                <!-- Address -->
                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                    <div class="contact-item">
                        <div class="ci-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="ci-title font-alt">
                            Address
                        </div>
                        <div class="ci-text">
                            <?php echo get_field( "location" )['address'];?>
                        </div>
                    </div>
                </div>
                <!-- End Address -->
                <!-- Email -->
                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                    <div class="contact-item">
                        <div class="ci-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="ci-title font-alt">
                            Email
                        </div>
                        <div class="ci-text">
                            <a href="mailto:<?php echo get_field( "email" );?>"><?php echo get_field( "email" );?></a>
                        </div>
                    </div>
                </div>
                <!-- End Email -->
            </div>
        </div>
    </div>
<?php get_footer();
?>