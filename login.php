<?php
    include('inc/config.php');
    include('inc/session.php');
    if(isset($_SESSION['user'])){
      header('location: account/dashboard.php');
    }
    include('admin/includes/format.php');

    $page_name = 'Login';
    $banner_name = 'Staff Sign In';
    $page_tagline = 'Enter your details to sign into your dashboard';
    $page_parent = '';
    $page_parent_url = '';
    $page_banner = 'assets/img/background/tracking-banner.jpg';
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

                <!-- Tracking -->
                <section class="pt-50 pb-50 tracking-wrap">    
                    <div class="theme-container container ">  
                        <div class="row pad-10">
                            <div class="col-md-8 col-md-offset-2 tracking-form wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="login-wrap text-center">                        
                                    <h2 class="title-3"> sign in </h2>
                                    <p> Sign in to your <strong> <?= $settings->siteTitle; ?> </strong> dashboard </p>  

                                    <?php
                                        if(isset($_SESSION['error'])){
                                          echo "
                                            <div class='callout callout-danger text-center padding-top-10 padding-bottom-10'>
                                              <p>".$_SESSION['error']."</p> 
                                            </div>
                                          ";
                                          unset($_SESSION['error']);
                                        }
                                        if(isset($_SESSION['success'])){
                                          echo "
                                            <div class='callout callout-success text-center padding-top-10 padding-bottom-10'>
                                              <p>".$_SESSION['success']."</p> 
                                            </div>
                                          ";
                                          unset($_SESSION['success']);
                                        }
                                    ?>                      

                                    <div class="login-form clrbg-before">
                                        <form class="login" role="form" method="post" action="admin/verify.php">
                                            <div class="form-group"><input type="email" name="email" placeholder="Email address" class="form-control"></div>
                                            <div class="form-group"><input type="password" name="password" placeholder="Password" class="form-control"></div>
                                            <div class="form-group">
                                                <button class="btn-1 " type="submit" name="login"> Sign in now </button>
                                            </div>
                                        </form>
                                        <a href="password-forgot" class="gray-clr"> Forgot Password? Click here to reset your password</a>                            
                                    </div>                        
                                </div>
                                <div class="create-accnt">
                                    <a href="javascript:void()" class="white-clr"> Not a Staff? </a>  
                                    <h2 class="title-2"> <a href="career" class="green-clr under-line">Check out our opportunities, to see if we have an opening for you</a> </h2>
                                </div>
                            </div>    
                        </div>
                    </div>
                </section>
                <!-- /.Tracking -->

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