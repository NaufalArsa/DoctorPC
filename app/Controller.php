<?php

// session_start();

include ("Model.php");

class Controller {

    public $model;
    // public $data = array();


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

    public function showDataSupply() {
        $data = $this->model->showDataSupply();
        include("../resources/views/supply-list.php");
    }   

    public function getDataSupplyLaptop() {
        return $this->model->getDataSupplyLaptop();
    }

    public function getDataSupplyDesktop() {
        return $this->model->getDataSupplyDesktop();
    }

    public function getDataSupplyGadget() {
        return $this->model->getDataSupplyGadget();
    }

    public function getDataPreview($id) {
        return $this->model->getDataPreview($id);
    }


}

?>