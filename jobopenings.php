<?php
    include('inc/config.php');
    include('inc/session.php');
    include('admin/includes/format.php');

    $page_name = 'Job Openings';
    $banner_name = 'Vacancy';
    $page_tagline = 'At Samzara, our staff are our most important Resource.';
    $page_parent = 'Career';
    $page_parent_url = 'career';
    $page_banner = 'assets/img/background/personalbaggage-banner.jpg';
    $page_title = 'Welcome to the Official Website of '.$settings->siteTitle;
    $page_description = $settings->siteDescription;
    include('inc/head.php');

    // Get the Current Page Number
    if (isset($_GET['page_no']) && $_GET['page_no']!="") {
      $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
        }

    // SET Total Records Per Page Value
    $total_records_per_page = 12;

    // Calculate OFFSET Value and SET other Variables
    $offset = ($page_no-1) * $total_records_per_page;
    $previous_page = $page_no - 1;
    $next_page = $page_no + 1;
    $adjacents = "2";

    // Get the Total Number of Pages for Pagination
    $result_count = $conn->query("SELECT COUNT(*) As total_records FROM jobs ");
    $total_records = $result_count->fetch()["total_records"];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1; // total pages minus 1


    //SQL Query for Fetching Limited Records using LIMIT Clause and OFFSET
    $jobs = [];
    $jobsQuery = $conn->query("SELECT * from jobs order by 1 desc LIMIT $offset, $total_records_per_page");

    if ($jobsQuery->rowCount()) {
        $jobs = $jobsQuery->fetchAll(PDO::FETCH_OBJ);
    }else{
        $jobs=[];
    }

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
                    <span class="bg-text"> JOB </span>
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-12">
                                <div class="about-us pt-10">
                                    <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">SEE BELOW ALL OUR LATEST JOB OPPORTUNITIES</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.About Us -->

                <!-- More About Us -->
                <section class="pad-30 more-about-wrap">
                    <div class="theme-container container pb-100">               
                        <div class="row">
                            <?php
                                $index = ($page_no * $total_records_per_page) - ($total_records_per_page - 1);
                                foreach ($jobs as $job) :
                            ?>
                                <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                    <div class="more-about clrbg-before">
                                        <h2 class="title-1"><?= $job->title; ?></h2>
                                        <div class="pad-10"></div>
                                        <a class="apply-to-job" href="join.php?appId=323&pst=<?= base64_encode("$job->title") ?>"><i class="fa fa-briefcase job-card-icon"></i> Apply to Job</a>
                                        <p><?= $job->short_description; ?></p>
                                        <a href="job-detail.php?id=<?= $job->id; ?>&title=<?= $job->slug; ?>">More...</a>
                                    </div>
                                </div>
                            <?php
                              $index++;
                                endforeach; ?>
                        </div>

                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 clearfix mt-10 text--center">
                              <ul class="pagination">

                                <li class="page-item"><a class="page-link <?php if($page_no <= 1){ echo "disabled"; } ?>" <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>> < </a></li>

                            <?php 
                            if ($total_no_of_pages <= 10){       
                                for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                                    if ($counter == $page_no) {
                                   echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";  
                                        }else{
                                   echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                                        }
                                }
                            }
                            elseif($total_no_of_pages > 10){
                                
                            if($page_no <= 4) {         
                             for ($counter = 1; $counter < 8; $counter++){       
                                    if ($counter == $page_no) {
                                   echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";  
                                        }else{
                                   echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                                        }
                                }
                                echo "<li class='page-item'><a class='page-link'>...</a></li>";
                                echo "<li class='page-item'><a class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
                                echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                                }

                             elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {         
                                echo "<li class='page-item'><a class='page-link' href='?page_no=1'>1</a></li>";
                                echo "<li class='page-item'><a class='page-link' href='?page_no=2'>2</a></li>";
                                echo "<li class='page-item'><a class='page-link'>...</a></li>";
                                for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {         
                                   if ($counter == $page_no) {
                                   echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";  
                                        }else{
                                   echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                                        }                  
                               }
                               echo "<li class='page-item'><a class='page-link'>...</a></li>";
                               echo "<li class='page-item'><a class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
                               echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
                                    }
                                
                                else {
                                echo "<li class='page-item'><a class='page-link' href='?page_no=1'>1</a></li>";
                                echo "<li class='page-item'><a class='page-link' href='?page_no=2'>2</a></li>";
                                echo "<li class='page-item'><a class='page-link'>...</a></li>";

                                for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                                  if ($counter == $page_no) {
                                   echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";  
                                        }else{
                                   echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                                        }                   
                                        }
                                    }
                            }   ?>

                            <li class="page-item <?php if($page_no >= $total_no_of_pages){ echo "disabled"; } ?>"><a class='page-link' <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>> > </a></li>

                            <?php if($page_no < $total_no_of_pages){
                            echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'> > > </a></li>";
                            } ?>
                            
                              </ul>
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
