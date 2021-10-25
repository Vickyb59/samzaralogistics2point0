<?php
    include('inc/config.php');
    include('inc/session.php');
    include('admin/includes/format.php');

    $id = $_REQUEST['id'];

    $page_name = 'Job Details';
    $banner_name = 'Vacancy';
    $page_tagline = 'At Samzara, our staff are our most important Resource.';
    $page_parent = 'Career';
    $page_parent_url = 'career';
    $page_banner = 'assets/img/background/personalbaggage-banner.jpg';
    $page_title = 'Welcome to the Official Website of '.$settings->siteTitle;
    $page_description = $settings->siteDescription;
    include('inc/head.php');

    $jobQuery = $conn->prepare("SELECT * from jobs where id = ? LIMIT 1");
    $jobQuery->execute(array($id));
    $job = $jobQuery->fetch(PDO::FETCH_OBJ); 

    $job_id = $job->id;
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
                    <span class="bg-text"> JOB DETAILS </span>
                </section>
                <!-- /.About Us -->

                <!-- More About Us -->
                <section class="pad-30 more-about-wrap">
                    <div class="theme-container container pb-100">               
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="more-about clrbg-before">
                                    <h2 class="title-1"><?= $job->title; ?></h2>
                                    <div class="pad-10"></div>
                                    <p><?= $job->description; ?></p>
                                    <a class="apply-to-job" href="join.php?appId=323&pst=<?= base64_encode("$job->title") ?>"><i class="fa fa-briefcase job-card-icon"></i> Apply to Job</a>
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
