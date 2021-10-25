 <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid container">
            <div class="row m04m">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav">
                        <span class="bars">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                        <span class="btn-text">Navigate</span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="nav navbar-nav">
                        <li <?php echo ( $page_name == 'Home' || $page_parent == 'Home' ) ? 'class="active"' : ''; ?>><a href="<?php echo $baseurl; ?>">Home</a></li>
                        <li <?php echo ( $page_name == 'About Us' || $page_parent == 'About Us' ) ? 'class="active"' : ''; ?> class=" dropdown">
                            <a href="about" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">about</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="about#company">About Company</a></li>
                                <li><a href="about#team">Team</a></li>
                            </ul>
                        </li>
                        <li <?php echo ( $page_name == 'Services' || $page_parent == 'Services' ) ? 'class="active"' : ''; ?>><a href="services">services</a>
                        </li>
                        <li <?php echo ( $page_name == 'Pricing' || $page_parent == 'Pricing' ) ? 'class="active"' : ''; ?>><a href="pricing">pricing</a>
                        </li>
                        <li <?php echo ( $page_name == 'News' || $page_parent == 'News' ) ? 'class="active"' : ''; ?>><a href="news">news</a>
                        </li>
                        <li <?php echo ( $page_name == 'FAQ' || $page_parent == 'FAQ' ) ? 'class="active"' : ''; ?>><a href="<?php echo ( $page_name == 'Home' || $page_parent == 'Home' ) ? '#elements' : $baseurl.'#elements'; ?>">faq</a>
                        </li>
                        <li <?php echo ( $page_name == 'Contact Us' || $page_parent == 'Contact Us' ) ? 'class="active"' : ''; ?>><a href="contact">contact</a>
                        </li>                        
                        <li <?php echo ( $page_name == 'Account' || $page_parent == 'Account' || $page_name == 'Account' || $page_parent == 'Account' ) ? 'class="dropdown active"' : 'class="dropdown account"'; ?>>
                            <a href="profile" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">account</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="register">sign up</a></li>
                                <li><a href="login">sign in</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav> <!--Main Nav-->