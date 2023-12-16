<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// include "../database/connection.php";

class Model {
    
    public $hasil = array();

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



    public function checkPassword($username, $password)
    {
        global $connection;

        if ($connection === null) {
            die('Database connection is null. Check your connection.');
        }

        $stmt = $connection->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
        if (!$stmt) {
            die('Prepare statement failed: ' . $connection->error);
        }

        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();

        if ($stmt->error) {
            die('Error during statement execution: ' . $stmt->error);
        }

        $stmt->store_result();
        $validate = $stmt->num_rows;

        $stmt->close();

        return $validate > 0;
    }

    public function updateUsername($oldUsername, $newUsername)
    {
        global $connection;
        $stmt = $connection->prepare("UPDATE user SET username = ? WHERE username = ?");
        $stmt->bind_param("ss", $newUsername, $oldUsername);
        $stmt->execute();

        if ($stmt->error) {
            echo "Error: " . $stmt->error;
            exit();
        }
    }

    public function updateEmail($username, $newEmail)
    {
        global $connection;
        $stmt = $connection->prepare("UPDATE user SET email = ? WHERE username = ?");
        $stmt->bind_param("ss", $newEmail, $username);
        $stmt->execute();

        if ($stmt->error) {
            echo "Error: " . $stmt->error;
            exit();
        }
    }

    public function updatePassword($username, $newPassword)
    {
        global $connection;
        $stmt = $connection->prepare("UPDATE user SET password = ? WHERE username = ?");
        $stmt->bind_param("ss", $newPassword, $username);
        $stmt->execute();

        if ($stmt->error) {
            echo "Error: " . $stmt->error;
            exit();
        }
    }
}


?>