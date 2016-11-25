<?php /* Template Name: Portfolio single */ ?>
<?php get_header(); ?>
    <!-- Page Wrap -->
    <div class="page" id="top">

        <!-- Home Section -->
        <section class="home-section bg-dark-alfa-30 fixed-height-small" data-background="images/mobile-video-placeholder.jpg" id="home">
            <div class="js-height-parent container">

                <!-- Video BG Init -->
                <div class="player" data-property="{videoURL:'http://youtu.be/I6jmZ5plZ3o',containment:'#home',autoPlay:true, showControls:false, showYTLogo: false, mute:true, startAt:0, opacity:1}">
                </div>
                <!-- End Video BG Init -->

                <!-- Hero Content -->
                <div class="home-content">
                    <div class="home-text">

                        <h1 class="hs-line-8 no-transp font-alt mb-50 mb-xs-30">
                            Branding / Design / Photography
                        </h1>

                        <h2 class="hs-line-14 font-alt mb-50 mb-xs-30">
                            Creative Project
                        </h2>

                    </div>
                </div>
                <!-- End Hero Content -->

            </div>
        </section>
        <!-- End Home Section -->


        <!-- Section -->
        <section class="page-section">
            <div class="container relative">

                <!-- Intro Text -->
                <div class="row">
                    <h4 class="mt-0 font-alt">About</h4>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-text align-center mb-70 mb-xs-40">
                            <?php echo get_field( "project_description" );?>
                        </div>
                    </div>
                </div>
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content();?>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </section>
        <!-- End Section -->

    </div>
    <!-- End Page Wrap -->
<?php get_footer(); ?>