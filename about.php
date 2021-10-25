<?php
    include('inc/config.php');
    include('inc/session.php');
    include('admin/includes/format.php');

    $page_name = 'About';
    $banner_name = 'About Us';
    $page_tagline = 'Know more about us';
    $page_parent = '';
    $page_parent_url = '';
    $page_banner = 'assets/img/background/about-banner.jpg';
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
            <article class="about-page"> 
                <!-- Breadcrumb -->
                <?php include('inc/breadcrumb.php') ?>
                <!-- /.Breadcrumb -->

                <!-- About Us -->
                <section class="pad-50 about-wrap">
                    <span class="bg-text"> About </span>
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-us pt-10">
                                    <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s"><?= $settings->siteTitle; ?> has hands-on management, local port knowledge and experience, and expresses a desire to build a lasting service relationship. We take the time to get to know you and your business, going the extra mile to make certain your shipments arrive or depart without problems or delay.</p>
                                    <ul class="feature">
                                        <li> 
                                            <img alt="" src="assets/img/icons/icon-2.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                                <h2 class="title-1">Fast delivery</h2> 
                                                <p>Deliveries are done without issues and ontime</p>                                            
                                            </div>  
                                        </li>
                                        <li> 
                                            <img alt="" src="assets/img/icons/icon-3.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                                <h2 class="title-1">secured service</h2> 
                                                <p>Our trusted workers ensures goods get to you without tampering</p>                                            
                                            </div>  
                                        </li>
                                        <li> 
                                            <img alt="" src="assets/img/icons/icon-4.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                                <h2 class="title-1">worldwide shipping</h2> 
                                                <p>Our network covers over 200 countries worldwide</p>                                            
                                            </div>  
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">                                
                                <img alt="" src="assets/img/block/about-img.png" class="effect animated fadeInRight" />
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.About Us -->

                <!-- More About Us -->
                <section class="pad-30 more-about-wrap">
                    <div class="theme-container container pb-100">               
                        <div class="row">
                            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="more-about clrbg-before">
                                    <h2 class="title-1">Proven Industry Expertise</h2>
                                    <div class="pad-10"></div>
                                    <p>Whether your freight is moving across the nation or across the ocean, <?= $settings->siteTitle; ?> experienced management team and dedicated staff of professionals knows how to get it there at maximum efficiency. Collectively, our team has decades of logistics and supply chain management expertise, giving you the peace of mind that comes from working with a partner you can truly trust.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="more-about clrbg-before">
                                    <h2 class="title-1">Flexible Transportation Solutions!</h2>
                                    <div class="pad-10"></div>
                                    <p>Today’s business landscape requires transportation solutions that are both versatile and flexible, and produce the efficiency and cost benefits that satisfy the executive suite. At <?= $settings->siteTitle; ?>, we blend together the best available asset-based and non-asset based offerings in the logistics and transportation industry.</p>
                                </div>
                            </div>
                            <div class="col-md-4  col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
                                <div class="more-about clrbg-before">
                                    <h2 class="title-1">Friendly, HELPFUL people that understand client needs.</h2>
                                    <div class="pad-10"></div>
                                    <p>Why hire a group of grumpy, un-cooperative movers, when you can have friendly, upbeat people that work on YOUR behalf? We hire based on qualifications and something more… Friendliness. We look for people that will take time to answer your questions and help out with requests as they come up.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.More About Us -->
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

<!-- Mirrored from event-theme.com/themes/GO-Courier/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jun 2021 07:25:02 GMT -->
</html>
