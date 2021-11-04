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

    public function createClient(){
        require_once('views/templates/header.php');
        require_once('views/client/createClients.php');
        require_once('views/templates/footer.php');
    }

    public function createClientAction()
    {
        require_once('models/ClientModel.php');
        $clientModel = new ClientModel();

        

        $arrayClients['name'] = $_POST['name'];
        $arrayClients['phone'] = $_POST['phone'];
        $arrayClients['email'] = $_POST['email'];
        $arrayClients['address'] = $_POST['address'];

        $clientModel -> createClients($arrayClients);

        header('Location:index.php?controller=client&action=listClients');
    }
    public function updateClient($id)
    {
        require_once('models/ClientModel.php');
        $clientModel = new ClientModel();
        $result = $clientModel -> listClient($id);

        if($arrayClient = $result -> fetch_assoc()){
        require_once('views/templates/header.php');
        require_once('views/client/updateClient.php');
        require_once('views/templates/footer.php');
        }
    }
    public function updateClientAction($id)
    {
        require_once('models/ClientModel.php');
        $clientModel = new ClientModel();

        
        $arrayClients['idClient'] = $id;
        $arrayClients['name'] = $_POST['name'];
        $arrayClients['phone'] = $_POST['phone'];
        $arrayClients['email'] = $_POST['email'];
        $arrayClients['address'] = $_POST['address'];

        $clientModel -> updateClient($arrayClients);

        header('Location:index.php?controller=client&action=listClients');
    }

    public function deleteClient($id)
    {
        require_once('models/ClientModel.php');
        $clientModel = new ClientModel();
        $clientModel -> deleteClient($id);
        header('Location:index.php?controller=client&action=listClients');
    }
    
}
?>