<?php
require('conexion.php');

$usuario=$_POST['usuario'];
$password=md5($_POST['password']);







$consulta="SELECT * FROM usuario where DNI='$usuario' and passwordUser='$password'";

$resultado=mysqli_query($conexion, $consulta);


$filas=mysqli_num_rows($resultado);
session_start(); 



if($filas){
    header("location:../view/home.php");
    $_SESSION['user']="Flor Escalante";
}
else{
    ?>

    <?php
    header("location:../index.php");
    ?>
    <h1 class="bad">Error</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
