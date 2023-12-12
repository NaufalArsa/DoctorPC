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
        $query = mysqli_query($connection, "SELECT * FROM serviceit.service");
        // Fetch data and store it in $this->hasil
        while ($row = mysqli_fetch_assoc($query)) {
            $this->hasil[] = $row;
        }

        return $this->hasil;
    }

    // FITUR REVIEW [ALAM]
    public function saveReview($name, $review) {
        require __DIR__ . "/../database/Connection.php";
        $stmt = $connection->prepare("INSERT INTO reviews (name, review) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $review);
        $stmt->execute();
        return $stmt->insert_id;
    }

    public function getReviews() {
        require __DIR__ . "/../database/Connection.php";
        $result = $connection->query("SELECT * FROM reviews");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
}


?>