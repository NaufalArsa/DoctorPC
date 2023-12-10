<?php

session_start();

// include "../database/connection.php";

class Model {
    
    public $hasil = array();

    public function authenticationLogin($username, $password) {
        require "../database/connection.php";
        $query = mysqli_query($connection, "SELECT * FROM user 
                            WHERE username = '$username' AND password = '$password'");
        $validate = mysqli_num_rows($query);
        if ($validate > 0) {
            $_SESSION['login'] = true;
        } else {
            $_SESSION['login'] = false;
        }

        return $_SESSION['login'];
    }

    public function showSupply() {
        require "../database/connection.php";
        $query;
    }
    public function showrequest(){
        require "../database/connection.php";
        $query = mysqli_query($connection, "SELECT * FROM service");
        // Fetch data and store it in $this->hasil
        while ($row = mysqli_fetch_assoc($query)) {
            $this->hasil[] = $row;
        }

        return $this->hasil;
    }
    
}


?>