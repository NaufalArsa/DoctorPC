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
        return $this->model->showrequest();
    }

    public function addrequest($namaPelanggan, $kontakPelanggan, $merkDevice, $deskripsi){
        $this->model->addrequest($namaPelanggan, $kontakPelanggan, $merkDevice, $deskripsi);
    }
    
    // FITUR REVIEW [ALAM]
    public function addReview($userName, $reviewText) {
        $this->model->addReview($userName, $reviewText);
        header("Location: ../resources/views/review-users.php");
    }

    public function displayReviews() {
        return $this->model->getReviews();
    }
}

?>