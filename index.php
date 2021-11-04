<?php 
    ini_set('display_errors',1);
    ini_set('display_startup_errors,',1);
    error_reporting(E_ALL);


    if(!isset($_GET['controller'])){
        require_once('controllers/SiteController.php');
        $site = new SiteController();
        $site -> inicio();
    }else{
        switch($_REQUEST['controller']){
            case 'site':
                require_once('controllers/SiteController.php');
                $site = new SiteController();
                if(!isset($_GET['action'])){
                    $site -> home();
                }else{
                    switch ($_REQUEST['action']){
                        case 'inicio':
                            $site -> inicio();
                        break;
                        case 'contato':
                            $site -> contato();
                    }
                }
            break;
            case 'client':
                require_once('controllers/ClientController.php');
                $client = new ClientController();
                if(!isset($_GET['action'])){
                    $client -> inicio();
                }else{
                    switch($_REQUEST['action']){
                        case 'listClients':
                            $client -> listClients();
                        break;
                        }
                    }
            break;        
        break;
        }
    }

?>