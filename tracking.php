<?php
    include('inc/config.php');
    include('inc/session.php');
    include('admin/includes/format.php');

    $page_name = 'Shipment';
    $banner_name = 'Shipment Tracking';
    $page_tagline = 'Detailed Information about your package, shipment and freight';
    $page_parent = 'Track';
    $page_parent_url = 'track';
    $page_banner = 'assets/img/background/tracking-banner.jpg';
    $page_title = 'Welcome to the Official Website of '.$settings->siteTitle;
    $page_description = $settings->siteDescription;
    include('inc/head.php');

    if (!isset($_SESSION['trackingId'])) {
    $_SESSION['msg'] = "You have to track an item";
    header('location: track-a-shipment.php');
    }

    //code for static detail on site
    $trackingId = $_SESSION["trackingId"];
    $query = $connection->prepare("SELECT * from tracking where trackingId = ? LIMIT 1 ");
    $query->execute(array($trackingId));
    if($query->rowCount()){
      $itemInfo = $query->fetch(PDO::FETCH_OBJ);
    }

    //code for current status at the top
    $query = $connection->prepare("SELECT * from update_tracking where id = (SELECT max(id) FROM update_tracking where trackingId=?) LIMIT 1 ");
    $query->execute(array($trackingId));
    if($query->rowCount()){
      $history = $query->fetch(PDO::FETCH_OBJ);
    }

    //code for ever increasing tracking history
    $trackinghistory = "";

    $trackinghistoryQuery = $connection->prepare("SELECT * from update_tracking WHERE trackingId = ? order by 1 desc LIMIT 10000 ");
    $trackinghistoryQuery->execute(array($trackingId));
    if ($trackinghistoryQuery->rowCount()) {
      $trackinghistory = $trackinghistoryQuery->fetchAll(PDO::FETCH_OBJ);
    }else{
      $trackinghistory = "";
    }

    $shipouttime = strtotime($itemInfo->dateShipped);
    $currenttime = strtotime($history->dateAndTime);
    $deliverytime = strtotime($itemInfo->expDelDate);

    $daysspent = ceil(($currenttime - $shipouttime) / (60 * 60 * 24));
    $daysleft = ceil(($deliverytime - $currenttime) / (60 * 60 * 24));



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

                        <div class="track-header pb-30">
                            <div class="row text-center purple-clr">
                                <h4><?= $itemInfo->trackingId; ?></h4>
                                <h3><?= $history->status; ?> <span class="block-inline pt-10"><?= date('l jS \of F Y h:i:s A', strtotime($history->dateAndTime)); ?></span> </h3>
                                
                            </div>
                            
                        </div>

                        <div class="progress-wrap pb-50" <?php if ($history->status == 'Delivered') { echo 'style="display: none;"';} ?>>
                            <div class="progress-status">
                                <span class="border-left"></span>
                                <span class="border-right"></span>
                                <span class="dot dot-left wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"></span>
                                <span class="themeclr-border wow fadeIn" data-wow-offset="50" data-wow-delay=".50s">  <span class="dot dot-center theme-clr-bg"></span> </span>
                                <span class="dot dot-right wow fadeIn" data-wow-offset="50" data-wow-delay=".60s"></span>
                            </div>
                            <div class="row progress-content upper-text">
                                <div class="col-md-3 col-xs-8 col-sm-2">
                                    <p class="fs-12 no-margin"> FROM </p>
                                    <h2 class="title-1 no-margin"><?= $itemInfo->origin; ?></h2>
                                </div>
                                <div class="col-md-2 col-xs-8 col-sm-3">
                                    <p class="fs-12 no-margin"> [ <b class="black-clr"><?= $daysspent; ?> DAY(S) </b> ] </p>                                
                                </div>
                                <div class="col-md-4 col-xs-8 col-sm-4 text-center">
                                    <p class="fs-12 no-margin"> currently in </p>
                                    <h2 class="title-1 no-margin"><?= $history->location; ?></h2>
                                </div>
                                <div class="col-md-1 col-xs-8 col-sm-1 no-pad">
                                    <p class="fs-12 no-margin"> [ <b class="black-clr"><?= $daysleft; ?> DAY(S) </b> ] </p>                                
                                </div>
                                <div class="col-md-2 col-xs-8 col-sm-2 text-right">
                                    <p class="fs-12 no-margin"> to </p>
                                    <h2 class="title-1 no-margin"><?= $itemInfo->destination; ?></h2>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-first clearfix acord_mar_non">
                            <div class="accordion" id="accordion2">

                                <div class="accordion-group">
                                    <div class="accordion-heading tracking"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse3"> <em class="icon-fixed-width fa fa-arrow-down"></em>View Sender/ Receiver Details</a> </div>
                                    <div id="collapse3" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-6 prod-info white-clr">
                                                        <ul>
                                                            <li> <span class="title-2">SENDER:</span> <span class="fs-16"><?= $itemInfo->sender; ?></span> </li>
                                                            <li> <span class="title-2">SENDER ADDRESS:</span> <span class="fs-16"><?= $itemInfo->senderAdd; ?></span> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6 prod-info white-clr">
                                                        <ul>
                                                            <li> <span class="title-2">RECEIVER:</span> <span class="fs-16"><?= $itemInfo->receiver; ?></span> </li>
                                                            <li> <span class="title-2">RECERIVER ADDRESS:</span> <span class="fs-16"><?= $itemInfo->receiverAdd; ?></span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                           
                                        </div>
                                    
                                    </div>
                                </div>

                                <div class="accordion-group">
                                    <div class="accordion-heading tracking"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse1"> <em class="icon-fixed-width fa fa-arrow-down"></em>View Full Shipment Facts</a> </div>
                                    <div id="collapse1" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 prod-info white-clr">
                                                        <ul>
                                                            <li> <span class="title-2">TRACKING NUMBER:</span> <span class="fs-16"><?= $itemInfo->trackingId; ?></span> </li>
                                                            <li> <span class="title-2">SERVICE:</span> <span class="fs-16"><?= $itemInfo->service; ?></span> </li>
                                                            <li> <span class="title-2">REFERENCE:</span> <span class="fs-16"><?= $itemInfo->reference; ?></span> </li>
                                                            <li> <span class="title-2">WEIGHT:</span> <span class="fs-16 theme-clr"><?= $itemInfo->weight; ?></span> </li>
                                                            <li> <span class="title-2">DIMENSIONS:</span> <span class="fs-16"><?= $itemInfo->dimensions; ?></span> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4 prod-info white-clr">
                                                        <ul>
                                                            <li> <span class="title-2">TOTAL PIECES:</span> <span class="fs-16"><?= $itemInfo->quantity; ?></span> </li>
                                                            <li> <span class="title-2">TERMS:</span> <span class="fs-16"><?= $itemInfo->terms; ?></span> </li>
                                                            <li> <span class="title-2">PURCHASE ORDER NUMBER:</span> <span class="fs-16"><?= $itemInfo->orderNum; ?></span> </li>
                                                            <li> <span class="title-2">INVOICE NUMBER:</span> <span class="fs-16"><?= $itemInfo->invoiceNum; ?></span> </li>
                                                            <li> <span class="title-2">SHIPMENT ID:</span> <span class="fs-16 theme-clr"><?= $itemInfo->shipmentId; ?></span> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4 prod-info white-clr">
                                                        <ul>
                                                            <li> <span class="title-2">PACKAGE:</span> <span class="fs-16"><?= $itemInfo->package; ?></span> </li>
                                                            <li> <span class="title-2">SHIP DATE:</span> <span class="fs-16"><?= $itemInfo->dateShipped; ?></span> </li>
                                                            <li> <span class="title-2">STANDARD TRANSIT:</span> <span class="fs-16"><?= $itemInfo->expDelDate; ?></span> </li>
                                                            <li> <span class="title-2">ACTUAL DELIVERY:</span> <span class="fs-16 theme-clr"><?= date("F j, Y g:i a", strtotime($history->dateAndTime)); ?> </span> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                           
                                        </div>
                                    
                                    </div>
                                </div>

                                <div class="accordion-group">
                                    <div class="accordion-heading tracking"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse2"> <em class="icon-fixed-width fa fa-arrow-down"></em>View Travel History</a> </div>
                                    <div id="collapse2" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="prod-info white-clr">
                                                <ul class="tracking-history">

                                                    <li> <span class="history-title date">Date/Time</span><span class="history-title location">Location</span><span class="history-title details">Info</span> </li>

                                                    <?php foreach ($trackinghistory as $hist) : ?>
                                                        <!-- Start Timeline Item #01 -->
                                                        <li <?= ( $hist->status == 'On Hold') ? 'style="background-color: #940515;"' : ''; ?>  <?= ( $hist->status == 'Delivered') ? 'style="background-color: #059428;"' : ''; ?>> <span class="fs-16 date"><?= date('D, jS \of M, Y -- h:i:s A', strtotime($hist->dateAndTime)); ?></span><span class="fs-16 location"><?= $hist->location; ?></span><span class="fs-16 details"><?= $hist->remark; ?></span> </li>

                                                    <?php endforeach; ?>

                                                </ul>
                                            </div>
                                           
                                        </div>
                                    
                                    </div>
                                </div>

                            </div>
                            <!-- end accordion --> 
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