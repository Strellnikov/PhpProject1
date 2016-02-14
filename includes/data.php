<?php

try {
    $results = $db->query('select * from products');
    var_dump($results->fetchAll(PDO::FETCH_ASSOC));
} catch(Exception $ex) {
    echo $ex->getMessage();
    die();
}

$catalog = [];
$catalog[101] = [
    "productName" => "Rudolph Christmas Tree",
    "productImage" => "img/rudolph and christmas tree.JPG",
    "productPrice" => "69.95",
    "productWeight" => "3 oz"
];
$catalog[102] = [
    "productName" => "Christmas Trees I",
    "productImage" => "img/christmas tress 1.JPG",
    "productPrice" => "59.95",
    "productWeight" => "4 oz"
];
$catalog[103] = [
    "productName" => "Christmas Trees II",
    "productImage" => "img/christmas tress 2.JPG",
    "productPrice" => "79.95",
    "productWeight" => "4 oz"
];
$catalog[104] = "Rudolph";

?>

