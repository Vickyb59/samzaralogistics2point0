<?php
    include('inc/config.php');
    include('inc/session.php');
    include('admin/includes/format.php');

    $page_name = 'Warehousing';
    $banner_name = 'Warehousing';
    $page_tagline = 'We offer secure storing and warehousing facilities.';
    $page_parent = 'Services';
    $page_parent_url = 'javascript:void()';
    $page_banner = 'assets/img/background/warehousing-banner.jpg';
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
                                        <a href="javascript:void()"> <img alt="" src="assets/img/block/main_warehousing3-1.jpg"> </a>
                                    </div>
                                    <div class="post-content">
                                        <h6 class="title-2 fs-10">Warehosing</h6>
                                        <p>We offer secure storing and warehousing facilities at strategic locations near CFS facilities and at inland depots. Our warehouses are clean, temperature controlled and have flexible work hours .It allows our clients to maximize productivity and minimize travel time between locations to enable better pickup facility and faster turnaround times. We help you to reduce your capital operating costs and we make sure that operational and safety protocols are carefully followed for all stored goods at our site relieving you of all your worries.</p>
                                        <p>Warehousing and distribution are an integrated part of <?= $settings->siteTitle; ?> solutions, including receipt and put-away, storage, order pick, order pack, dispatching and stock control. We provide warehousing as a component of distribution. Our objective is to optimize and streamline our customers’ warehousing and distribution processes.</p>
                                        <p>To anticipate to the growing demands for warehousing and distribution we are fully prepared for any challenges that might arise.</p>
                                        <p><?= $settings->siteTitle; ?> services now offers short and long term storage facilities for our customer’s cargoes. Our customers can look services including packing and redistribution, customs examination and clearance and also cold storage.</p>
                                        <p>We have well maintained, organized, and equipped warehouses at convenient locations.
                                            <ul>
                                                <li>Warehouse Safety Systems</li>
                                                <li>Proper Maintenance of floors and the building structure</li>
                                                <li>Proper Maintenance of Cranes, forklifts and other material handling equipment</li>
                                                <li>Material Handling equipment operations handled by trained personnel</li>
                                                <li>Loading / Unloading at warehouse handled by trained staff</li>
                                                <li>Proper stacking facility</li>
                                                <li>Rows / Columns / Stacks defined for optimum vertical storage and minimal breakage</li>
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