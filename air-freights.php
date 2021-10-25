<?php
    include('inc/config.php');
    include('inc/session.php');
    include('admin/includes/format.php');

    $page_name = 'Air Freights';
    $banner_name = 'Air Freights';
    $page_tagline = 'We are well equipped to provide customized end to end delivery of your cargo.​';
    $page_parent = 'Freights';
    $page_parent_url = 'javascript:void()';
    $page_banner = 'assets/img/background/airfreights-banner.jpg';
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
                                        <a href="javascript:void()"> <img alt="" src="assets/img/block/main_airfreight3-1.jpg"> </a>
                                    </div>
                                    <div class="post-content">
                                        <h6 class="title-2 fs-10">Air Freights</h6>
                                        <p><?= $settings->siteTitle; ?> offers to our clients ,a cost effective,secure,timely and efficient solution for all airfreight shipments, to and from any point in the world. We control the entire process from ground transportation,insurance coverage arrangement,air consolidation,arrangement of cargo survey,appropriate and safe warehousing to customs documentation.Time being the essence,we ensure speed matches reliability for your shipment.</p>
                                        <p>We provide a complete package of air logistics services, including:
                                            <ul>
                                                <li>Airfreight forwarding.</li>
                                                <li>Door to Door delivery.</li>
                                                <li>Express delivery.</li>
                                                <li>Insurance coverage arrangement.</li>
                                                <li>Chartering(complete and partial).</li>
                                                <li>Just in time delivery</li>
                                                <li>Hazardous and perishable product handling</li>
                                            </ul>
                                            <?= $settings->siteTitle; ?>, we believe in offering the best possible service to our clients and so we can modify our offerings to ensure that our products are tailor made to you needs .We have no qualms in saying that we can offer a perfect solution for your requirement,be it a single shipment or a multi plane chartering operation.You can bank on us to reach your freight at your designated place in the designated time.</p>
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