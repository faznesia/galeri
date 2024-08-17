<?php
$directory = "uploads/";
$images = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
$images = array_map(function($image) use ($directory) {
    return str_replace($directory, '', $image);
}, $images);

echo json_encode($images);
?>
