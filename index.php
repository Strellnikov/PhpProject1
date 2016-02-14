<!DOCTYPE html>
<?php

require_once('database.php');

require 'vendor/autoload.php';

date_default_timezone_set('America/New_York');

?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
    $comments = trim(filter_input(INPUT_POST,"comments",FILTER_SANITIZE_SPECIAL_CHARS));
    
    if ($name == "" OR $email == "") {
        echo 'Please fill in the required fields: Name';
        exit;
    }
    
    //require 'PHPMailerAutoload.php';
    
    //$mail = new PHPmailer;
    
    //if (!$mail->ValidateAddress($email)) {
    //    echo "Invaled Email Address";
    //    exit;
    //}
    
    //$email_body = "";
    //$email_body .= "Name " . $name . "\n";
    //$email_body .= "Emal " . $email . "\n";
    //$email_body .= "Comments " . $comments . "\n";

    //$mail->setFrom($email, $name);
    //$mail->addAddress('brad@bradandtiffany.me', 'Brad Price');     // Add a recipient
    
    //$mail->isHTML(false);                                  // Set email format to HTML

    //$mail->Subject = 'New website visitor - '. $name;
    //$mail->Body    = $email_body;
    
    //if(!$mail->send()) {
    //    echo 'Message could not be sent.';
    //    echo 'Mailer Error: ' . $mail->ErrorInfo;
    //    exit;
    //}

    
    header("location:index.php?status=thanks");
}

$pageTitle = "Sign In";
$section = "signin";

include("includes/header.php"); ?>
                    <li class="active"><a href="index.php">Sign In</a></li>
                    <li><a href="about.php">Brad's Stuff</a></li>
                    <li><a href="tiffany.html">Tif's Stuff</a></li>
                </ul>
                
            </div>
            
        </div>
        
    </div>
    <!-- end Navbar -->
    
    <div class="container">
    
        <div class="row">
            <div class="col-md-4">
                <img src="img/bradandtiffany.png" alt="Photograph of Brad & Tiffany Price" class="img-rounded img-responsive">
            </div>
            <div class="col-md-4">
                <?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
                    echo "<p>Thanks for the email!&rsquo;Il check out your suggestion shortly</p>";
                } else { ?>
                
                <form action="index.php" method="post">

                    <fieldset>

                        <legend><strong>Please register</strong></legend>

                        <div><label class="title" for="name"><strong>Your name</strong>
                                <input type="text" id="name" name="name" required="required" tabindex="1">
                           </label><br />
                           <label class="title" for="email"><strong>Your email</strong>
                               <input type="email" id="email" name="email" required="required" tabindex="2">
                           </label>
                        </div>

                    </fieldset>

                    <fieldset>

                        <legend><span class="number"></span><strong>Your profile</strong></legend>

                        <div><label><strong>Interests:</strong><br />
                            <input type="checkbox" id="development" value="interest_developmnt" name="usr_interest" tabindex="3">
                                <label class="light" for="development">Development</label><br>
                            <input type="checkbox" id="design" value="interest_design" name="usr_interest" tabindex="4">
                                <label class="light" for="design">Design</label><br>
                            <input type="checkbox" id="business" value="interest_business" name="usr_interest" tabindex="5">
                                <label class="light" for="business">Business</label>
                          </label>
                        </div>
                        <div><label for="location" class="title">Your geographic location</label>
                           <select name="usr_location" id="location">
                               <option value="se">Southeast</option>
                               <option value="ne">Northeast</option>
                               <option value="ma">Mid-Atlantic</option>
                               <option value="mw">Mid-West</option>
                               <option value="pl">Plains</option>
                               <option value="we">West</option>
                           </select>
                        </div><br />
                        <div><label for="comments">Comments
                                <textarea id="comments" name="comments" tabindex="6"></textarea>
                            </label>
                        </div>

                    </fieldset>

                    <button type="submit">Sign In</button>

                </form>
                
                <?php } ?>
                
            </div>
        </div>




