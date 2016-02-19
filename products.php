<?php

require('includes/database.php');

function get_products_all() {
    try {
        $results = $db->query("SELECT "
                                . "ProductID, "
                                . "ProductName, "
                                . "ProductPrice, "
                                . "ProductShortDesc "
                            . "FROM "
                                . "products "
                            . "ORDER BY ProductPrice ASC");
        } catch (Exception $ex) {
            echo $ex->getMessage();
            exit;
    }
    $products = $results->fetchAll(PDO::FETCH_ASSOC);
    
    return $products;
}

/* 
 * return a single product
 */

function get_product_single($ProductID) {
    require('includes/database.php');
    
    try {
        $results = $db->query("SELECT "
                                . "ProductID, "
                                . "ProductName, "
                                . "ProductPrice, "
                                . "ProductShortDesc "
                            . "FROM "
                                . "products "
                            . "ORDER BY ProductPrice ASC");
        } catch (Exception $ex) {
            echo "Data could not be retirved from the database.";
            exit;
    }
    
    $product = $results->fetch(PDO::FETCH_ASSOC);
    
    return $product;
}

/* 
 * Returns the six most recent products, using the ororder of the lements in the array
 */
function get_products_recent() {
    $recent = array();
    $all = get_products_all();
    
    $total_products = count($all);
    $position = 0;
    
    foreach ($all as $product) {
        $position = $position + 1;
        if ($total_products - $position < 6) {
            $recent[] = $product;
        }
    }
    return $recent;
}