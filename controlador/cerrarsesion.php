<?php
session_start();
error_reporting(0);
$varSesion = $_SESSION['user'];

if($varSesion == null || $varSesion = ''){
    echo 'No tienes autorizacipon';
    die();
    
}

session_destroy();
header("location:../index.php");

?>