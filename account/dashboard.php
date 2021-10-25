<?php
    include('../inc/config.php');
    include('../admin/includes/format.php');

    include '../admin/session.php';

    $page_name = 'Dashboard';
    $page_parent = '';
    $page_title = 'Welcome to the Official Website of '.$settings->siteTitle;
    $page_description = $settings->siteTitle.' provides quality infrastructure backed high-performance cloud computing services for cryptocurrency mining. Choose a plan to get started today! What are you waiting for? Together We Grow!...';

    include('inc/head.php');

    $id = $_SESSION['user'];

    if(!isset($_SESSION['user'])){
        header('location: ../login.php');
    }

    $today = date('Y-m-d');
    $today_in_secs = strtotime($today);
    $year = date('Y');
    if(isset($_GET['year'])){
        $year = $_GET['year'];
    }

    $sqlId = "SELECT * FROM users WHERE id=".$id;
    $resultId = $conne->query($sqlId);
    $rowId = $resultId->fetch_assoc();

    if($rowId["status"] == 0){
        header('location: profile.php');
    }

    $sql1 = "SELECT *, COUNT(*) AS num_of_tasks FROM task WHERE user_id = ".$id." ORDER BY task_id DESC LIMIT 1";
    $result1 = $conne->query($sql1);
    $row1 = $result1->fetch_assoc();
    $no_of_tasks = $row1['num_of_tasks'];

    if ($row1["task_status"] == "completed") {
        $status = "completed";
    }
    else {
        $status = "pending";
    }

    $sql2 = "SELECT *, COUNT(*) AS num_of_pending_tasks FROM task WHERE user_id = ".$id." && task_status = 'pending' ORDER BY task_id DESC LIMIT 1";
    $result2 = $conne->query($sql2);
    $row2 = $result2->fetch_assoc();
    $no_of_pending_tasks = $row2['num_of_pending_tasks'];

    $time = strtotime($row1["task_delegate_date"]);
    $sanitized_time = date("Y-m-d, g:i A", $time);

    $sql3 = $conn->prepare("SELECT *, COUNT(*) AS num_of_msg FROM direct_message WHERE user_id=$id");
    $sql3->execute();
    $row3 = $sql3->fetch();
    $no_of_msgs = $row3['num_of_msg'];

    $sql4 = $conn->prepare("SELECT *, COUNT(*) AS num_of_unread_msg FROM direct_message WHERE user_id=$id && status=0");
    $sql4->execute();
    $row4 = $sql4->fetch();
    $no_of_unread_msg = $row4['num_of_unread_msg'];

    $sql5 = $conn->prepare("SELECT *, COUNT(*) AS num_of_read_msg FROM direct_message WHERE user_id=$id && status=1");
    $sql5->execute();
    $row5 = $sql5->fetch();
    $no_of_read_msg = $row5['num_of_read_msg'];

    $sql6 = $conn->query("SELECT * FROM task WHERE user_id=$id ORDER BY 1 ASC");
    if ($sql6->rowCount()) {
       $row6 = $sql6->fetchAll(PDO::FETCH_OBJ);
    }

    $task_completed = $task_pending = $task_reassigned = $percent_completed = $percent_pending = $percent_reassigned = 0;

    if (!empty($row6)) {
    
        $sql7 = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM task WHERE user_id = $id && task_status = 'completed' ");
        $sql7->execute();
        $row7 = $sql7->fetch();

        $task_completed = $row7['numrows'];

        $percent_completed = number_format($task_completed*100/$no_of_tasks, 0);

        $sql8 = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM task WHERE user_id = $id && task_status = 'pending' ");
        $sql8->execute();
        $row8 = $sql8->fetch();

        $task_pending = $row8['numrows'];

        $percent_pending = number_format($task_pending*100/$no_of_tasks, 0);

        $sql9 = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM task WHERE user_id = $id && task_status = 'reassigned' ");
        $sql9->execute();
        $row9 = $sql9->fetch();

        $task_reassigned = $row9['numrows'];

        $percent_reassigned = number_format($task_reassigned*100/$no_of_tasks, 0);
        
    }

    /*
    $sql2 = "SELECT * FROM task WHERE user_id = $id ORDER BY trans_id DESC LIMIT 1,1";
    $result2 = $conne->query($sql2);
    $row2 = $result2->fetch_assoc();

    if (empty($row2)) {
        $loss_gain = "";
        $percent_loss_gain = "";
    }elseif ($row1["balance"] > $row2["balance"]) {
        $loss_gain = "Increase";
        $percent_loss_gain = ($row1["balance"] - $row2["balance"]) * 100 / $row2["balance"];
    }elseif ($row2["balance"] > $row1["balance"]) {
        $loss_gain = "Decrease";
        $percent_loss_gain = ($row2["balance"] - $row1["balance"]) * 100 / $row2["balance"];
    }else{
        $loss_gain = "";
        $percent_loss_gain = "";
    }

    $sql3 = "SELECT * FROM transaction WHERE user_id = $id ORDER BY trans_id DESC LIMIT 5";

    $sql4 = "SELECT *, COUNT(*) AS numrows FROM investment WHERE user_id = $id && status = 'in progress' ORDER BY invest_id DESC";
    $result4 = $conne->query($sql4);
    $row4 = $result4->fetch_assoc();

    $no_of_inv = $row4['numrows'];

    $planQuery = $conn->query("SELECT * FROM investment LEFT JOIN investment_plans ON investment_plans.id = investment.invest_plan_id WHERE user_id = $id && status = 'in progress' ORDER BY invest_id DESC");
    if ($planQuery->rowCount()) {
       $row5 = $planQuery->fetchAll(PDO::FETCH_OBJ);
    }

    $sql6 = "SELECT *, COUNT(*) AS numrows FROM investment WHERE user_id = $id && status = 'completed' ORDER BY invest_id DESC";
    $result6 = $conne->query($sql6);
    $row6 = $result6->fetch_assoc();
    $no_of_inv_comp = $row6['numrows'];


    $stmt = $conn->prepare("SELECT * FROM investment WHERE user_id = $id && status = 'completed' ");
    $stmt->execute();

    $total = 0;
    foreach($stmt as $srow){
      $amount = $srow['returns'];
      $total += $amount;
    }

    $allplanQuery = $conn->query("SELECT * FROM investment_plans ORDER BY id ASC");
    if ($allplanQuery->rowCount()) {
       $stmt1 = $allplanQuery->fetchAll(PDO::FETCH_OBJ);
    }

    $total_plan1 = $total_plan2 = $total_plan3 = $percent_plan1 = $percent_plan2 = $percent_plan3 = 0;
    
    $stmt3 = $conn->prepare("SELECT * FROM investment WHERE user_id = $id && status = 'completed' && invest_plan_id = 1 ");
    $stmt3->execute();

    foreach($stmt3 as $prow){
        $amount_plan1 = $prow['returns'];
        $total_plan1 += $amount_plan1;

        $percent_plan1 = number_format($total_plan1*100/$total, 0);
    }

    $stmt3 = $conn->prepare("SELECT * FROM investment WHERE user_id = $id && status = 'completed' && invest_plan_id = 2 ");
    $stmt3->execute();

    foreach($stmt3 as $prow){
        
        $amount_plan2 = $prow['returns'];
        $total_plan2 += $amount_plan2;

        $percent_plan2 = number_format($total_plan2*100/$total, 0);

    } 

    $stmt3 = $conn->prepare("SELECT * FROM investment WHERE user_id = $id && status = 'completed' && invest_plan_id = 3 ");
    $stmt3->execute();

    foreach($stmt3 as $prow){

        $amount_plan3 = $prow['returns'];
        $total_plan3 += $amount_plan3;

        $percent_plan3 = number_format($total_plan3*100/$total, 0);
    }
    */

