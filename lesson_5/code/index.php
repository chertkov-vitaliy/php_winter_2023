<?php 
require_once "./data/db.php";

$action = isset($_GET['action'])? $_GET['action']: 'blue' ;

$FOLDER_CONTOLLER = './controller';
$FOLDER_HELPER = './helper';
$folder = [$FOLDER_CONTOLLER, $FOLDER_HELPER];


//Аutoloader
foreach( $folder as $key => $FOLDER) {
    $file = $FOLDER . "/" . $_GET['action'] . ".php"; 
    @include $file;
}


$str = $action($messages);

include "./page/layout.php"

?>

