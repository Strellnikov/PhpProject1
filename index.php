<!DOCTYPE html>

<?php

/*  ERROR HANDLER
ini_set('display_errors', 1);

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);    
});


use Monolog\Logger;
use Monolog\Handler\BrowserConsoleHandler;
 */

/* create log channel
$log = new Logger('my_app');
$log->pushHandler(new BrowserConsoleHandler());
 * 
 */

require_once ('includes/config.php');
require_once ('includes/database.php');
require 'vendor/autoload.php';

date_default_timezone_set('America/New_York');
 
$pageTitle = 'Sign In';
$section = 'signin';

include ('includes/header.php'); ?>
                    <li class="active">
                        <a href="index.php">Sign in</a>                        
                    </li>
                    <li>
                        <a href="about.php">Brad's Stuff</a>
                    </li>
                    <li>
                        <a href="tiffany.php">Tif's Stuff</a>
                    </li>
                </ul>
                
            </div>
            
        </div>
        
    </div>
    <!-- end Navbar -->
    
    <div class="container p-t-2">
    
        <div class="row">
            <div class="col-md-4">
                <img src="img/bradandtiffany4.JPG" alt="Photograph of Brad & Tiffany Price" class="img-rounded img-responsive">
            </div>
            <div class="col-md-4">
                <legend><strong>Please register</strong></legend>
                <form action="process.php" method="post">

                    <fieldset class="p-b-4">                       

                        <div class="form-group">
                           <label class="title" for="name"><strong>First name</strong>
                                <input type="text" id="name" name="fname" required="required" tabindex="1">
                           </label>
                           <label class="title" for="name"><strong>Last name</strong>
                                <input type="text" id="name" name="lname" required="required" tabindex="1">
                           </label>
                           <label class="title" for="mail"><strong>Your email</strong>
                               <input type="email" id="mail" name="email" required="required" tabindex="2">
                           </label>
                        </div>

                    </fieldset>
                    
                    <legend><strong>Your Profile</strong></legend>

                    <fieldset>                        

                        <div class="form-group">
                            <label><strong>Interests:</strong><br />
                                <input type="checkbox" id="development" value="developmnt" name="interest" tabindex="3">
                                <label class="light" for="development">Development</label><br>
                                <input type="checkbox" id="design" value="design" name="interest" tabindex="4">
                                <label class="light" for="design">Design</label><br>
                                <input type="checkbox" id="business" value="business" name="interest" tabindex="5">
                                <label class="light" for="business">Business</label>
                          </label>
                        </div>
                        <div class="form-group">
                           <label for="location" class="title">Your geographic location</label>
                           <select name="location" id="location">
                               <option value="se">Southeast</option>
                               <option value="ne">Northeast</option>
                               <option value="ma">Mid-Atlantic</option>
                               <option value="mw">Mid-West</option>
                               <option value="pl">Plains</option>
                               <option value="we">West</option>
                           </select>
                        </div><br />
                        <div class="form-group">
                            <label for="comments">Comments
                                <textarea class="form-control" id="comments" name="comments" tabindex="6"></textarea>
                            </label>
                        </div>

                    </fieldset>

                    <button type="submit">Sign In</button>

                </form>

            </div>
        </div>
        <?php include ('includes/footer.php'); ?>