<?php 
include "./controller/controlador.php";

$url = $_SERVER['REQUEST_URI'];
echo $url;

if($url == "/canil/"){
    mainpage();
}
else if ($url == "/canil/gatos"){
   gatospage();
}
else if ($url == "/canil/cachorros"){
    cachorrospage();
}
else if ($url == "/canil/peixes"){
    peixepage();
}
else if ($url == "/canil/pesquisa"){
    pesquisapage();
}
else {
    mainpage();
}
?>