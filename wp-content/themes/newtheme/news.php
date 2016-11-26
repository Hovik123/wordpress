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

    <!-- Section -->
    <section class="page-section">
        <div class="container relative">
            <div class="row">
                <!-- Content -->
                <div class="col-sm-10 col-sm-offset-1">
                    <!-- Post -->
                    <div class="blog-item">

                        <!-- Date -->
                        <div class="blog-item-date">
                            <span class="date-num">05</span>Feb
                        </div>

                        <!-- Post Title -->
                        <h2 class="blog-item-title font-alt"><a href="blog-single-sidebar-right.html">Post with media
                                gallery</a></h2>

                        <!-- Author, Categories, Comments -->
                        <div class="blog-item-data">
                            <a href="#"><i class="fa fa-user"></i> John Doe</a>
                            <span class="separator">&nbsp;</span>
                            <i class="fa fa-folder-open"></i>
                            <a href="">Design</a>, <a href="#">Branding</a>
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-comments"></i> 5 Comments</a>
                        </div>

                        <!-- Media Gallery -->
                        <div class="blog-media">
                            <ul class="clearlist content-slider">
                                <li>
                                    <img src="images/portfolio/full-project-1.jpg" alt=""/>
                                </li>
                                <li>
                                    <img src="images/portfolio/full-project-2.jpg" alt=""/>
                                </li>
                                <li>
                                    <img src="images/portfolio/full-project-3.jpg" alt=""/>
                                </li>
                            </ul>
                        </div>

                        <!-- Text Intro -->
                        <div class="blog-item-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris non laoreet dui. Morbi
                                lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet mi id
                                sapien tempor molestie in nec massa.
                            </p>
                        </div>

                        <!-- Read More Link -->
                        <div class="blog-item-foot">
                            <a href="blog-single-sidebar-right.html" class="btn btn-mod btn-round  btn-small">Read More
                                <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                    <!-- End Post -->

                    <!-- Post -->
                    <div class="blog-item">
                        <!-- Date -->
                        <div class="blog-item-date">
                            <span class="date-num">04</span>Feb
                        </div>
                        <!-- Blockquote -->
                        <blockquote class="blog-item-q">
                            <p>
                                <a href="blog-single-sidebar-right.html">Curabitur iaculis, ligula facilisis volutpat
                                    suscipit, sapien felis tempor, consequat vitae velit.</a>
                            </p>
                        </blockquote>
                        <!-- End Blockquote -->

                        <!-- Author, Categories, Comments -->
                        <div class="blog-item-data">
                            <a href="#"><i class="fa fa-user"></i> John Doe</a>
                            <span class="separator">&nbsp;</span>
                            <i class="fa fa-folder-open"></i>
                            <a href="">Design</a>, <a href="#">Branding</a>
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-comments"></i> 5 Comments</a>
                        </div>

                        <!-- Read More Link -->
                        <div class="blog-item-foot">
                            <a href="blog-single-sidebar-right.html" class="btn btn-mod btn-round  btn-small">Read More
                                <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                    <!-- End Post -->

                    <!-- Post -->
                    <div class="blog-item">

                        <!-- Date -->
                        <div class="blog-item-date">
                            <span class="date-num">03</span>Feb
                        </div>

                        <!-- Post Title -->
                        <h2 class="blog-item-title font-alt"><a href="blog-single-sidebar-right.html">Video post
                                only</a></h2>

                        <!-- Author, Categories, Comments -->
                        <div class="blog-item-data">
                            <a href="#"><i class="fa fa-user"></i> John Doe</a>
                            <span class="separator">&nbsp;</span>
                            <i class="fa fa-folder-open"></i>
                            <a href="">Design</a>, <a href="#">Branding</a>
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-comments"></i> 5 Comments</a>
                        </div>

                        <!-- Media Gallery -->
                        <div class="blog-media">
                            <iframe width="640" height="360" src="http://www.youtube.com/embed/w2JUhDd0CAA"
                                    frameborder="0" allowfullscreen></iframe>
                        </div>

                        <!-- Text Intro -->
                        <div class="blog-item-body">
                            <p>
                                Morbi lacus massa, euismod ut turpis molestie, tristique sodales est. Integer sit amet
                                mi id sapien tempor molestie in nec massa.
                            </p>
                        </div>

                        <!-- Read More Link -->
                        <div class="blog-item-foot">
                            <a href="blog-single-sidebar-right.html" class="btn btn-mod btn-round  btn-small">Read More
                                <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                    <!-- End Post -->

                    <!-- Post -->
                    <div class="blog-item">

                        <!-- Date -->
                        <div class="blog-item-date">
                            <span class="date-num">07</span>Feb
                        </div>

                        <!-- Post Title -->
                        <h2 class="blog-item-title font-alt"><a href="blog-single-sidebar-right.html">Post with text
                                only</a></h2>

                        <!-- Author, Categories, Comments -->
                        <div class="blog-item-data">
                            <a href="#"><i class="fa fa-user"></i> John Doe</a>
                            <span class="separator">&nbsp;</span>
                            <i class="fa fa-folder-open"></i>
                            <a href="">Design</a>, <a href="#">Branding</a>
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-comments"></i> 5 Comments</a>
                        </div>

                        <!-- Text Intro -->
                        <div class="blog-item-body">
                            <p>
                                Suspendisse accumsan interdum tellus, eu imperdiet lacus consectetur sed. Aliquam in
                                ligula ac lacus blandit commodo vel luctus quam. Pellentesque habitant morbi tristique
                                senectus et netus et malesuada fames ac turpis egestas. Cras eu ultrices mauris.
                            </p>
                        </div>

                        <!-- Read More Link -->
                        <div class="blog-item-foot">
                            <a href="blog-single-sidebar-right.html" class="btn btn-mod btn-round  btn-small">Read More
                                <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                    <!-- End Post -->

                    <!-- Post -->
                    <div class="blog-item">

                        <!-- Date -->
                        <div class="blog-item-date">
                            <span class="date-num">27</span>Jan
                        </div>
                        <!-- Post Title -->
                        <h2 class="blog-item-title font-alt"><a href="blog-single-sidebar-right.html">Image post
                                only</a></h2>

                        <!-- Author, Categories, Comments -->
                        <div class="blog-item-data">
                            <a href="#"><i class="fa fa-user"></i> John Doe</a>
                            <span class="separator">&nbsp;</span>
                            <i class="fa fa-folder-open"></i>
                            <a href="">Design</a>, <a href="#">Branding</a>
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-comments"></i> 5 Comments</a>
                        </div>

                        <!-- Image -->
                        <div class="blog-media">
                            <a href="blog-single-sidebar-right.html"><img src="images/portfolio/full-project-4.jpg"
                                                                          alt=""/></a>
                        </div>

                        <!-- Text Intro -->
                        <div class="blog-item-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante
                                eleifend eleifend. Aliquam ac libero et diam rutrum rutrum. Nullam interdum mattis ipsum
                                at convallis.
                            </p>
                        </div>

                        <!-- Read More Link -->
                        <div class="blog-item-foot">
                            <a href="blog-single-sidebar-right.html" class="btn btn-mod btn-round  btn-small">Read More
                                <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                    <!-- End Post -->

                    <!-- Pagination -->
                    <div class="pagination">
                        <a href=""><i class="fa fa-angle-left"></i></a>
                        <a href="" class="active">1</a>
                        <a href="">2</a>
                        <a href="">3</a>
                        <a class="no-active">...</a>
                        <a href="">9</a>
                        <a href=""><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- End Pagination -->

                </div>
                <!-- End Content -->

            </div>

        </div>
    </section>
    <!-- End Section -->

<?php get_footer(); ?>