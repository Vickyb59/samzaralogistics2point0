<?php
    include('inc/config.php');
    include('inc/session.php');
    include('admin/includes/format.php');

    $page_name = 'Personal Baggage';
    $banner_name = 'Personal Baggage';
    $page_tagline = 'We ensure your Personal Baggage arrive at their destination in the same condition in which they left you.';
    $page_parent = 'Services';
    $page_parent_url = 'javascript:void()';
    $page_banner = 'assets/img/background/personalbaggage-banner.jpg';
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
                                        <a href="javascript:void()"> <img alt="" src="assets/img/block/main_personalbaggage3-1.jpg"> </a>
                                    </div>
                                    <div class="post-content">
                                        <h6 class="title-2 fs-10">Personal Baggage</h6>
                                        <p>Your products are valuable; they may be priceless, they must arrive at their destination in the same condition in which they left you. To achieve this they must be protected and cared for, cargo insurers expect this. <?= $settings->siteTitle; ?> offers specialist customs cases individually prepared to the exact size and specification required, providing the appropriate level of protection. Whether built around the project itself or in a component form for subsequent packing, they will always conform to a high standard of quality. The product itself can be collected from you and packed in our dedicated facilities or on site service at your own premises.</p>
                                        <p>It’s all very well getting your cargo safely to or moving out of , but the processes involved in actually moving those goods the final few steps across borders can be quite complex and frustrating. It is essential that your chosen agent gets to know your products, has the experience necessary to wade through the red-tape, and the efficiency to clear your effects quickly and smoothly through complex customs procedures.</p>
                                        <p>A sample of what we can do:
                                            <ul>
                                                <li>Relocations</li>
                                                <li>Packing</li>
                                                <li>Crating</li>
                                                <li>Moving</li>
                                                <li>Customs and road transport</li>
                                                <li>Vehicle and Pets relocation</li>
                                                <li>Shipping / Air Transport logistics</li>
                                                <li>Insurance</li>
                                                <li>torage and setup at client destination</li>
                                            </ul>
                                        </p>
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