<?php /* Template Name: Contact us */ ?>
<?php get_header();?>
<!-- Head Section -->
    <section class="page-section bg-dark bg-dark-alfa-70" id="home">
        <div class="relative container">

            <!-- Hero Content -->
            <div class="home-content">
                <div class="home-text">

                    <h1 class="hs-line-14 font-alt mb-0">
                        Contact
                    </h1>

                </div>
            </div>
            <!-- End Hero Content -->

        </div>
    </section>
<!-- End Head Section -->
<!-- Google Map -->
<div class="google-map">
    <div data-address="Belt Parkway, Queens, NY, United States" id="map-canvas"></div>
</div>
<!-- End Google Map -->
<!-- Contact Section -->
<section class="page-section" id="contact">
    <div class="container relative">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="section-text align-center mb-70 mb-xs-40">
                    <?php echo get_field( "description_of_contacts" );?>
                </div>
            </div>
        </div>
        <div class="row mb-60 mb-xs-40">
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
        <!-- Contact Form -->                            
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php echo do_shortcode("[contact-form-7 id=\"168\" title=\"Contact form 1\"]")?>
            </div>
        </div>
        <!-- End Contact Form -->
    </div>
</section>
<!-- End Contact Section -->
<?php get_footer()?>