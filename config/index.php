<?php

include ("../app/Controller.php");

$controller = new Controller();

if (isset($_GET['login'])) {
$username = $_POST['username'];
$password = $_POST['password'];

session_start();
$_SESSION['name'] = $username;


$controller->authenticationLogin($username, $password);

}

?>