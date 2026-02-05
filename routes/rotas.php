<?php 
include "./controller/controlador.php";


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
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
    peixespage();
}
else if ($url == "/canil/pesquisa"){
    pesquisapage();
}
else if ($url == "/canil/passaros"){
    passarospage();
}
else if ($url == "/canil/cobras"){
    cobraspage();
}
else {
    echo "404 not found";
}
?>