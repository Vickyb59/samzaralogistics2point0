<?php
    include('inc/config.php');
    include('inc/session.php');
    include('admin/includes/format.php');

    $page_name = 'Custom Clearance';
    $banner_name = 'Custom Clearance';
    $page_tagline = 'We offer professional customs clearance services for import or export consignments.';
    $page_parent = 'Services';
    $page_parent_url = 'javascript:void()';
    $page_banner = 'assets/img/background/customclearance-banner.jpg';
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

                <!-- Blog -->
                <div class="theme-container container">
                    <div class="row">
                        <div class="blog-wrap  pt-80 pb-50 clearfix">
                            <section class="col-md-12 col-sm-12 pb-50">                         
                                <article class="post-wrap pb-50">
                                    <div class="post-img pb-10">
                                        <a href="javascript:void()"> <img alt="" src="assets/img/block/main_customclearance3-1.jpg"> </a>
                                    </div>
                                    <div class="post-content">
                                        <h6 class="title-2 fs-10">Custom Clearance</h6>
                                        <p><?= $settings->siteTitle; ?> offer professional customs clearance services for import or export consignments by air and sea at all major air and seaports. Our nationally licensed staff work closely with clients to help them avoid costly penalties and delays while the goods are under customs hold by ensuring fast and smooth clearance of cargo.</p>
                                        <p>We offer a complete portfolio of brokerage services for both Import and Export custom clearance to our clients (including duty drawback, full product line classification, compliance management, duty reduction assistance, etc.). Our electronic interface with Customs and other government agencies through the Automated Broker Interface permits us to clear your shipment immediately on landing. This allows us to streamline the movement of your cargo and further reduce your overall cycle time.</p>
                                        <p>We also offer reimport and reexport clearance of goods with follow up on all documentation and custom formalities. We place special emphasis on total transparency and integrity in our financial transactions with competent authorities.</p>
                                    </div>

                                </article>

                            </section>                
                        </div>
                    </div>
                </div>
                <!-- /.Blog -->

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