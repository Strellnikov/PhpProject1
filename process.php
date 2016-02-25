<?php

ini_set('display_errors', 'On');

require_once ('includes/config.php');
require_once ('includes/database.php');

$stmt = $db->prepare(
                        "INSERT INTO "
                                . "users(UserFirstName, UserEmail) "
                        . "VALUES "
                                . "(:name, :email)"
        );
$stmt->bindParam(":name", $name);
$stmt->bindParam(":email", $email);

$name = $_POST['name'];
$email = $_POST['email'];
$stmt->execute();

header('location:thanks.php');

?>