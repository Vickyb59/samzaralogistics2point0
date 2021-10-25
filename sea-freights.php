<?php
    include('inc/config.php');
    include('inc/session.php');
    include('admin/includes/format.php');

    $page_name = 'Sea Freights';
    $banner_name = 'Sea Freights';
    $page_tagline = 'We deliver highly flexible services through our partnerships with leading shipping lines.';
    $page_parent = 'Freights';
    $page_parent_url = 'javascript:void()';
    $page_banner = 'assets/img/background/seafreights-banner.jpg';
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
                                        <a href="javascript:void()"> <img alt="" src="assets/img/block/main_seafreight3-1.jpg"> </a>
                                    </div>
                                    <div class="post-content">
                                        <h6 class="title-2 fs-10">Sea Freights</h6>
                                        <p>At <?= $settings->siteTitle; ?>, we deliver highly flexible services through our partnerships with leading shipping lines. The cultivation of long-term, secure partnerships with major shipping lines brings tangible benefits to our customers as we have reliable links with all commercial centres worldwide which is why our Sea Freight services are among the best in the marketplace. Through these connections we can guarantee capacity and also offer adaptability to the ever changing shipping regulations of every country and port thus enabling a smooth passage for your consignment.</p>
                                    </div>
                                    <div class="row pt-50">
                                        <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="more-about clrbg-before">
                                                <div class="freights-img darkclr-border theme-clr font-2 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s">
                                                    <img alt="" src="assets/img/block/ocean-freight.jpg" />
                                                </div>
                                                <h2 class="title-1">Ocean Freight</h2>
                                                <div class="pad-10"></div>
                                                <p>No matter how small or big your cargo, commercial shipments of 20' or 40' FCL Containers as well as smaller LCL ,Console cargo are handled with same individual care. For us no cargo is big or small and every size is valuable.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="more-about clrbg-before">
                                                <div class="freights-img darkclr-border theme-clr font-2 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">
                                                    <img alt="" src="assets/img/block/lcl.jpg" />
                                                </div>
                                                <h2 class="title-1">Less Than Container Load</h2>
                                                <div class="pad-10"></div>
                                                <p>Less Than Container load (LCL) consolidation of cargo to / from all major ports across continents.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4  col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
                                            <div class="more-about clrbg-before">
                                                <div class="freights-img darkclr-border theme-clr font-2 wow fadeInRight" data-wow-offset="50" data-wow-delay=".25s">
                                                    <img alt="" src="assets/img/block/fcl.jpg" />
                                                </div>
                                                <h2 class="title-1">Full Container Load</h2>
                                                <div class="pad-10"></div>
                                                <p>Full Container Load(FCL) 20'GP, 40'GP. & 40'HC container service for volume cargo.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-30">
                                        <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="more-about clrbg-before">
                                                <div class="freights-img darkclr-border theme-clr font-2 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s">
                                                    <img alt="" src="assets/img/block/odc.jpg" />
                                                </div>
                                                <h2 class="title-1">Over Dimensional Cargo</h2>
                                                <div class="pad-10"></div>
                                                <p>We provide special equipments like Flat rack, Open Top Containers of 20' and 40' sizes for Shipping odd dimension and outguage cargo for all major sea port destinations.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="more-about clrbg-before">
                                                <div class="freights-img darkclr-border theme-clr font-2 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">
                                                    <img alt="" src="assets/img/block/breakbulk.jpg" />
                                                </div>
                                                <h2 class="title-1">Break Bulk</h2>
                                                <div class="pad-10"></div>
                                                <p>With tie-ups with all leading shipping lines and reserved slots we ensure the best possible freight rates and transit times for your cargo to reach its Sea port or door.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4  col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
                                            <div class="more-about clrbg-before">
                                                <div class="freights-img darkclr-border theme-clr font-2 wow fadeInRight" data-wow-offset="50" data-wow-delay=".25s">
                                                    <img alt="" src="assets/img/block/harzardouscargo.jpg" />
                                                </div>
                                                <h2 class="title-1">Hazardous Cargo</h2>
                                                <div class="pad-10"></div>
                                                <p>We have a qualified personals to handle hazardous shipments which require a high degree of care and observation to minute details for each class of cargo.</p>
                                            </div>
                                        </div>
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