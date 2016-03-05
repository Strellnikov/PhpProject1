<?php 

require ('vendor/autoload.php');
require ('includes/config.php');
require ('includes/functions.php');

date_default_timezone_set('America/New_York');

$pageTitle = "Crafts By Tiffany";
$section = "signin";
$products = get_products_all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crafts By Tiffany</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CRAFTS BY TIFFANY</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Sign in</a>
                        
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Christmas Gifts</a>
                    <a href="#" class="list-group-item">Special Occasion</a>
                    <a href="#" class="list-group-item">Any Occasion</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/rudolph and christmas tree.JPG" alt="Rudolph Xmas Tree">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/christmas tress 1.JPG" alt="Christmas Trees I">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/christmas tress 2.JPG" alt="Christmas Tress II">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">                    
                    
                    <?php foreach ($products as $column) {
                    echo '<div class="col-sm-4 col-lg-4 col-md-4">';
                        echo '<div class="thumbnail">';
                            echo '<img src="' . $column["ProductImage"] . '" alt="' . $column["ProductName"] . '">';
                            echo '<div class="caption">';
                                echo '<h4 class="pull-right">"' . $column["ProductPrice"] . '"</h4>';
                                echo '<h4><a href="#">"' . $column["ProductName"] . '"</a>';
                                echo '</h4>';
                                echo '<p>"' . $column["ProductShortDesc"] . '"</p>';
                            echo '</div>'; 
                            echo '<div class="ratings">';
                                echo '<p class="pull-right">15 reviews</p>';
                                echo '<p>';
                                    echo '<span class="glyphicon glyphicon-star"></span>';
                                    echo '<span class="glyphicon glyphicon-star"></span>';
                                    echo '<span class="glyphicon glyphicon-star"></span>';
                                    echo '<span class="glyphicon glyphicon-star"></span>';
                                    echo '<span class="glyphicon glyphicon-star"></span>';
                                echo '</p>';
                             echo '</div>';
                        echo '</div>';
                    echo '</div>';                    
                    }
                    ?>
                    
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like these ornamantes?</a>
                        </h4>
                        <p>If you like these crafts, then check out <a target="_blank" href="http://ding.net/bonsaikitten/">this great gift idea</a> on how to make your own bonsai kitties!</p>
                        <a class="btn btn-primary" target="_blank" href="http://ding.net/bonsaikitten/">View kitties</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; BradandTiffany 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="scripts/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="scripts/bootstrap.min.js"></script>

</body>

</html>
