<?php

class UserModel{

        public function GetUser($login)
        {
            require_once('db/ConnectClass.php');
            $Oconn = new ConnectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getConn();

            $sql = "
                SELECT * FROM users
                WHERE user='{$login}'
            ";

           return $conn -> query($sql);
        }


public function createContact($arrayContacts)
{
    require_once('db/ConnectClass.php');
    $connectClass = new ConnectClass();
    $connectClass -> openConnect();
    $connection = $connectClass -> getConn();

    $sql = "
            INSERT INTO contacts
            (name, email, message)
            VALUES(
                '{$arrayContacts['name']}',
                '{$arrayContacts['email']}',
                '{$arrayContacts['message']}'
                
                )
    ";
    return $connection -> query($sql);
}

Public function listContacts(){
    require_once('db/ConnectClass.php');
    $connectClass = new ConnectClass();
    $connectClass -> openConnect();
    $connection = $connectClass -> getConn();

    $sql = 'SELECT * from contacts';

    return $connection -> query($sql);
}
}