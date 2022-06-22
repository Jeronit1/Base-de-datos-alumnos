<?php
include("C:/xampp/htdocs/Formulario/Union-Server.php");
if (isset($_POST['submitIn'])) {
    $email = trim($_POST['email']);
    $contraseña = trim($_POST['contraseña']);
    $_SESSION['email'] = "$email";
}

if (isset($_POST['submitIn'])) {
    if (empty($email)) {
        echo "<p class='error'>* Agregue su Email</p>";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p class='error'>* Su correo es incorrecto</p>";
        }}
    if (empty($contraseña)) {
        echo "<p class='error'>* Ingrese una contraseña</p>";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    } else{
    if (strlen($_POST['email']) > 1 && strlen($_POST['contraseña']) > 1) {
        $Pedido = "select * from `login-alumnos` where email = '".$_POST["email"]."' and contraseña = '".$_POST["contraseña"]."'";
        $Resultado = mysqli_query($conex, $Pedido);
        if (($row = mysqli_fetch_array($Resultado))) {
            //usuariologuado
            $_SESSION["IDLogin"] = $row["IDLogin"]; 
        if ($Resultado) {
            echo "<h>Ingresaste correctamente</h>";
            header("location: /Formulario/Formulario.php");
        } else {
            echo "<h2>Ocurrio un error</h2>";
        }
    }  else {
        echo "<p class='error'>*Datos Incorrectos</p>";
        //no hay usuaior
    }}} 
} 
