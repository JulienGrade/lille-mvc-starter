<?php

class Toolbox {
    public const COULEUR_ROUGE = "success";
    public const COULEUR_ORANGE = "warning";
    public const COULEUR_VERTE = "danger";

    /**
     * Permet de lancer des alertes à l'utilisateur
     * @param $message
     * @param $type
     * @return void
     */
    public static function addAlert($message,$type):void
    {
        $_SESSION['alert'][]=[
            "message" => $message,
            "type" => $type
        ];
    }

    /**
     * Permet d'afficher les alertes sur une page
     * @return void
     * @throws Exception
     */
    public static function displayAlerts(): void
    {
        if(!empty($_SESSION['alert'])) {
            foreach($_SESSION['alert'] as $alert){
                switch($alert['type']){
                    case self::COULEUR_VERTE : echo "<div class='bg-green-300 text-white ". $alert['type'] ."' role='alert'>
                        ".$alert['message']."
                    </div>";
                        break;
                    case self::COULEUR_ORANGE : echo "<div class='bg-orange-300 text-white ". $alert['type'] ."' role='alert'>
                        ".$alert['message']."
                    </div>";
                        break;
                    case self::COULEUR_ROUGE : echo "<div class='bg-red-300 text-white ". $alert['type'] ."' role='alert'>
                        ".$alert['message']."
                    </div>";
                        break;
                    default : throw new Exception("La couleur n'existe pas");
                }
            }
            unset($_SESSION['alert']);
        }
    }
}

