<?php

class ClientController{


    public function listClients(){
    require_once('models/ClientModel.php');
    $clientModel = new ClientModel();
    $result = $clientModel -> listClients();

    $arrayContacts = array();


    while($contact = $result -> fetch_assoc()){
        array_push($arrayContacts, $contact);
    }
    Header('Content-Type: application/json');
    echo json_encode($arrayContacts);
    }


    public function createClients()
    {
        require_once('models/ClientModel.php');
        $clientModel = new ClientModel();
        
        
        $client = json_decode(file_get_contents('php://input'));
        $arrayClients['name'] = $client -> nome;
        $arrayClients['phone'] = $client -> phone;
        $arrayClients['email'] = $client -> email;
        $arrayClients['address'] = $client -> address;
        
       $clientModel -> createClients($arrayClients);

        
    }
    
    
    public function updateClient($id)
    {
        require_once('models/ClientModel.php');
        $clientModel = new ClientModel();

        $client = json_decode(file_get_contents('php://input'));
        $arrayClients['idClient'] = $id;
        $arrayClients['name'] = $client -> nome;
        $arrayClients['phone'] = $client -> phone;
        $arrayClients['email'] = $client -> email;
        $arrayClients['address'] = $client -> address;

        $clientModel -> updateClient($arrayClients);

       
    }

    public function deleteClient($id)
    {
        require_once('models/ClientModel.php');
        $clientModel = new ClientModel();
        $clientModel -> deleteClient($id);
        
    }
    
}
?>