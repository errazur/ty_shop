<?php

session_start();

// var_dump($_GET);
// $backgroundColor = 'yellow';
// if(isset($_GET['color'])){
//     $backgroundColor = $_GET['color'];
// }


function makeUrl($path){
    return $path . '?' . http_build_query($_GET);
}

$uri = parse_url($_SERVER['REQUEST_URI']);
$path = $uri['path'];

if (isset($_GET['clean_panier?'])){ 
    unset($_SESSION['card']);
}

if($path == '/'){
    include './templates/header.php';
    include './templates/content.php';
}   elseif($path == '/panier') {
    include './templates/header.php';
    include './templates/panier.php';
}   elseif($path == '/add_to_card'){
    include './templates/header.php';
    include './templates/add_to_card.php';
 }  else {
    http_response_code(404);
    include './templates/header.php';
    include './templates/404.php';
}

include './templates/footer.php';

