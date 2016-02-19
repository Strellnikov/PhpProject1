<!DOCTYPE html>
<?php

require 'vendor/autoload.php';

date_default_timezone_set('America/New_York');

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
                
                <form action="process.php" method="post">

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
                
            </div>
        </div>
        
    <?php include('includes/footer.php') ?>




