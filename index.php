<?php
session_start();
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http").
    "://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

require_once("./Controllers/MainController.controller.php");
$mainController = new MainController();

try {
    if(empty($_GET['page'])){
        $page = "accueil";
    } else {
        $url = explode("/", filter_var($_GET['page'],FILTER_SANITIZE_URL));
        $page = $url[0];
    }

    switch($page){
        case "accueil" : $mainController->accueil();
            break;
        case "page1" : $mainController->page1();
            break;
        case "page2" : $mainController->page2();
            break;
        case "page3" : $mainController->page3();
            break;
        default : throw new Exception("La page n'existe pas");
    }
} catch (Exception $e){
    $mainController->pageErreur($e->getMessage());
}



