<?php

ini_set('display_errors', 'On');

require_once('includes/config.php');
require_once('includes/database.php');

$stmt = $db->prepare(
                        "INSERT INTO "
                                . "users(UserFirstName, UserLastName, UserEmail, UserLocation, UserInterest, UserComments) "
                        . "VALUES "
                                . "(:fname, :lname, :email, :location, :interest, :comments)"
        );
$stmt->bindParam(":fname", $fname);
$stmt->bindParam(":lname", $lname);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":location", $location);
$stmt->bindParam(":interest", $interest);
$stmt->bindParam(":comments", $comments);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$location = $_POST['location'];
$interest = $_POST['interest'];
$comments = $_POST['comments'];
session_start(); # start session handling
$_SESSION['email'] = $_POST['email'];
$stmt->execute();

header('location:thanks.php');
