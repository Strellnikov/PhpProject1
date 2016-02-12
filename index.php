<!DOCTYPE html>

<?php

require_once 'database.php';

//try {
//    $results = $pdo->query('select * from users');
//    var_dump($results->fetchAll(PDO::FETCH_ASSOC));
//    die();
//} catch(Exception $ex) {
//    echo $ex->getMessage();
//    die();
//}

require 'vendor/autoload.php';
date_default_timezone_set('America/New_York');
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Brad Price</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
</head>
<body>
    <!-- Navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Brad and Tiffany's Website</a>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Sign In</a></li>
                    <li><a href="about.html">Brad's Stuff</a></li>
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
                <form action="index.html" method="post">

                    <fieldset>

                        <legend><strong>Please register</strong></legend>

                        <div><label class="title" for="name"><strong>Your name</strong>
                                <input type="text" id="name" name="usr_name" required="required" tabindex="1">
                           </label><br />
                           <label class="title" for="mail"><strong>Your email</strong>
                               <input type="email" id="mail" name="usr_email" required="required" tabindex="2">
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
                                <textarea id="comments" name="usr_comments" tabindex="6"></textarea>
                            </label>
                        </div>

                    </fieldset>

                    <button type="submit">Sign In</button>

                </form>

            </div>
        </div>
        <footer>
            <img src="img/twitter-wrap.png" alt="Twitter Logo" class="social-icon">
            <a href="http://facebook.com/tiffany.price.547"><img src="img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
            <p>&copy; 2015 Brad Price.</p>
        </footer>
    </div>
    
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    
</body>
</html>




