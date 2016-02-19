<?php

//require_once ('database.php');

ini_set('display_errors', 'On');

try {
    $db = new PDO(
        'mysql:host=localhost;dbname=bradandtif',
        'root',
        'tbp5849');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}


$stmt = $db->prepare("INSERT INTO users(UserFirstName, UserEmail) VALUES (:name, :email)");
$stmt->bindParam(":name", $name);
$stmt->bindParam(":email", $email);

$name = $_POST['name'];
$email = $_POST['email'];
$stmt->execute();

header('location:thanks.php');

?>