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

    // FITUR APPLY MECHANIC [HAL]

    public function addMechanic($fname, $lname, $contact, $specialist) {
        require '../../database/connection.php';
        $name = $fname . ' ' . $lname;
        $applicant = "Applicant";
        $query = "INSERT INTO mechanic (NAMA_MECHANIC, KONTAK_MECHANIC, ID_SPECIALIST, NOTE) VALUES (?, ?, ?, ?)";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("ssss", $name, $contact, $specialist, $applicant);
        $stmt->execute();
        $result = mysqli_query($connection, "SELECT ID_MECHANIC FROM SERVICEIT.MECHANIC WHERE KONTAK_MECHANIC = '$contact'");
        $row = mysqli_fetch_assoc($result);
        return $row['ID_MECHANIC'];
    }

    public function findMechianic($contact, $id) {
        require '../../database/connection.php';
        $result = mysqli_query($connection, "SELECT NAMA_MECHANIC, KONTAK_MECHANIC, ID_SPECIALIST, ID_MECHANIC FROM SERVICEIT.MECHANIC WHERE KONTAK_MECHANIC = '$contact' AND ID_MECHANIC = '$id'");
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public function editMechianic($fname, $lname, $contact, $specialist, $id) {
        require '../../database/connection.php';
        $name = $fname . ' ' . $lname;
        $query = "UPDATE SERVICEIT.MECHANIC SET NAMA_MECHANIC = ?, KONTAK_MECHANIC = ?, ID_SPECIALIST = ? WHERE ID_MECHANIC = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("ssss", $name, $contact, $specialist, $id);
        $stmt->execute();
    }

    public function deleteMechanic($id) {
        require '../../database/connection.php';
        $query = "DELETE FROM SERVICEIT.MECHANIC WHERE ID_MECHANIC = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("s", $id);
        $stmt->execute();
    }
    
}


?>