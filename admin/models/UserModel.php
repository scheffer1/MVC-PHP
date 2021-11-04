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
}