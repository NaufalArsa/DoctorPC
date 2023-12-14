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
        // Fetch data and store it in $this->hasil
        while ($row = mysqli_fetch_assoc($query)) {
            $this->hasil[] = $row;
        }

        return $this->hasil;
    }

    public function deleteService($serviceId) {
        require __DIR__ . '/../database/connection.php';
        $query = mysqli_query($connection, "DELETE FROM serviceit.service WHERE ID_SERVICE = '$serviceId'");
        return $query;
    }

    public function addRequest($namaPelanggan, $kontakPelanggan, $merkDevice, $statusService, $deskripsi, $idMechanic) {
        require __DIR__ . '/../database/connection.php';
        $stmt = $connection->prepare("INSERT INTO serviceit.service (NAMA_PELANGGAN, KONTAK_PELANGGAN, MERK_DEVICE, STATUS_SERVICE, DESKRIPSI, ID_MECHANIC) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $namaPelanggan, $kontakPelanggan, $merkDevice, $statusService, $deskripsi, $idMechanic);
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