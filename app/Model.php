<?php

session_start();

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

    public function showrequest(){
        require "../database/connection.php";
        $query = mysqli_query($connection, "SELECT * FROM serviceit.service");
        // Fetch data and store it in $this->hasil
        while ($row = mysqli_fetch_assoc($query)) {
            $this->hasil[] = $row;
        }

        return $this->hasil;
    }

    public function showDataSupply() {
        require "../database/connection.php";

        $query = mysqli_query($connection, "SELECT * FROM supply");
        
        // $rows = array();

        // while ($row = mysqli_fetch_assoc($query)) {
        //     $rows[] = $row;
        // }

        return $this->hasil = mysqli_fetch_all($query);

    }

    public function getDataPreview($id) {
        require "../../database/connection.php";
        $result = mysqli_query($connection, "SELECT * FROM supply WHERE ID_BARANG = '$id'");
        
        $rows = array();

        // $row = mysqli_fetch_assoc($result);

        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }
    
    public function getDataSupplyLaptop() {
        require "../../database/connection.php";
        $result = mysqli_query($connection, "SELECT * FROM supply WHERE ID_CATEGORY = 1");

        $rows = array();

        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function getDataSupplyDesktop() {
        require "../../database/connection.php";
        $result = mysqli_query($connection, "SELECT * FROM supply WHERE ID_CATEGORY = 2");

        $rows = array();

        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function getDataSupplyGadget() {
        require "../../database/connection.php";
        $result = mysqli_query($connection, "SELECT * FROM supply WHERE ID_CATEGORY = 3");

        $rows = array();

        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function addData($name, $price, $stock, $idcategory, $image) {
        require "../../database/connection.php";

        $query = mysqli_query($connection, "INSERT INTO supply (NAMA_SUPPLY, STOK_SUPPLY, HARGA_SUPPLY, ID_CATEGORY, GAMBAR_SUPPLY) 
                                    VALUES ('$name', '$stock', '$price', '$idcategory', '$image')");

        return $query;
    }
}


?>