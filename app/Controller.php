<?php

// session_start();

include ("Model.php");

class Controller {

    public $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function editProfile($currentPassword, $newUsername, $newEmail, $newPassword)
    {
        $username = $_SESSION['username'];
        $result = $this->model->checkPassword($username, $currentPassword);

        if ($result) {
            $this->model->updateUsername($username, $newUsername);

            if (!empty($newEmail)) {
                $this->model->updateEmail($username, $newEmail);
            }

            if (!empty($newPassword)) {
                $this->model->updatePassword($username, $newPassword);
            }

            $_SESSION['username'] = $newUsername;
            $_SESSION['update_success'] = true;
            header("location: ../dashboard.php");
            exit();
        } else {
            $_SESSION['update_error'] = "Current password is incorrect.";
            header("location: editProfil.php");
            exit();
        }
    }

    public function showrequest(){
        $dataReq = $this->model->showrequest();
        include("../resources/views/service-request.php");
    }


    // FITUR REVIEW [ALAM]
    public function saveReview($review) {
        $userId = $_SESSION['user_id'];
        return $this->model->saveReview($review, $userId);
    }
    

    public function getReviews() {
        return $this->model->getReviews();
    }

    public function getMyReviews($userId) {
        return $this->model->getReviewsByUserId($userId);
    }

    public function deleteReview($reviewId) {
        $userId = $_SESSION['user_id'];
        return $this->model->deleteReview($reviewId, $userId);
    }

    public function updateReview($reviewId, $newReview) {
        $userId = $_SESSION['user_id'];
        return $this->model->updateReview($reviewId, $userId, $newReview);
    }
    

}

?>