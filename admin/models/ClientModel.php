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

        $sql = 'SELECT * from clients';

        return $connection -> query($sql);
    }


    public function createClients($arrayClient)
    {
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $connection = $connectClass -> getConn();

        $sql = "
                INSERT INTO clients
                (name, email, phone, address)
                VALUES(
                    '{$arrayClient['name']}',
                    '{$arrayClient['phone']}',
                    '{$arrayClient['email']}',
                    '{$arrayClient['address']}'
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