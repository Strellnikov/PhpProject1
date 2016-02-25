<?php

require_once('includes/config.php');
require_once ('include/functions.php');
$products = get_products_all();

function get_item_html($id, $item) {
    $output = "<div class="item">"
        . "<img class='slide-image' src='"
        . $item["img"] . "' alt='"
        . '>'
        . '</div>'
    return $output;
}