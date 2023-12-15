<?php

session_start();

class Model {
    
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

    public function getDataSupply() {
        require "../../database/connection.php";

        $result = mysqli_query($connection, "SELECT * FROM supply");

        $rows = array();

        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;

    }

    public function getDataPreview($id) {
        require "../../database/connection.php";
        $result = mysqli_query($connection, "SELECT * FROM supply WHERE ID_BARANG = '$id'");
        
        $rows = array();

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

    public function updateData($id, $stock) {
        require "../../database/connection.php";

        $query = mysqli_query($connection, "UPDATE supply 
                                            SET STOK_SUPPLY = STOK_SUPPLY-'$stock' 
                                            WHERE ID_BARANG = '$id'");

        return $query;
    }

    public function deleteData($id) {
        require "../../database/connection.php";

        $query = mysqli_query($connection, "DELETE FROM supply 
                                            WHERE ID_BARANG = '$id'");

        return $query;
    }
}

?>