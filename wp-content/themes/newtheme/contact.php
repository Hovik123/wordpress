<?php /* Template Name: Contact us */ ?>
<?php get_header();?>
<!-- Head Section -->
<section class="small-section bg-dark-lighter">
    <div class="relative container align-left">
        <div class="row">
            <div class="col-md-8">
                <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Contact</h1>
                <div class="hs-line-4 font-alt">
                    We’re always open to talk to good people
                </div>
            </div>
            <div class="col-md-4 mt-30">
                <div class="mod-breadcrumbs font-alt align-right">
                    <a href="#">Home</a>&nbsp;/&nbsp;<a href="#">Pages</a>&nbsp;/&nbsp;<span>Contact</span>
                </div>
            </div>
        </div>
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
                    Curabitur eu adipiscing lacus, a iaculis diam. Nullam placerat blandit auctor. Nulla accumsan ipsum et nibh rhoncus, eget tempus sapien ultricies. Donec mollis lorem vehicula.
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
                                +61 3 8376 6284
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
                                245 Quigley Blvd, Ste K
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
                                <a href="mailto:support@bestlooker.pro">support@bestlooker.pro</a>
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
                <form class="form contact-form" id="contact_form">
                    <div class="clearfix">
                        <div class="cf-left-col">
                            <!-- Name -->
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="input-md round form-control" placeholder="Name" pattern=".{3,100}" required>
                            </div>
                            <!-- Email -->
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="input-md round form-control" placeholder="Email" pattern=".{5,100}" required>
                            </div>
                        </div>
                        <div class="cf-right-col">
                            <!-- Message -->
                            <div class="form-group">                                            
                                <textarea name="message" id="message" class="input-md round form-control" style="height: 84px;" placeholder="Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="cf-left-col">
                            <!-- Inform Tip -->                                        
                            <div class="form-tip pt-20">
                                <i class="fa fa-info-circle"></i> All the fields are required
                            </div>
                        </div>
                        <div class="cf-right-col">
                            <!-- Send Button -->
                            <div class="align-right pt-10">
                                <button class="submit_btn btn btn-mod btn-medium btn-round" id="submit_btn">Submit Message</button>
                            </div>
                        </div>
                    </div>
                    <div id="result"></div>
                </form>
            </div>
        </div>
        <!-- End Contact Form -->
    </div>
</section>
<!-- End Contact Section -->
<?php get_footer()?>