<?php
    include('inc/config.php');

    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    include 'inc/session.php';

    if(isset($_POST['join'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $career = $_POST['career'];
        $gender = $_POST['gender'];

        $_SESSION['lastname'] = $lastname;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['email'] = $email;
        
        $conn = $pdo->open();

        $stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM applicants WHERE email=:email");
        $stmt->execute(['email'=>$email]);
        $row = $stmt->fetch();
        if($row['numrows'] > 0){
            $_SESSION['error'] = 'You already applied to our company';
            header('location: join.php');
        }
        else{
            $now = date('Y-m-d');

            try{
                $stmt = $conn->prepare("INSERT INTO applicants (firstname, lastname, email, country, career, gender, created_on) VALUES (:firstname, :lastname, :email, :country, :career, :gender, :now)");
                $stmt->execute(['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email, 'country'=>$country, 'career'=>$career, 'gender'=>$gender, 'now'=>$now]);

                $message = "
                    <div id='_rc_sig'>
                        <div id=':or' class='ii gt'>
                            <div id=':oq' class='a3s aiL msg4873022159957722792'>
                                <div id='m_4873022159957722792body' class='m_4873022159957722792body' style='background-color: #f3f2f1; margin: 0; padding: 0;'>
                                    <div style='font-family: Helvetica Neue, Helvetica, Roboto, Arial, sans-serif; direction: ltr;'>
                                        <table class='m_4873022159957722792main' border='0' width='100%' cellspacing='0' cellpadding='0' bgcolor='#F3F2F1'>
                                            <tbody>
                                                <tr>
                                                    <td class='m_4873022159957722792outer-box' style='padding: 0 8px;' align='center' bgcolor='#F3F2F1'>
                                                        <table style='max-width: 600px; padding: 0 0 15px 0;' border='0' width='100%' cellspacing='0' cellpadding='0'>
                                                            <tbody>
                                                                <tr>
                                                                    <td style='padding: 10px 0 13px 0;' align='left'>
                                                                        <a href='https://www.samzaralogistics.com'>
                                                                            <img
                                                                                class='m_4873022159957722792jecl-Icon-img CToWUd'
                                                                                style='display: block;'
                                                                                src='https://www.samzaralogistics.com/assets/img/logo/logo-black.png'
                                                                                alt='samzara-logo'
                                                                                width='200'
                                                                                height='52'
                                                                                border='0'
                                                                            />
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <table class='m_4873022159957722792width-600' style='max-width: 600px;' border='0' width='100%' cellspacing='0' cellpadding='0' bgcolor='#FFFFFF'>
                                                            <tbody>
                                                                <tr>
                                                                    <td class='m_4873022159957722792content-box' style='padding-bottom: 24px !important;'>
                                                                        <table border='0' width='100%' cellspacing='0' cellpadding='0'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <table border='0' width='100%' cellspacing='0' cellpadding='0'>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style='padding: 16px 10px 0;'>
                                                                                                        <p style='font-size: 13px; line-height: 20px; color: #666666; margin: 0px; text-align: left;' align='center'>
                                                                                                            <span style='font-size: 12pt; font-family: arial black, sans-serif; color: #000000;'> <strong>Dear ".$firstname." ".$lastname.",</strong> </span>
                                                                                                        </p>
                                                                                                        <p style='font-size: 13px; line-height: 20px; color: #666666; margin: 0px; text-align: left;' align='center'>&nbsp;</p>
                                                                                                        <p style='font-size: 13px; line-height: 20px; color: #666666; margin: 0px; text-align: left;' align='center'>
                                                                                                            <span style='color: #000000;'>
                                                                                                                Thank you for your interest in joining Samzara Logistics. Your application will be reviewed and you will be contacted within the next couple of days.
                                                                                                            </span>
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <table style='max-width: 550px; height: 264px; width: 114.979%;' border='0' width='573' cellspacing='0' cellpadding='0' bgcolor='#F2F2F2'>
                                                            <tbody>
                                                                <tr>
                                                                    <td style='padding: 24px 4px; width: 100%;'>
                                                                        <table style='max-width: 424px;' border='0' cellspacing='0' cellpadding='0' align='center'>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style='font-size: 12px; line-height: 16px; color: #4b4b4b; padding: 20px 0; margin: 0 auto;' align='center'>
                                                                                        *This email account is not monitored. Reply to <a href='mailto:info@samzaralogistics.com'>info@samzaralogistics.com</a> if you have any query.
                                                                                        <a style='text-decoration: underline; color: #085ff7;' href='https://www.samzaralogistics.com/jobopenings'> View Our Available Jobs </a>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <table style='font-size: 12px; color: #2d2d2d; line-height: 22px; margin: 0px auto; height: 63px; width: 69.7305%;' border='0' width='100%' cellspacing='0' cellpadding='0' align='center'>
                                                                            <tbody>
                                                                                <tr style='height: 43px;'>
                                                                                    <td lang='en' style='padding: 0px; height: 43px;' align='center'>&copy; 2021 Samzara Logistics.</td>
                                                                                </tr>
                                                                                <tr style='height: 10px;'>
                                                                                    <td class='m_4873022159957722792j-6' style='padding: 15px 0px 25px; height: 10px;' align='center'>
                                                                                        <span class='m_4873022159957722792j-5'><a style='text-decoration: underline; color: #085ff7;' href='https://www.samzaralogistics.com'>Home</a>|</span>
                                                                                        <a class='m_4873022159957722792j-1' style='text-decoration: underline; color: #085ff7;' href='https://www.samzaralogistics.com/about'>About</a>
                                                                                        <span class='m_4873022159957722792j-5'>|</span>
                                                                                        <a class='m_4873022159957722792j-2' style='text-decoration: underline; color: #085ff7;' href='https://www.samzaralogistics.com/track'>Track Item</a> <br />
                                                                                        <a class='m_4873022159957722792j-3' style='text-decoration: underline; color: #085ff7;' href='https://www.samzaralogistics.com/career'> Career </a>
                                                                                        <span class='m_4873022159957722792j-5'>|</span>
                                                                                        <a class='m_4873022159957722792j-4' style='text-decoration: underline; color: #085ff7;' href='https://www.samzaralogistics.com/contact'>Contact</a>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";


                //Notify Admin

                $msg = $lastname." ".$firstname." from ".$country." just registered, Login Admin";

                // use wordwrap() if lines are longer than 70 characters
                $msg = wordwrap($msg,70);

                // send email
                mail($settings->email,"New Applicant Alert",$msg);




                //Load phpmailer
                require 'vendor/autoload.php';

                $mail = new PHPMailer(true);                             
                try {
                    //Server settings

                    $mail->IsSMTP();        //Sets Mailer to send message using SMTP
                    $mail->Host = $sweet_url;  //Sets the SMTP hosts
                    $mail->Port = '465';        //Sets the default SMTP server port
                    $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
                    $mail->Username = 'noreply@'.$sweet_url;     //Sets SMTP username
                    $mail->Password = $noreply_password;     //Sets SMTP password
                    $mail->SMTPSecure = 'ssl';       //Sets connection prefix. Options are "", "ssl" or "tls"
                    $mail->From = 'noreply@'.$sweet_url;     //Sets the From email address for the message
                    $mail->FromName = $settings->siteTitle;    //Sets the From name of the message
                    $mail->AddAddress($email);//Adds a "To" address

                    $mail->IsHTML(true);       //Sets message type to HTML   

                    $mail->Subject = $settings->siteTitle." Job Application";  
                    $mail->Body = $message;

                    $mail->send();

                    unset($_SESSION['firstname']);
                    unset($_SESSION['lastname']);
                    unset($_SESSION['email']);

                    $_SESSION['success'] = 'You application has been sent and you will be contacted shortly. To continue to navigate site, <a href="index.php">Click Here</a>';
                    header('location: join.php');

                } 
                catch (Exception $e) {
                    $_SESSION['success'] = 'You application has been sent and you will be contacted shortly. To continue to navigate site, <a href="index.php">Click Here</a>';
                    header('location: join.php');
                }


            }
            catch(PDOException $e){
                $_SESSION['success'] = $e->getMessage();
                header('location: join.php');
            }

            $pdo->close();

        }

        

    }
    else{
        $_SESSION['error'] = 'Fill up application form first';
        header('location: join.php');
    }

?>