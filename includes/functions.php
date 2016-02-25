<?php

function get_products_all() {
    require('includes/database.php');
    
    try {
        $results = $db->query("SELECT "
                                . "ProductID, "
                                . "ProductName, "
                                . "ProductPrice, "
                                . "ProductShortDesc, "
                                . "ProductImage "
                            . "FROM "
                                . "products "
                            . "ORDER BY ProductPrice ASC");
        } catch (Exception $e) {
            echo $e->getMessage();
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
    
    require ('includes/database.php');
    
    try {
        $results = $db->query("SELECT "
                                . "ProductID, "
                                . "ProductName, "
                                . "ProductPrice, "
                                . "ProductShortDesc, "
                                . "ProductImage "
                            . "FROM "
                                . "products "
                            . "ORDER BY ProductPrice DESC"
                            . "LIMIT 6");
        } catch (Exception $ex) {
            echo "Data could not be retirved from the database.";
            exit;
    }
    $recent = $results->fetchAll(PDO::FETCH_ASSOC);
    
    return $recent;
}

/* 
 * return a single user
 */

function get_user_single() {
    require_once ('includes/config.php');
    require_once ('includes/database.php');
    $email = $_POST['email'];
    
    $stmt = $db->prepare(
                                "SELECT "
                                        . "UserFirstName "
                              . "FROM "
                                        . "users "
                              . "WHERE "
                                        . "UserEmail = :email"
                );
    $stmt->bindParam(":email", $email);   
    $stmt->execute();
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $user;
}

/* Counts the total number of products  */

function get_products_count() {
    require 'includes/database.php';
    
    try {
        $results = $db->query("SELECT COUNT(ProductID) FROM products");
    } catch (Exception $ex) {
        echo "Data could not be retrieved from the database.";
        exit;
    }
    
    return intval($results->fetchColumn(0));
}

/*
 * Rreturn a specified subset of products, based on the values received,
 * using the order of the elements in the array.
 */

function get_products_subset($posStart, $posEnd) {
    
    $offset = $posStart - 1;
    $rows = $posEnd - $posStart + 1;
    
    require 'includes/database.php';
    
    try {
        $results = $db->prepare("SELECT "
                                . "ProductID, "
                                . "ProductName, "
                                . "ProductPrice, "
                                . "ProductShortDesc, "
                                . "ProductImage "
                            . "FROM "
                                . "products "
                            . "ORDER BY ProductPrice ASC"
                            . "LIMIT ?, ?");
        $results->bindParam(1,$offset,PDO::PARAM_INT);
        $results->bindParam(2,$rows,PDO::PARAM_INT);
        $results->execute();
    } catch (Exception $ex) {
        echo "Data cound not be retrieved from the database.";
        exit;
    }
    
    $subset = $results->fetchAll(PDO::FETCH_ASSOC);
    
    return $subset;
}

/* lookS for a search term in the product names */
function get_products_search($s) {

    require 'includes/database.php';

    try {
        $results = $db->prepare("SELECT "
                                    . "ProductID, "
                                    . "ProductName, "
                                    . "ProductPrice, "
                                    . "ProductShortDesc, "
                                    . "ProductImage "
                                . "FROM "
                                    . "products "
                                . "WHERE "
                                    . ""
                                . "ORDER BY ProductPrice ASC");
        $results->bindValue(1,"%" . $s . "%");
        $results->execute();
    } catch (Exception $ex) {
        echo 'Data could not be retieved from the database.';
        exit;
    }
     
    $matches = $results->fetchAll(PDO::FETCH_ASSOC);
    return $matches;
}   
?>
