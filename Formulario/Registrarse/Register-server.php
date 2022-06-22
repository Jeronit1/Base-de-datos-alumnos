<?php
include("C:/xampp/htdocs/Formulario/Union-Server.php");

if (isset($_POST['submitUp'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $contraseña = trim($_POST['contraseña']);
    $contraseña2 = trim($_POST['contraseña2']);
}

if (isset($_POST['submitUp'])) {
    if (empty($name)) {
        echo "<p class='error'>* Agregue su Nombre</p>";
    }
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
    if ($contraseña!=$contraseña2){
        echo "<p class='error'>* Confirme su contraseña</p>";
    } else {
    if (strlen($_POST['name']) > 1 && strlen($_POST['email']) > 1 && strlen($_POST['contraseña']) > 1) {
        $result= mysqli_query($conex, "SELECT * FROM `login-alumnos` WHERE Email='$email'");
        if(mysqli_num_rows($result)>0)
        {
            // Si es mayor a cero imprimimos que ya existe el usuario
             echo "<p class='error'>Ya existe el Usuario</p>";
        }
        else
        {
        $Pedido = "INSERT INTO `login-alumnos`(`Nombre`, `Email`, `Contraseña`, `Confirmacion`) VALUES ('$name','$email','$contraseña','$contraseña2')";
        $Resultado = mysqli_query($conex, $Pedido);
        if ($Resultado) {
            echo "<h>Te inscribiste a alumnos</h>";
            header("location: /Formulario/Login/Login.php");
        } else {
            echo "<h2>Ocurrio un error</h2>";
        } }
    }}}
}

