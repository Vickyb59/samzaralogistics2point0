<?php
    include('inc/config.php');
    include('inc/session.php');
    include('admin/includes/format.php');

    $page_name = 'Contact';
    $banner_name = 'Get in touch';
    $page_tagline = 'We will be right with you';
    $page_parent = 'Services';
    $page_parent_url = 'javascript:void()';
    $page_banner = 'assets/img/background/contact-banner.jpg';
    $page_title = 'Welcome to the Official Website of '.$settings->siteTitle;
    $page_description = $settings->siteDescription;
    include('inc/head.php');

?>
    <body id="home">

        <!-- Main Wrapper -->        
        <main class="wrapper">

            <!-- Header -->
            <?php include('inc/header.php') ?>
            <!-- /.Header -->

            <!-- Content Wrapper -->
            <article> 
                <!-- Breadcrumb -->
                <?php include('inc/breadcrumb.php') ?>
                <!-- /.Breadcrumb -->

                <!-- Contact Us -->
                <section class="contact-page pad-30">                    
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-md-offset-1">
                                <ul class="contact-detail title-2 pt-50">
                                    <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s"> <span>address :</span> <p class="gray-clr"> <?= $settings->address; ?> </p> </li>
                                    <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s"> <span>phone number:</span> <p class="gray-clr"> <?= $settings->phoneNumber; ?> </p> </li>
                                    <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".50s"> <span>Email address:</span> <p class="gray-clr"> <?= $settings->email; ?> <br> <?= $settings->email2; ?> </p> </li>
                                </ul>
                            </div>

                            <div class="col-md-5 col-sm-6 col-md-offset-1 contact-form">
                                <div class="calculate-form">
                                    <form class="row" id="contact-form">
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3"> <label class="title-2"> Name: </label></div>
                                            <div class="col-sm-9"> <input type="text" name="Name" id="Name" required placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3"> <label class="title-2"> Email: </label></div>
                                            <div class="col-sm-9"> <input type="text" name="Email" id="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3"> <label class="title-2"> Phone: </label></div>
                                            <div class="col-sm-9"> <input type="text" name="Phone" id="Phone" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3"> <label class="title-2"> Message: </label></div>
                                            <div class="col-sm-9"> <textarea class="form-control" name="Message" id="Message" required cols="25" rows="3"></textarea> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-9 col-xs-12 pull-right">
                                                <button name="submit" id="submit_btn" class="btn-1"> send message </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Contact Us -->

                <!-- Contact Map -->
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=178%20Arrowhead%20DrSandia,%20TX%2078383,%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org">putlocker</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
                </div>
                <!-- /.Contact Map -->
                

            </article>
            <!-- /.Content Wrapper -->

            <!-- Footer -->
            <?php include('inc/footer.php');  ?>
            <!-- /.Footer -->


        </main>
        <!-- / Main Wrapper -->

        <!-- Popup: Login -->
        <?php include('inc/login-popup.php');  ?>
        <!-- /Popup: Login -->

        <!-- Scripts -->
        <?php include('inc/scripts.php');  ?>
        <!-- /Scripts -->

    </body>

<!-- Mirrored from event-theme.com/themes/GO-Courier/tracking.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jun 2021 07:25:04 GMT -->
</html>