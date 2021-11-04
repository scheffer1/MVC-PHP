<?php 

class SiteController{

    public function inicio(){
        require_once("views/templates/header.php");
        require_once("views/pages/inicio.php");
        require_once("views/templates/footer.php");
    }

    public function contato(){
        require_once("views/templates/header.php");
        require_once("views/pages/contato.php");
        require_once("views/templates/footer.php");
    }
}
?>