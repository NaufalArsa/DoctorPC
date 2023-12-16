<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

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
    public function saveReview($review, $userId) {
        require __DIR__ . "/../database/Connection.php";
        $stmt = $connection->prepare("INSERT INTO reviews (review, user_id) VALUES (?, ?)");
        $stmt->bind_param("si", $review, $userId);
        $stmt->execute();
        return $stmt->insert_id;
    }

    public function getReviews() {
        require __DIR__ . "/../database/Connection.php";
        $query = "SELECT reviews.review, user.USERNAME FROM reviews JOIN user ON reviews.user_id = user.ID_USER";
        $result = $connection->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function getReviewsByUserId($userId) {
        require __DIR__ . "/../database/Connection.php";
        $stmt = $connection->prepare("SELECT reviews.*, user.USERNAME FROM reviews JOIN user ON reviews.user_id = user.ID_USER WHERE user_id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function deleteReview($reviewId, $userId) {
        require __DIR__ . "/../database/Connection.php";
        $stmt = $connection->prepare("DELETE FROM reviews WHERE id = ? AND user_id = ?");
        $stmt->bind_param("ii", $reviewId, $userId);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function updateReview($reviewId, $userId, $newReview) {
        require __DIR__ . "/../database/Connection.php";
        $stmt = $connection->prepare("UPDATE reviews SET review = ? WHERE id = ? AND user_id = ?");
        $stmt->bind_param("sii", $newReview, $reviewId, $userId);
        $stmt->execute();
        return $stmt->affected_rows > 0;
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
        $result = mysqli_query($connection, "SELECT ID_MECHANIC FROM SERVICEIT.MECHANIC WHERE KONTAK_MECHANIC = '$contact' ORDER BY ID_MECHANIC DESC LIMIT 1");
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