<!-- Foter -->
<footer class="page-section bg-gray-lighter footer pb-60">
    <div class="container">
        <!-- Footer Logo -->
        <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.5s">
            <a href="#top" style="font-size: 21px;">ALEXANDRU RAEVSCHI</a>
        </div>
        <div class="inner-nav col-lg-12">
            <?php wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'col-lg-9 col-lg-offset-3 ',
                'menu_id' => 'primary-menu',
                'container' => false,
                'depth' => '1'
            ));
            ?>
        </div>

        <!-- End Footer Logo -->
        <!-- Social Links -->
        <div class="footer-social-links mb-110 mb-xs-60">
            <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="#" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
            <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
        </div>
        <!-- End Social Links -->
        <!-- Footer Text -->
        <div class="footer-text">
            <!-- Copyright -->
            <div class="footer-copy font-alt">
                &copy; All right reserved
            </div>
        </div>
        <!-- End Footer Text -->
    </div>
    <!-- Top Link -->
    <div class="local-scroll">
        <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
    </div>
    <!-- End Top Link -->
</footer>
<!-- End Foter -->
</div>


<?php wp_head(); ?>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/SmoothScroll.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.scrollTo.min.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.localScroll.min.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.viewport.mini.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.countTo.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.appear.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.sticky.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.fitvids.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.pkgd.min.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
<!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below
**** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>

<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/masonry.pkgd.min.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.simple-text-rotator.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/all.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/contact-form.js"></script>
<script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.ajaxchimp.min.js"></script>
<!--[if lt IE 10]>
<script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

<?php wp_footer(); ?>
<style>
    div.amazingslider-box-1 :nth-child(3) {
        visibility: hidden;
    }
</style>

</body>

</html>