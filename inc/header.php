<header class="header-main">

    <!-- Header Topbar -->
    <div class="top-bar font2-title1 white-clr">
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-6 col-sm-5">
                    <ul class="list-items fs-10">
                        <li><i class="fa fa-phone"></i> Call us now: <span class="theme-clr"> <?= $settings->phoneNumber ?> </span></li>
                        <li class="active"><i class="fa fa-envelope"></i> Email: <span class="theme-clr"> <?= $settings->email ?> </span></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-7 fs-12">
                    <?php
                        if($weAreOpen) {
                            if (date('l') == 'Saturday') {
                                $close_time = '1pm';
                            }else{
                                $close_time = '5pm';
                            }
                        echo '<p class="contact-num" style="color: #00ff00; font-weight: 600;">Office Open | <span style="color: #e03418;"> Closes by '.$close_time.'</span></p>';
                        } else {
                        echo '<p class="contact-num" style="color: #e03418; font-weight: 600;">Office Closed | <span style="color: #00ff00;">Available Online</span></p>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <a data-toggle="modal" href="#login-popup" class="sign-in fs-12 theme-clr-bg"> sign in </a>
    </div>
    <!-- /.Header Topbar -->

    <!-- Header Logo & Navigation -->
    <nav class="menu-bar font2-title1">
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-logo" href="<?= $baseurl; ?>"> <img src="assets/img/logo/logo-black.png" alt="logo" /> </a>
                </div>
                <div class="col-md-10 col-sm-10 fs-12">
                    <div id="navbar" class="collapse navbar-collapse no-pad">
                        <ul class="navbar-nav theme-menu">
                            <li <?php echo ( $page_name == 'Home' || $page_parent == 'Home' ) ? 'class="active"' : ''; ?>><a href="<?= $baseurl; ?>">Home </a></li>
                            <li <?php echo ( $page_name == 'About' || $page_parent == 'About' ) ? 'class="active"' : ''; ?>> <a href="about">about</a> </li>
                            <li <?php echo ( $page_name == 'Track' || $page_parent == 'Track' ) ? 'class="active"' : ''; ?>> <a href="track"> track </a> </li>
                            <li class="dropdown" <?php echo ( $page_name == 'Freights' || $page_parent == 'Freights' ) ? 'class="active"' : ''; ?>> 
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" href="javascript:void(0)"> freights </a>
                                <ul class="dropdown-menu">
                                    <li><a href="air-freights">air freights</a></li>
                                    <li><a href="sea-freights">sea freights</a></li>
                                    <li><a href="project-cargo">project cargo</a></li>
                                </ul>

                            </li>
                            <li class="dropdown" <?php echo ( $page_name == 'Services' || $page_parent == 'Services' ) ? 'class="active"' : ''; ?>> 
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" href="javascript:void(0)"> services </a>
                                <ul class="dropdown-menu">
                                    <li><a href="warehousing">ware housing</a></li>
                                    <li><a href="personal-baggage">personal baggage</a></li>
                                    <li><a href="custom-clearance">custom clearance</a></li>
                                </ul>

                            </li>
                            <li <?php echo ( $page_name == 'Contact' || $page_parent == 'Contact' ) ? 'class="active"' : ''; ?>> <a href="contact"> contact </a> </li>

                            <li <?php echo ( $page_name == 'Career' || $page_parent == 'Career' ) ? 'class="active"' : ''; ?>> <a href="career"> career </a> </li>
                        </ul>                                                      
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- /.Header Logo & Navigation -->

</header>