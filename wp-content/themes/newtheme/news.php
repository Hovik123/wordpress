<?php /* Template Name: news */ ?>
<?php get_header(); ?>
    <!-- Head Section -->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section class="page-section bg-dark bg-dark-alfa-70" id="home"
                 data-background="<?php the_post_thumbnail_url([200, 200]) ?>">
            <div class="relative container">

                <!-- Hero Content -->
                <div class="home-content">
                    <div class="home-text">

                        <h1 class="hs-line-14 font-alt mb-0">
                            <?php echo the_title(); ?>
                        </h1>

                    </div>
                </div>
                <!-- End Hero Content -->

            </div>
        </section>
        <!-- End Head Section -->
    <?php endwhile; ?>
<?php endif; ?>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'posts_per_page' => 5,
    'category' => 'news',
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type' => 'post',
    'paged' => $paged,
    'post_status'=>'publish'
);

$posts = get_posts($args);


?>
    <!-- Section -->
    <section class="page-section">
        <div class="container relative">
            <div class="row">
                <!-- Content -->
                <div class="col-sm-10 col-sm-offset-1">
                    <!-- Post -->
                    <?php
                    $custom_query = new WP_Query( $args );
                    while ( $custom_query->have_posts() ) :
                        $custom_query->the_post();?>
                        <div class="blog-item">

                            <!-- Date -->
                            <div class="blog-item-date">
                                <?php echo the_date()?>
                            </div>

                            <!-- Post Title -->
                            <h2 class="blog-item-title font-alt"><a
                                    href="<?php echo get_permalink() ?>"><?php echo the_title(); ?></a></h2>


                            <!-- Text Intro -->
                            <div class="blog-item-body">
                                <p>
                                    <?php the_content()?>
                                </p>
                            </div>

                            <!-- Read More Link -->
                            <div class="blog-item-foot">
                                <a href="<?php echo get_permalink() ?>" class="btn btn-mod btn-round  btn-small">Read
                                    More
                                    <i class="fa fa-angle-right"></i></a>
                            </div>

                        </div>
                    <?php endwhile; ?>
                    <div class="pagination">
                        <?php
                        if (function_exists('custom_pagination')) {
                            custom_pagination($custom_query->max_num_pages, "", $paged);
                        } ?>
                    </div>
                    <!-- End Pagination -->

                </div>
                <!-- End Content -->

            </div>

        </div>
    </section>
    <!-- End Section -->

<?php get_footer(); ?>