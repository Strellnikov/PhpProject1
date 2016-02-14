<?php

$name = $_POST["name"];
$email = $_POST["email"];
$comments = $_POST["comments"];

echo "<pre>";
$email_body = "";
$email_body .= "Name " . $name . "\n";
$email_body .= "Emal " . $email . "\n";
$email_body .= "Comments " . $comments . "\n";
echo $email_body;
echo "</pre>";

//To Do: send email

header("location:thanks.php");
