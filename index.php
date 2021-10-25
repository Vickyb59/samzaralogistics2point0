<?php
    include('inc/config.php');
    include('inc/session.php');
    include('admin/includes/format.php');

    $page_name = 'Home';
    $page_parent = '';
    $page_title = 'Welcome to the Official Website of '.$settings->siteTitle;
    $page_description = $settings->siteDescription;
    include('inc/head.php');
?>
    <body id="home">
        <!-- Preloader -->
        <?php include('inc/pre-loader.php') ?>
        <!-- /.Preloader -->


        <!-- Main Wrapper -->        
        <main class="wrapper">

            <!-- Header -->
            <?php include('inc/header.php') ?>
            <!-- /.Header -->

            <!-- Content Wrapper -->
            <article> 
                <!-- Slider -->
                <?php include('inc/slider.php') ?>
                <!-- /.Slider -->

                <!-- Track Product -->
                <section>
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 track-prod clrbg-before wow slideInUp" data-wow-offset="50" data-wow-delay=".20s">     
                                <h2 class="title-1"> track your shipment </h2> <span class="font2-light fs-12">Enter your tracking number to track your item easily</span>
                                <div class="row">
                                    <form class="" action="inc/track.php" method="post">
                                        <div class="col-md-7 col-sm-7">
                                            <div class="form-group">
                                                <input type="text" name="trackingId" placeholder="Enter your tracking ID" required="" class="form-control box-shadow">
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-5">
                                            <div class="form-group">
                                                <button class="btn-1" type="submit" name="trackItem">track your shipment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </section>
                <!-- /.Track Product -->

                <!-- About Us -->
                <section class="pad-80 about-wrap clrbg-before">
                    <span class="bg-text wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> About </span>
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-us">  
                                    <h2 class="section-title pb-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> About Us </h2>
                                    <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s"><?= $settings->siteTitle; ?> has hands-on management, local port knowledge and experience, and expresses a desire to build a lasting service relationship. We take the time to get to know you and your business, going the extra mile to make certain your shipments arrive or depart without problems or delay.</p>
                                    <ul class="feature">
                                        <li> 
                                            <img alt="" src="assets/img/icons/icon-2.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                                <h2 class="title-1">Fast delivery</h2> 
                                                <p>Deliveries are done without issues and ontime</p>                                            
                                            </div>  
                                        </li>
                                        <li> 
                                            <img alt="" src="assets/img/icons/icon-3.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                                <h2 class="title-1">secured service</h2> 
                                                <p>Our trusted workers ensures goods get to you without tampering</p>                                            
                                            </div>  
                                        </li>
                                        <li> 
                                            <img alt="" src="assets/img/icons/icon-4.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                                <h2 class="title-1">worldwide shipping</h2> 
                                                <p>Our network covers over 200 countries worldwide</p>                                            
                                            </div>  
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="pb-80 visible-lg"></div>
                                <img alt="" src="assets/img/block/about-img.png" class="wow slideInRight" data-wow-offset="50" data-wow-delay=".20s" />
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.About Us -->

                <!-- Service Section -->
                <section class="pad-30 more-about-wrap">
                    <div class="theme-container container pb-100">               
                        <div class="row">
                            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="more-about clrbg-before">
                                    <div class="service-img darkclr-border theme-clr font-2 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s">
                                        <img alt="" src="assets/img/block/air-freight.jpg" />
                                    </div>
                                    <h2 class="title-1">Seafreight</h2>
                                    <div class="pad-10"></div>
                                    <p>We deliver highly flexible services through our partnerships with leading shipping lines. cultivation of long-term, secure partnerships with major shipping lines brings tangible benefits to our customers.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="more-about clrbg-before">
                                    <div class="service-img darkclr-border theme-clr font-2 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">
                                        <img alt="" src="assets/img/block/sea-freight.jpg" />
                                    </div>
                                    <h2 class="title-1">Airfreight</h2>
                                    <div class="pad-10"></div>
                                    <p><?= $settings->siteTitle; ?> offers to our clients ,a cost effective,secure,timely and efficient solution for all airfreight shipments, to and from any point in the world.</p>
                                </div>
                            </div>
                            <div class="col-md-4  col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
                                <div class="more-about clrbg-before">
                                    <div class="service-img darkclr-border theme-clr font-2 wow fadeInRight" data-wow-offset="50" data-wow-delay=".25s">
                                        <img alt="" src="assets/img/block/road-transport.jpg" />
                                    </div>
                                    <h2 class="title-1">Road Transport</h2>
                                    <div class="pad-10"></div>
                                    <p>With our expertise in road and rail logistics operations,we can offer optimum,reasonable,coordinated and competent transport solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Service Section -->

                <!-- Calculate Your Cost -->
                <section class="calculate pt-100">
                    <div class="theme-container container">  
                        <span class="bg-text right wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> <i class="fa fa-plane"></i> </span>
                        <div class="row">
                            <div class="col-md-6 text-center courier-man">
                                <img src="assets/img/block/Courier-Man.png" alt="" class="wow slideInLeft" data-wow-offset="50" data-wow-delay=".20s" />
                            </div>
                            <div class="col-md-6">   
                                <div class="pad-10"></div>
                                <h2 class="section-title pb-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" > calculate your cost </h2>
                                <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">calculate your cost and know the price for a shipment</p>
                                <div class="calculate-form">
                                    <form class="row">
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> height (cm): </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="height" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> width (cm): </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="width" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> depth (cm): </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="depth" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> weight (kg): </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="weight" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> location: </label></div>
                                            <div class="col-sm-9"> 
                                                <div class="form-group">
                                                    <select data-bind="in:value" data-name="location" class="selectpicker form-control" data-live-search="true" data-width="100%"
                                                            data-toggle="tooltip" title="select delivery distance">
                                                        <option value="cost">Intra State</option>
                                                        <option value="cost * 1.2">Inter State</option>
                                                        <option value="cost * 1.4">Continental</option>
                                                        <option value="cost * 1.8">Intercontinental</option>
                                                        <!--<option value="cost*0.9">Discount Delivery: -10%</option>-->
                                                    </select>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> Package: </label></div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <select data-bind="in:value" data-name="package" class="selectpicker form-control" data-live-search="true" data-width="100%"
                                                            data-toggle="tooltip" title="select your package">
                                                        <option value="cost">Usual Delivery</option>
                                                        <option value="cost * 1.2">Fastest Delivery: * 20%</option>
                                                        <!--<option value="cost*0.9">Discount Delivery: -10%</option>-->
                                                    </select>
                                                </div>
                                            </div>                                        
                                        </div>                                    
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-9 col-xs-12 pull-right"> 
                                                <div class="btn-1"> <span> Total Cost: </span>
                                                    <span data-bind="out:price, f:currency" data-name="cost" class="btn-1 dark">
                                                        <span class="pr-sign">-&nbsp;</span> $<span class="pr-wrap" style="display: none;"><span class="pr">0</span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="pt-80 hidden-lg"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Calculate Your Cost -->

                <!-- Steps -->
                <section class="steps-wrap mask-overlay pad-80">                
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 1. </div> 
                                <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"> 
                                    <h2 class="title-3">Order</h2> 
                                    <p class="gray-clr">Register your <br> package</p>                                            
                                </div>  
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 2. </div> 
                                <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"> 
                                    <h2 class="title-3">Wait</h2> 
                                    <p class="gray-clr">Track your <br> shipment</p>                                            
                                </div>  
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 3. </div> 
                                <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"> 
                                    <h2 class="title-3">Deliver</h2> 
                                    <p class="gray-clr">Customer gets <br> shipment</p>                                            
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="step-img wow slideInRight" data-wow-offset="50" data-wow-delay=".20s"> <img src="assets/img/block/step-img.png" alt="" /> </div>
                </section>
                <!-- /.Steps -->

                <!-- Product Delivery -->
                <section class="prod-delivery pad-120">
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-11 col-md-offset-1">
                                <div class="pt-120 rel-div">
                                    <div class="pb-50 hidden-xs"></div>
                                    <h2 class="section-title wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> Want to return <span class="theme-clr"> an order </span>? </h2>
                                    <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s"> <br>
                                        Returning an online order back to the seller is very easy <br>
                                        Just contact the customer care department and we'll be happy to<br>
                                         help you ou and give you a dropoff location near you</p>
                                    <div class="pb-120 hidden-xs"></div>
                                </div>
                                <div class="delivery-img pt-10">
                                    <img alt="" src="assets/img/block/delivery.png" class="wow slideInLeft" data-wow-offset="50" data-wow-delay=".20s"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Product Delivery -->

                <!-- Testimonial -->
                <section class="testimonial mask-overlay">
                    <div class="theme-container container">               
                        <div class="testimonial-slider no-pagination pad-120">

                            <?php
                                $conn = $pdo->open();

                                try{  
                                    $stmt = $conn->prepare("SELECT * FROM review ORDER BY 1 DESC");
                                    $stmt->execute();
                                    $index = 1;
                                    foreach ($stmt as $row) {
                                        if ($index==1) {
                                            $wow = "wow fadeInUp' data-wow-offset='50' data-wow-delay='.25s'";
                                        }else{
                                            $wow = "'";
                                        }
                                        $image = (!empty($row['photo'])) ? 'images/reviews/'.$row['photo'] : 'images/noimage.jpg';

                                        echo "

                                            <div class='item'>
                                                <div class='testimonial-img darkclr-border theme-clr font-2 ".$wow.">
                                                    <img alt='' src='".$image."' />
                                                    <span>,,</span>
                                                </div>
                                                <div class='testimonial-content'>
                                                    <p class='>  <i class='gray-clr fs-16'>
                                                            ".$row["comment"]."
                                                        </i> </p>
                                                    <h2 class='title-2 pt-10 wow fadeInUp' data-wow-offset='50' data-wow-delay='.20s'> <a href='javascript:void()' class='white-clr fw-900'> ".$row["name"]." </a> </h2>
                                                </div>
                                            </div>

                                        ";
                                    $index++;}
                                }
                                catch(PDOException $e){
                                    echo "There is some problem in connection: " . $e->getMessage();
                                }

                                $pdo->close();

                            ?>
                        </div>
                    </div>
                </section>
                <!-- /.Testimonial -->

                
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

<!-- Mirrored from event-theme.com/themes/GO-Courier/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jun 2021 07:24:25 GMT -->
</html>
