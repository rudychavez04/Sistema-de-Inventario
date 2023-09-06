<?php
session_start();
error_reporting(0);
$varSesion = $_SESSION['user'];

if($varSesion == null || $varSesion = ''){
    echo'Usted no tiene Autorización';
    die();
      
}

?>