<?php

// session_start();

include ("Model.php");

class Controller {

    public $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function showrequest(){
        $dataReq = $this->model->showrequest();
        include("../resources/views/service-request.php");
    }

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

    public function displayMechanicPage() {
        include("mechanic-list.php");
    }

    public function inputMechanic($fname, $lname, $contact, $specialist) {
        return $this->model->addMechanic($fname, $lname, $contact, $specialist);
    }

    public function searchMechanic($contact, $id){
        return $this->model->findMechianic($contact, $id);
    }

    public function modifyMechanic($fname, $lname, $contact, $specialist, $id) {
        $this->model->editMechianic($fname, $lname, $contact, $specialist, $id);
    }

    public function removeMechanic($id) {
        $this->model->deleteMechanic($id);
    }
}

?>