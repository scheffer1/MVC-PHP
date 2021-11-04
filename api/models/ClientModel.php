<?php
class ClientModel{

    Public function listClient($id){
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $connection = $connectClass -> getConn();

        $sql = "
        SELECT * from 
            clients
            WHERE
            idClient = {$id}
            ";
        return $connection -> query($sql);
    }
    
    
    
    
    
    Public function listClients(){
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $connection = $connectClass -> getConn();

        $sql = 'SELECT * from contacts';

        return $connection -> query($sql);
    }


    public function createContato($arrayContato)
    {
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $connection = $connectClass -> getConn();

        $sql = "
                INSERT INTO contacts
                (name, email, message)
                VALUES(
                    '{$arrayContato['name']}',
                    '{$arrayContato['email']}',
                    '{$arrayContato['message']}'
                    
                    )
        ";
        return $connection -> query($sql);
    }

    public function updateClient($arrayClient)
    {
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $connection = $connectClass -> getConn();

        $sql = "
                UPDATE clients
                    set
                        name='{$arrayClient['name']}',
                        phone='{$arrayClient['phone']}',
                        email='{$arrayClient['email']}',
                        address='{$arrayClient['address']}'
                    where
                        idClient = {$arrayClient['idClient']}
        ";
        return $connection -> query($sql);
    }

    public function deleteClient($id)
    {
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $connection = $connectClass -> getConn();

        $sql = "
        DELETE FROM 
            clients
            WHERE
            idClient = {$id}
            ";
            return $connection -> query($sql);
    }




}

?>