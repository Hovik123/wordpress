<?php /* Template Name: news */ ?>
<?php get_header(); ?>
    <!-- Head Section -->
    <section class="page-section bg-dark bg-dark-alfa-70" data-background="<?php the_post_thumbnail_url([200,200])?>" id="home">
        <div class="relative container">

            <!-- Hero Content -->
            <div class="home-content">
                <div class="home-text">

                    <h1 class="hs-line-14 font-alt mb-0">
                        News
                    </h1>
                    <div class="hs-line-4 font-alt">
                        <?php echo get_field( "description" );?>
                    </div>
                </div>
            </div>
            <!-- End Hero Content -->

        </div>
    </section>
    <!-- End Head Section -->


    <!-- Section -->
    <section class="page-section">
        <div class="container relative">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="row">

                <!-- Content -->
                <div class="col-sm-10 col-sm-offset-1">

                    <!-- Post -->
                    <div class="blog-item mb-80 mb-xs-40">

                        <!-- Text -->
                        <div class="blog-item-body">

                            <h1 class="mt-0 font-alt"><?php the_title();?></h1>

                            <?php the_content();?>
                       </div>
                        <!-- End Text -->

                    </div>
                    <!-- End Post -->


                </div>
                <!-- End Content -->

            </div>
            <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </section>
    <!-- End Section -->
<?php get_footer();?>