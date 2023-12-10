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
}

?>