?>

    <body>
        <!-- Left Sidenav -->
        <?php include('inc/sidebar.php'); ?>
        <!-- end left-sidenav-->
        

        <div class="page-wrapper">
            <!-- Top Bar Start -->
            <?php include('inc/header.php'); ?>
            <!-- Top Bar End -->

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Analytics</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="profile"><?= $row0["full_name"] ?></a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>

                                        <?php
                                            if (empty($row0['nationality'])) {
                                                echo '  
                                                        <div class="alert custom-alert custom-alert-primary icon-custom-alert alert-secondary-shadow fade show" role="alert">
                                                            <i class="mdi mdi-alert-outline alert-icon text-primary align-self-center font-30 mr-3"></i>
                                                            <div class="alert-text my-1">
                                                                <span><a href="profile-edit" class="btn mb-1 btn-primary">Click Here</a> to Complete Your Profile Setup</span>
                                                            </div>
                                                            <div class="alert-close">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                    <span aria-hidden="true"><i class="mdi mdi-close font-16"></i></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    ';
                                            }else{echo '';}

                                        ?>

                                    </div><!--end col-->
                                    <div class="col-auto align-self-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                            <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                            <span class="" id="Select_date">Jan 01</span>
                                            <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                                        </a>
                                    </div><!--end col-->  
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->

                    <?php
                        if(isset($_SESSION['error'])){
                          echo "
                            <div class='alert alert-danger border-0' role='alert'>
                                <i class='la la-skull-crossbones alert-icon text-danger align-self-center font-30 mr-3'></i>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'><i class='mdi mdi-close align-middle font-16'></i></span>
                                </button>
                                <strong>Oh snap!</strong> ".$_SESSION['error']."
                            </div>
                          ";
                          unset($_SESSION['error']);
                        }
                        if(isset($_SESSION['success'])){
                          echo "
                            <div class='alert alert-success border-0' role='alert'>
                                <i class='mdi mdi-check-all alert-icon'></i>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'><i class='mdi mdi-close align-middle font-16'></i></span>
                                </button>
                                <strong>Well done!</strong> ".$_SESSION['success']."
                            </div>
                          ";
                          unset($_SESSION['success']);
                        }
                    ?>

                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row justify-content-center"> 
                                <div class="col-md-6 col-lg-4">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">                                                
                                                <div class="col">
                                                    <p class="text-dark mb-0 font-weight-semibold">Last Session</p>
                                                    <h3 class="m-0"><?= date('h:i:s A', strtotime($row0['date_view'])) ?></h3>
                                                    <h5 class="mb-0 text-truncate text-muted"><?= date('D M j Y', strtotime($row0['date_view'])) ?></h5>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-light-alt">
                                                        <i data-feather="clock" class="align-self-center text-blue icon-sm"></i>  
                                                    </div>
                                                </div> 
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div> <!--end col-->
                                <div class="col-md-6 col-lg-4">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">

                                                <?php

                                                    if ($no_of_tasks > 0) { ?>                                                
                                                <div class="col">
                                                    <p class="text-dark mb-0 font-weight-semibold">Tasks</p>
                                                    

                                                        <h3 class="m-0"><?= $no_of_tasks; ?> Total</h3>
                                                        <h5 class="mb-0 text-truncate text-muted"> 
                                                            <?= $no_of_pending_tasks; ?> Pending
                                                        </h5>

                                                        </div>
                                                        <div class="col-auto align-self-center">
                                                            <div class="report-main-icon bg-light-alt">
                                                                <i data-feather="activity" class="align-self-center text-blue icon-sm"></i>
                                                            </div>
                                                        </div>
                                                        
                                                    <?php }else{
                                                        echo '

                                                        <div class="col">
                                                            <p class="text-dark mb-0 font-weight-semibold">Tasks</p>

                                                            <h5 class="mb-0 text-danger">
                                                            <i class="mdi mdi-alert-outline alert-icon text-danger align-self-center font-30 mr-3"></i>

                                                                You have no task assigned yet
                                                            </h5>

                                                        </div>
                                                        ';
                                                    }

                                                    ?>
                                                    
                                                 
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div> <!--end col-->
                                <div class="col-md-6 col-lg-4">
                                    <div class="card report-card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <?php

                                                    if ($no_of_msgs > 0) { ?>                                                
                                                    <div class="col">
                                                        <p class="text-dark mb-0 font-weight-semibold">New Messages</p>
                                                        

                                                        <h3 class="m-0"><?= $no_of_unread_msg; ?></h3>
                                                        <h5 class="mb-0 text-truncate text-muted"> 
                                                            <?= $no_of_msgs; ?> total messages
                                                        </h5>

                                                    </div>
                                                    <div class="col-auto align-self-center">
                                                        <div class="report-main-icon bg-light-alt">
                                                            <i data-feather="inbox" class="align-self-center text-blue icon-sm"></i>  
                                                        </div>
                                                    </div>
                                                        
                                                    <?php }else{
                                                        echo '

                                                        <div class="col">
                                                            <p class="text-dark mb-0 font-weight-semibold">Messages</p>

                                                            <h5 class="mb-0 text-danger">
                                                            <i class="mdi mdi-message-bulleted-off alert-icon text-danger align-self-center font-30 mr-3"></i>

                                                                Your inbox is empty
                                                            </h5>

                                                        </div>
                                                        ';
                                                    }

                                                ?>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                </div> <!--end col-->                              
                            </div><!--end row-->
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Tasks Overview</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto"> 
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   Completed/ Pending/ Reassigned
                                                </a>
                                            </div>               
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="">
                                        <div id="ana_dash_1" class="apex-charts"></div>
                                    </div> 
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Tasks Summary</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto"> 
                                            <div class="dropdown">
                                                <a href="#" style="cursor: context-menu; width: 120%;" class="btn btn-sm btn-outline-light">
                                                   All
                                                </a>
                                            </div>         
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="text-center">
                                        <div id="ana_device" class="apex-charts"></div>
                                    </div>  
                                    <div class="table-responsive mt-2">
                                        <table class="table border-dashed mb-0">
                                            <thead>
                                            <tr>
                                                <th>Status</th>
                                                <th class="text-right">Amount</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Completed</td>
                                                    <td class="text-right"><?= $task_completed; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pending</td>
                                                    <td class="text-right"><?= $task_pending; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Reasigned</td>
                                                    <td class="text-right"><?= $task_reassigned; ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /div-->                                 
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">What's New</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->                   
                                <div class="card-body">
                                    <ul class="list-group custom-list-group mb-n3">
                                        <?php
                                        $newQuery = $conn->query("SELECT * from news order by 1 desc limit 7");
                                        if ($newQuery->rowCount()) {
                                           $news = $newQuery->fetchAll(PDO::FETCH_OBJ);
                                        }
                                        $index = 1;
                                        foreach ($news as $new) : 

                                            if ($index == 1) {
                                                $tag1 = "Delivery";
                                                $tag2 = "Tech";
                                                
                                            }elseif ($index == 2) {
                                                $tag1 = "Logistics";
                                                $tag2 = "Freight";
                                            }elseif ($index == 3) {
                                                $tag1 = "Courier";
                                                $tag2 = "Freight";
                                            }
                                        ?>

                                        <li class="list-group-item latest-news-item align-items-center d-flex justify-content-between pt-0">
                                            <div class="media">
                                                <img src="../admin/images/<?= $new->photo; ?>" height="30" class="mr-3 align-self-center rounded" alt="...">
                                                <div class="media-body align-self-center"> 
                                                    <h6 class="m-0"><?= substrwords($new->short_title, 30); ?></h6>
                                                    <p class="mb-0 text-muted"><?= $tag1; ?>, <?= $tag2; ?></p>                                                                                           
                                                </div><!--end media body-->
                                            </div>
                                            <div class="align-self-center">
                                                <a target="_blank" href="../news-detail.php?id=<?= $new->id; ?>&title=<?= $new->slug; ?>" class="btn btn-sm btn-soft-primary">Read <i class="las la-external-link-alt font-15"></i></a>  
                                            </div>                                            
                                        </li>

                                            


                                    <?php
                                        $index++;
                                        endforeach; ?>

                                        

                                    </ul>                                
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-lg-4"> 
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Latest Tasks</h4>                      
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->  
                                <div class="card-body">
                                    <div class="analytic-dash-activity" data-simplebar>
                                        <div class="activity">

                                            <?php
                                                $tskQuery = $conn->query("SELECT * FROM task WHERE user_id=$id order by 1 desc Limit 6");
                                                if ($tskQuery->rowCount()) {
                                                   $tskRow = $tskQuery->fetchAll(PDO::FETCH_OBJ);
                                                }
                                                if($no_of_tasks > 0){

                                                    foreach ($tskRow as $tsk) : ?>

                                                    <div class="activity-info">
                                                        <div class="icon-info-activity">
                                                            <i class="mdi mdi-clock-outline bg-soft-primary"></i>
                                                        </div>
                                                        <div class="activity-info-text">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <p class="text-muted mb-0 font-13 w-75"><span><?= date('M j Y', strtotime($tsk->task_delegate_date)) ?></span> 
                                                                    <?= $tsk->task_title; ?>
                                                                </p>
                                                                <small class="text-muted"><?= $tsk->task_status; ?></small>
                                                            </div>    
                                                        </div>
                                                    </div>


                                            <?php
                                              endforeach; }else{ ?>

                                                <div class="activity-info">
                                                    <h5>
                                                        No Tasks Assigned Yet
                                                    </h5>
                                                </div>

                                            <?php  }
                                            ?>

                                            

                                        </div><!--end activity-->
                                    </div><!--end analytics-dash-activity-->
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div><!--end col-->
                        
                        
                        <div class="col-lg-4">
                            <div class="card">   
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Activity</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->                                              
                                <div class="card-body"> 
                                    <div class="analytic-dash-activity" data-simplebar>
                                        <div class="activity">

                                            <?php
                                                $stmtact = $conn->prepare("SELECT COUNT(*) AS numrows FROM activity WHERE user_id=$id");
                                                $stmtact->execute();
                                                $drowact = $stmtact->fetch();
                                                $no_of_act = $drowact['numrows'];

                                                $actQuery = $conn->query("SELECT * FROM activity WHERE user_id=$id order by 1 desc Limit 6");
                                                if ($actQuery->rowCount()) {
                                                   $actrow = $actQuery->fetchAll(PDO::FETCH_OBJ);
                                                }
                                                if($no_of_act > 0){

                                                    foreach ($actrow as $act) : ?>

                                                    <div class="activity-info">
                                                        <div class="icon-info-activity">
                                                            <i class="mdi mdi-clock-outline bg-soft-primary"></i>
                                                        </div>
                                                        <div class="activity-info-text">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <p class="text-muted mb-0 font-13 w-75"><span><?= $act->category; ?></span> 
                                                                    <?= $act->message; ?>
                                                                </p>
                                                                <small class="text-muted"><?= $act->date_sent; ?></small>
                                                            </div>    
                                                        </div>
                                                    </div>


                                            <?php
                                              endforeach; }else{ ?>

                                                <div class="activity-info">
                                                    <h5>
                                                        No Activity Yet
                                                    </h5>
                                                </div>

                                            <?php  }
                                            ?>

                                            

                                        </div><!--end activity-->
                                    </div><!--end analytics-dash-activity-->
                                </div>  <!--end card-body-->                                     
                            </div><!--end card--> 
                        </div><!--end col--> 
                       
                    </div><!--end row-->
                    

                </div><!-- container -->

                <?php include('inc/footer.php'); ?><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- Chart Data -->
        <?php

            $task_close = array();
            $task_open = array();
            for( $m = 1; $m <= 12; $m++ ) {
                try{
                    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM task WHERE user_id = $id AND MONTH(task_delegate_date)=:month AND YEAR(task_delegate_date)=:year");
                    $stmt->execute(['month'=>$m, 'year'=>$year]);
                    $total = $total2 = 0;                    
                    foreach($stmt as $srow){
                        $total = $srow['numrows'];
                    }
                    array_push($task_close, $total);

                    array_push($task_open, $total2);
                }
                catch(PDOException $e){
                    echo $e->getMessage();
                }

            }

            $task_close = json_encode($task_close);
            $task_open = json_encode($task_open);

        ?>

        


        <?php include('inc/scripts.php'); ?>

        
        
    </body>


<!-- Mirrored from mannatthemes.com/dastone/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2020 21:59:40 GMT -->
</html>