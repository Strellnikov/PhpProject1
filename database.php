<?php

// rermove before deployment
ini_set('display_errors', 'On');

try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=bradandtif',
        'root',
        'tbp5849');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    } catch (Exception $ex) {
        echo $ex->getMessage();
        die();
}

?>