<?php 
include "./data/animals.php";
include "./model/models.php";

$active = [
    "main" => "",
    "cachorros" => "",
    "gatos" => "",
    "peixes" => "",
    "passaros" =>"",
    "cobras" =>"",
];

function mainpage() {
    global  $items, $active;
    $active ['main'] = "active";
    $banner = "./images/allanimals.jpg";
    $title = "Todo os animais";
    $content = pegartodos($items);

    include "./include/layout.php";
}
function gatospage() {
    global  $items, $active;
    $active ['gatos'] = "active";
    $banner = "./images/banner_cat.jpg";
    $title = "gatos";
    $lista = pegartodos($items);
    $content = pegartipo("gato",$lista);

    include "./include/layout.php";
}
function cachorrospage() {
    global  $items, $active;
    $active ['cachorros'] = "active";
    $banner = "./images/banner_dog.jpg";
    $title = "cachorros";
    $lista = pegartodos($items);
    $content = pegartipo("cachorro",$lista);


    include "./include/layout.php";
}
function peixespage() {
    global  $items, $active;
    $active ['peixes'] = "active";
    $banner = "./images/banner_fish.jpg";
    $title = "peixes";
    $lista = pegartodos($items);
    $content = pegartipo("peixe",$lista);


    include "./include/layout.php";
}

function passarospage() {
    global  $items, $active;
    $active ['passaros'] = "active";
    $banner = "https://www.shutterstock.com/image-photo/horizontal-banner-two-beautiful-colorful-260nw-2669604365.jpg";
    $title = "passaros";
    $lista = pegartodos($items);
    $content = pegartipo("passaro",$lista);


    include "./include/layout.php";
}

function cobraspage() {
    global  $items, $active;
    $active ['cobras'] = "active";
    $banner = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkY8HqGYHwX7UBbEeaj3Ooqh9QDqg3AhneHQ&s";
    $title = "cobras";
    $lista = pegartodos($items);
    $content = pegartipo("cobra",$lista);


    include "./include/layout.php";
}

function pesquisapage() {
    global  $items;
    $nome = $_GET['nome'] ?? "";
    $lista = pegartodos($items);
    $content = pegarpelonome($items, $lista);

    include "./include/layout.php";

}
?>




