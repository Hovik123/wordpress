<?php /* Template Name: Portfolio single */ ?>
<?php get_header(); ?>
    <!-- Page Wrap -->
    <div class="page" id="top">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <!-- Home Section -->
                <section class="home-section bg-dark-alfa-30 fixed-height-small"
                         data-background="<?php the_post_thumbnail_url([200,200])?>" id="home">
                    <div class="js-height-parent container">

                        <!-- Video BG Init -->
                        <div class="player"
                             data-property="{videoURL:'https://www.youtube.com/watch?v=I6jmZ5plZ3o&feature=youtu.be',containment:'#home',autoPlay:true, showControls:false, showYTLogo: false, mute:true, startAt:0, opacity:1}">
                        </div>
                        <!-- End Video BG Init -->

                        <!-- Hero Content -->
                        <div class="home-content">
                            <div class="home-text">
                                <h2 class="hs-line-14 font-alt mb-50 mb-xs-30">
                                    <?php echo the_title();?>
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
                            <div class="col-md-10 col-md-offset-1">
                                <div class="section-text align-center mb-70 mb-xs-40">

                                    <?php the_content(); ?>


                                </div>
                            </div>
                        </div>
                        <?php echo get_field("project_description"); ?>

                    </div>
                </section>

            <?php endwhile; ?>
        <?php endif; ?>
        <!-- End Section -->

    </div>
    <!-- End Page Wrap -->
<?php get_footer(); ?>