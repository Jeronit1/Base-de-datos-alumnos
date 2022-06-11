<link rel="stylesheet" href="Style.css">
<?php
include("Union-Server.php");
    if ((empty ($_SESSION["email"]))) {
            header("location: Login.php");
        } else {
        
if (isset($_POST['submit'])) {
    if (empty($name)) {
        echo "<p class='error'>* Agregue su Nombre</p>";
    }
    if (empty($age)) {
        echo "<p class='error'>* Agregue su Edad</p>";
    }
    if (empty($email)) {
        echo "<p class='error'>* Agregue su Email</p>";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p class='error'>* Su correo es incorrecto</p>";
        }
    }
    if (empty($tel)) {
        echo "<p class='error'>* Agregue su Telefono</p>";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    } else{
    if (strlen($_POST['name']) > 1 && strlen($_POST['age']) > 1 && strlen($_POST['email']) > 1 && strlen($_POST['tel']) > 1) {
        $Pedido = "INSERT INTO `base de datos alumnos`(`Nombre`, `Edad`, `Email`, `Telefono`, `Fecha de registro`, ID_Login) VALUES ('$name','$age','$email','$tel','$FechaRegistro',".$_SESSION['IDLogin'].")";
        //echo $Pedido;
        $Resultado = mysqli_query($conex, $Pedido);
        if ($Resultado) {
            echo "<h>Te inscribiste a alumnos</h>";
        } else {
            echo "<h2>Ocurrio un error</h2>";
        }
    }}}
}