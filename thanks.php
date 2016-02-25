<!DOCTYPE html>
<?php

require ('vendor/autoload.php');
require ('includes/config.php');
require ('includes/functions.php');

date_default_timezone_set('America/New_York');

$pageTitle = "Thanks";
$section = "signin";
$user = get_user_single();

include("includes/header.php"); ?>
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
                <h3>Thank you <?php $user ?></h3>
                <p>Thanks for signing in.  Feel free to look around.  Yall Come Back Now</p>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>


