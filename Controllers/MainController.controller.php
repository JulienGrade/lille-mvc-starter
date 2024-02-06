<?php
require_once 'Services/Render/Render.php';
require_once("Models/MainManager/MainManager.model.php");
require_once("Services/Toolbox/Toolbox.php");

class MainController extends Render
{
    private $mainManager;

    public function __construct(){
        parent::__construct(Render::class);
        $this->mainManager = new MainManager();
    }

    public function accueil(): void
    {
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "page_css" => ["accueil.css"],
            "view" => "Views/Accueil/accueil.view.php",
            "template" => "Views/Layouts/base.php"
        ];
        $this->render($data_page);
    }
    public function page1(): void
    {
        $datas = $this->mainManager->getDatas();
       Toolbox::addAlert('test', Toolbox::COULEUR_VERTE);
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "page_css" => ["page1.css"],
            "datas" => $datas,
            "view" => "Views/Page1/page1.view.php",
            "template" => "Views/Layouts/base.php"
        ];
        $this->render($data_page);
    }
    public function page2(): void
    {
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "view" => "Views/Page2/page2.view.php",
            "template" => "Views/Layouts/base.php"
        ];
        $this->render($data_page);
    }
    public function page3(): void
    {
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "page_javascript" => ["page3.js"],
            "view" => "Views/Page3/page3.view.php",
            "template" => "Views/Layouts/base.php"
        ];
        $this->render($data_page);
    }
    public function pageErreur($msg): void
    {
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "msg" => $msg,
            "view" => "Views/Error/404.error.view.php",
            "template" => "Views/Layouts/base.php"
        ];
        $this->render($data_page);
    }
}



