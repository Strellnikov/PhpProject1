<?php

function get_item_html($id, $item) {
    $output = "<div class="item">"
        . "<img class='slide-image' src='"
        . $item["img"] . "' alt='"
        . '>'
        . '</div>'
    return $output;
}
?>
