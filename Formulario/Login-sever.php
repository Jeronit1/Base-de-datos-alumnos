
<link rel="stylesheet" href="Style.css">
<?php
session_start();
$contraseña2 = $_SESSION["contraseña2"];
include("Union-Server.php");

if (isset($_POST['submitIn'])) {
    $email = trim($_POST['email']);
    $contraseña = trim($_POST['contraseña']);
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
    if ($contraseña!=$contraseña2){
        echo "<p class='error'>* Contraseña incorrecta</p>";
    } else {
    if (strlen($_POST['email']) > 1 && strlen($_POST['contraseña']) > 1) {
        $Resultado = mysqli_query($conex, $Pedido);
        if ($Resultado) {
            echo "<h>Ingresaste correctamente</h>";
            session_start();
            $_SESSION["email"] = "$email";
            header("location: Formulario.php");
        } else {
            echo "<h2>Ocurrio un error</h2>";
        }
    }}}
}