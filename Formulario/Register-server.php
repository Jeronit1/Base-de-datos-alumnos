
<link rel="stylesheet" href="Style.css">
<?php
include("Union-Server.php");

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
        $Pedido = "INSERT INTO `login-alumnos`(`Nombre`, `Email`, `Contraseña`, `Confirmacion`) VALUES ('$name','$email','$contraseña','$contraseña2')";
        $Resultado = mysqli_query($conex, $Pedido);
        if ($Resultado) {
            echo "<h>Te inscribiste a alumnos</h>";
            header("location: Login.php");
        } else {
            echo "<h2>Ocurrio un error</h2>";
        }
    }}}
}
