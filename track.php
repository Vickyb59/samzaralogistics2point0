<?php
    include('inc/config.php');
    include('inc/session.php');
    include('admin/includes/format.php');

    $page_name = 'Track';
    $banner_name = 'Product Tracking';
    $page_tagline = 'Track your product & see where it is';
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
                                <h2 class="title-1"> track your product </h2> <span class="font2-light fs-12">Now you can track your product easily</span>
                                <div class="row">
                                    <form class="" action="inc/track.php" method="post">
                                        <div class="col-md-7 col-sm-7">
                                            <div class="form-group">
                                                <input type="text" name="trackingId" placeholder="Enter your product ID" required="" class="form-control box-shadow">
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-5">
                                            <div class="form-group">
                                                <button type="submit" name="trackItem" class="btn-1">track your product</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <p class="fs-16"> Powered by <span> Peak Tracking </span> Unified Api </p>
                            </div>    
                        </div>
                    </div>
                </section>
                <!-- /.Tracking -->

                <!-- FAQ Section -->
                <section class="pad-30 more-about-wrap">
                    <div class="theme-container container pb-100">               
                        <div class="row">
                            <h2 class="title-1"> Frequently Asked Questions </h2>
                            <div class="accordion-first clearfix acord_mar_non">
                               <div class="accordion" id="accordion2">

                                  <div class="accordion-group">
                                     <div class="accordion-heading"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse1"> <em class="icon-fixed-width fa fa-plus"></em>What Is a Tracking Number & Where Can I Find It?</a> </div>
                                     <div id="collapse1" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                           <p> A tracking number or ID is a combination of numbers and possibly letters that uniquely identifies your shipment for national or international tracking.<br/>
                                            Usually, the shipper or online shop is able to provide the tracking number or ID. If you have ordered a product in an online shop, the confirmation email or shipment tracking notification often contains the tracking number or ID.<br/>
                                            If not, please contact your shipper or online shop.<br/>
                                           </p>
                                           
                                        </div>
                                        
                                     </div>
                                  </div>

                                  <div class="accordion-group">
                                     <div class="accordion-heading"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse2"> <em class="icon-fixed-width fa fa-plus"></em>When will my tracking information appear?</a> </div>
                                     <div id="collapse2" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                           <p>Tracking events usually appear 24-48 hours after receiving the Track and Trace ID. In general, once the shipment has reached our facility, a tracking event will appear.
                                           </p>
                                           
                                        </div>
                                        
                                     </div>
                                  </div>

                                  <div class="accordion-group">
                                     <div class="accordion-heading"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse3"> <em class="icon-fixed-width fa fa-plus"></em>Why is my tracking number/ID not working?</a> </div>
                                     <div id="collapse3" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                           <p>Please make sure you entered the correct tracking number in the correct format. If your tracking ID is not working, please contact your shipper or online shop.
                                           </p>
                                           
                                        </div>
                                        
                                     </div>
                                  </div>

                                  <div class="accordion-group">
                                     <div class="accordion-heading"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse4"> <em class="icon-fixed-width fa fa-plus"></em>If I do not have my tracking number, is it still possible to track my shipment?</a> </div>
                                     <div id="collapse4" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                           <p>If you do not have a tracking number, we advise you to contact your shipper. However, if you have other shipping reference numbers, you may contact our customer support to provide assistance.
                                           </p>
                                           
                                        </div>
                                        
                                     </div>
                                  </div>

                               </div>
                               <!-- end accordion --> 
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.FAQ Section -->

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