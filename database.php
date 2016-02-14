<?php

// rermove before deployment
ini_set('display_errors', 'On');

try {
    $db = new PDO(
        'mysql:host=localhost;dbname=bradandtif',
        'root',
        'tbp5849');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    } catch (Exception $ex) {
        echo $ex->getMessage();
        die();
}

?>