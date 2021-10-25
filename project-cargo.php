<?php
    include('inc/config.php');
    include('inc/session.php');
    include('admin/includes/format.php');

    $page_name = 'Project Cargo';
    $banner_name = 'Project Cargo';
    $page_tagline = 'Immense expertise, experience and knowledge to expedite international movements of your project cargo.​';
    $page_parent = 'Freights';
    $page_parent_url = 'javascript:void()';
    $page_banner = 'assets/img/background/projectcargo-banner.jpg';
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
                                        <a href="javascript:void()"> <img alt="" src="assets/img/block/main_projectcargo3-1.jpg"> </a>
                                    </div>
                                    <div class="post-content">
                                        <h6 class="title-2 fs-10">Project Cargo</h6>
                                        <p>roject Cargo is a specialized field of Freight Forwarding that requires immense expertise, experience and knowledge. <?= $settings->siteTitle; ?> are amongst a very small number of based international freight forwarders, able to provide this specialized shipping service to expedite international movements of project cargo. Our Company has in-depth knowhow on which shipping line is best suited to your requirements; whether the consignment is to be shipped on a Flat Rack, break bulk vessel, or a roll-on-roll-off vessel. Project Cargo can also encompass ocean freight, air freight road and rail from site to installation. This requires managing a huge array of different infrastructures and regulatory bodies which we have capably handled in the past as well.</p>
                                        <p>We have various special equipments like Flat Racks, Flat Beds, Open Top Containers and GP Containers for shipment of any odd dimension equipments across any sea-ports.</p>
                                        <p>Project Cargo has fewer options of services, routes and transshipment points than non heavy equipment shipments, so it is essential to partner with a Project Cargo specialist such as <?= $settings->siteTitle; ?>. We take the time and hassle out of trying to find best choice suited to your requirements, as we have spent many years identifying and examining the best shipping routes for you. We offer you our extensive knowledge and experience of previous cargo projects to you. Allow us to quickly identify the most efficient route and service to ensure your project cargo arrives at its destination in the best time and at the most competitive cost.</p>
                                        <p>A sample of what we can do:
                                            <ul>
                                                <li>Heavy Equipment Shipping.</li>
                                                <li>Loading & lashing, handled by experienced professionals, who understand loading points and weight distribution so that there is no unruly movement of your cargo during transit.</li>
                                                <li>Full & Partial Charters.</li>
                                                <li>Break Bulk Shipments.</li>
                                                <li>Consolidation and Packing Containerization.</li>
                                                <li>RO-RO service.</li>
                                                <li>Open Tops, Flat Racks and Flat Bed Containers.</li>
                                            </ul>
                                        </p>
                                        <p>We pride ourselves in discussing and understanding your needs ,of these specialized projects, so we can offer you the best possible solution. Our team understands what is required to freight your shipment to your destination in the safest and most economical configuration.</p>
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