<?php

class ClientController{


    public function listClients(){
    require_once('models/ClientModel.php');
    $clientModel = new ClientModel();
    $result = $clientModel -> listClients();

    $arrayClients = array();


    while($client = $result -> fetch_assoc()){
        array_push($arrayClients, $client);
    }

    require_once('views/templates/header.php');
    require_once('views/client/listClients.php');
    require_once('views/templates/footer.php');
}
}
?>