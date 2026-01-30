<?php 
include "./data/animals.php";

function mainpage() {
    global  $items;
    $banner = "./images/allanimals.jpg";
    $title = "Todo os animais";
    $content = $items;

    include "./include/layout.php";
}
function gatospage() {
    $banner = "./images/allanimals.jpg";
    $title = "gatos";
    $content = $items;

    include "./include/layout.php";
}
function cachorrospage() {
    $banner = "./images/allanimals.jpg";
    $title = "cachorros";
    $content = $items;

    include "./include/layout.php";
}
function peixespage() {
    $banner = "./images/allanimals.jpg";
    $title = "peixes";
    $content = $items;

    include "./include/layout.php";
}
?>




