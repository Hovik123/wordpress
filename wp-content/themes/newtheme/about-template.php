<?php /* Template Name: about us */ ?>
<?php get_header();?>
<div class="page" id="top">

    <!-- Home Section -->
    <?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
    <section class="page-section bg-dark bg-dark-alfa-70" data-background="<?php the_post_thumbnail_url([200,200])?>" id="home">
        <div class="relative container">

            <!-- Hero Content -->
            <div class="home-content">
                <div class="home-text">

                    <h1 class="hs-line-14 font-alt mb-0">
                        <?php echo the_title();?>
                    </h1>

                </div>
            </div>
            <!-- End Hero Content -->

        </div>
    </section>
    <!-- End Home Section -->

    <!-- About Section -->
    <section class="page-section">
        <div class="container relative">

            <div class="section-text">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">

                                <?php the_content();?>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->


    <!-- Call Action Section -->
    <section class="page-section bg-dark bg-dark-alfa-50" data-background="images/barbershop/section-bg-1.jpg">
        <div class="container relative">

            <div class="align-center">
                <h3 class="banner-heading font-alt mb-40">Contact with me.</h3>
                <div class="local-scroll">
                    <a href="<?php echo get_page_link(18); ?>" class="btn btn-mod btn-w btn-medium btn-round">Go to contact</a>
                </div>
            </div>

        </div>
    </section>
    <!-- End Call Action Section -->
        <?php endwhile; ?>
    <?php endif; ?>
    <?php get_footer();?>
</div>