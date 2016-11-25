<?php /* Template Name: Portfolio albom */ ?>
<?php get_header(); ?>
    <!-- Head Section -->
<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <section class="small-section bg-dark-alfa-30 parallax-2"
                 data-background=<?php the_post_thumbnail_url() ?>>
            <div class="relative container align-left">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="hs-line-11 font-alt mb-20 mb-xs-0"><?php echo the_title() ?></h1>
                        <div class="hs-line-4 font-alt">
                            <?php echo get_field( "description" );?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile;
else :
    echo wpautop('Sorry, no posts were found');
endif;
?>

    <!-- End Head Section -->
    <!-- Portfolio Section -->


    <section class="page-section pb-0">
        <div class="relative">
            <?php
            global $wp_query;
            $albume_wp_query = new WP_Query([
                'post_type' => 'page',
                'posts_per_page' => -1,
                'post_parent' => $wp_query->post->ID,
                'order' => 'ASC',
                'orderby' => 'menu_order'
            ]);
            if ($albume_wp_query->have_posts()) : ?>
                <ul class="works-grid clearfix font-alt hover-white" id="work-grid">
                    <?php while ($albume_wp_query->have_posts()) : $albume_wp_query->the_post(); ?>
                        <li class="work-item mix branding">
                            <a href="<?php the_permalink(); ?>" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="<?php the_post_thumbnail_url([200, 200]) ?>" alt="Work"
                                         height="200"/>
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title"><?php the_title() ?></h3>
                                    <div class="work-descr">
                                        <?php /*the_title()*/ ?>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif;
            wp_reset_query(); ?>
        </div>
    </section>
    <!-- End Portfolio Section -->
<?php get_footer(); ?>