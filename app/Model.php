<?php

session_start();

//include "../database/connection.php";

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
        require __DIR__ . '/../database/connection.php';
        $query = mysqli_query($connection, "SELECT * FROM serviceit.service");
        while ($row = mysqli_fetch_assoc($query)) {
            $this->hasil[] = $row;
        }

        return $this->hasil;
    }
    public function addRequest($namaPelanggan, $kontakPelanggan, $merkDevice, $deskripsi) {
        require __DIR__ . '/../database/connection.php';
        $stmt = $connection->prepare("INSERT INTO SERVICEIT.SERVICE (NAMA_PELANGGAN, KONTAK_PELANGGAN, MERK_DEVICE, DESKRIPSI) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $namaPelanggan, $kontakPelanggan, $merkDevice, $deskripsi);
        $stmt->execute();
    }

    // FITUR REVIEW [ALAM]
    public function addReview($userName, $reviewText) {
        require __DIR__ . '/../database/connection.php';
        $stmt = $connection->prepare("INSERT INTO reviews (user_name, review_text) VALUES (?, ?)");
        $stmt->bind_param("ss", $userName, $reviewText);
        $stmt->execute();
    }

    public function getReviews() {
        require __DIR__ . '/../database/connection.php';
        $result = $connection->query("SELECT * FROM reviews");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
}


?>