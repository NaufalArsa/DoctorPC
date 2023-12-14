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

    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $action = $_POST['action'];

            switch ($action) {
                case 'deleteService':
                    $serviceId = $_POST['serviceId'];
                    $this->deleteService($serviceId);
                    break;
                case 'addRequest':
                    $this->addRequest(
                        $_POST['namaPelanggan'],
                        $_POST['kontakPelanggan'],
                        $_POST['merkDevice'],
                        $_POST['statusService'],
                        $_POST['deskripsi'],
                        $_POST['idMechanic']
                        );
                    break;
            }
        }
    }

    public function showrequest(){
        return $this->model->showrequest();
    }

    public function deleteService($serviceId) {
        $result = $this->model->deleteService($serviceId);
        if ($result) {
            // Redirect atau sesuaikan dengan kebutuhan setelah penghapusan berhasil
            header("Location: ../resources/views/service-request.php");
        } else {
            // Handle jika penghapusan gagal
            echo "Error deleting service.";
        }
    }

    public function addRequest($namaPelanggan, $kontakPelanggan, $merkDevice, $statusService, $deskripsi, $idMechanic) {
        $this->model->addRequest($namaPelanggan, $kontakPelanggan, $merkDevice, $statusService, $deskripsi, $idMechanic);
        // Redirect atau sesuaikan dengan kebutuhan setelah penambahan berhasil
        header("Location: ../resources/views/service-request.php");
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