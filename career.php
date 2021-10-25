<?php
    include('inc/config.php');
    include('inc/session.php');
    include('admin/includes/format.php');

    $page_name = 'Career';
    $banner_name = 'Career';
    $page_tagline = 'At Samzara, our staff are our most important Resource.';
    $page_parent = '';
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
                                    <div class="post-content">
                                        <h6 class="title-2 fs-10">WHY JOIN SAMZARA LOGISTICS?</h6>
                                        <p>At Samzara Logistics, our staff are our most important Resource. We are focused on making our Company a dynamic and exciting workplace where everybody has the chance to flourish and excel. It’s a place where we are glad to have prospects bring in their gift-sets and talents, and together with the rest members of the team, we collaborate to achieve the Corporate Vision of our great Company.</p>
                                        <p>Our commitment to career development and value creation for our clients is unwavering. Investing in building and developing the desired capacity for our staff to deliver effectively on the job is of utmost priority to us. If your dream is to belong to a Company where you can expressly showcase your talents and build on existing competence, then SAMZARA LOGISTICS is the place for you, reach out to us today.<br/>
                                        <a href="jobopenings">Click Here </a>to See Available Job Openings</p>
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