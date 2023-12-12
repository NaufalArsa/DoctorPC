<?php

// session_start();

include ("Model.php");

class Controller {

    public $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function authenticationLogin($username, $password) {
        $this->model->authenticationLogin($username, $password);
        header("location: ../resources/dashboard.php");
    }

    public function showrequest(){
        $dataReq = $this->model->showrequest();
        include("../resources/views/service-request.php");
    }


    // FITUR REVIEW [ALAM]
    public function addReview($userName, $reviewText) {
        $this->model->addReview($userName, $reviewText);
        header("Location: ../resources/views/review-users.php");
    }

    public function displayReviews() {
        return $this->model->getReviews();
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