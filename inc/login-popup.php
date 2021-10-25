<div class="modal fade login-popup" id="login-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">                
                <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>

                <div class="modal-content">   
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
                            <a href="password-forgot" class="gray-clr"> Forgot Password? click here </a>                            
                        </div>                        
                    </div>
                    <div class="create-accnt">
                        <a href="javascript:void()" class="white-clr"> Not a Staff? </a>  
                        <h2 class="title-2"> <a href="career" class="green-clr under-line">Check out our opportunities, to see if we have an opening for you</a> </h2>
                    </div>
                </div>
            </div>
        </div>