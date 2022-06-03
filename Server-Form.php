<?php
include("Union-Server.php");
if(isset($_POST['submit'])){
    if(strlen ($_POST['name']) > 1 && strlen ($_POST['age']) > 1 && strlen ($_POST['email']) > 1 && strlen ($_POST['tel']) > 1 ){
    $name = trim($_POST['name']);
    $age = trim($_POST['age']);
    $email = trim($_POST['email']);
    $tel = trim($_POST['tel']);
    $FechaRegistro = date("y/m/d");
    $Pedido = "INSERT INTO `base de datos alumnos`(`Nombre`, `Edad`, `Email`, `Telefono`, `Fecha de registro`) VALUES ('$name','$age','$email','$tel','$FechaRegistro')";
    $Resultado = mysqli_query($conex,$Pedido);
    if ($Resultado){
        echo "<h>Te inscribiste a alumnos</h>";
    } else {
        echo "<h2>Ocurrio un error</h2>";
    }
    } else {
        echo "<h2>Complete los campos</h2>";
    }
}
?>
