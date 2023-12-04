<?php

// include "../database/connection.php";

class Model {
    
    public $hasil = array();

    public function authenticationLogin($username, $password) {
        require "../database/connection.php";
        $query = mysqli_query($connection, "SELECT * FROM `user` 
                            WHERE `username` = '$username' and `password` = '$password'");
        return $query->fetch_assoc();
    }

    public function showSupply() {
        require "../database/connection.php";
        $query;
    }

    
}


?>