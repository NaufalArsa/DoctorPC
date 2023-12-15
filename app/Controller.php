<?php

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

    public function getDataSupply() {
        return $this->model->getDataSupply();
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

    public function addData($name, $price, $stock, $idcategory, $image) {
        $this->model->addData($name, $price, $stock, $idcategory, $image);
    }

    public function displaySupplyPage() {
        include("supply-list.php");
    }

    public function updateData($id, $stock) {
        $this->model->updateData($id, $stock);
    }   

    public function deleteData($id) {
        $this->model->deleteData($id);
    }   

}

?>