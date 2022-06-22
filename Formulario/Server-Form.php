<link rel="stylesheet" href="Style.css">
<?php
//$Carpet_Destino=$_SERVER['DOCUMENT_ROOT'];
//echo $Carpet_Destino;
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
        //Imagen
        $Nombre_Imagen=$_FILES['Imagen'] ['name'];
       // $Tipo_Imagen=$_FILES['Imagen'] ['type'];
        //$Tamaño_Imagen=$_FILES['Imagen'] ['size'];
        $Carpeta_Destino='./intranet/uploads/';
        move_uploaded_file($_FILES['Imagen'] ['tmp_name'], $Carpeta_Destino.$Nombre_Imagen);
        $Pedido= "INSERT INTO `base de datos alumnos`(`Nombre`, `Edad`, `Email`, `Telefono`, `Fecha de registro`, `Imagen`, `ID_Login`) VALUES ('$name','$age','$email','$tel','$FechaRegistro','$Carpeta_Destino$Nombre_Imagen',".$_SESSION['IDLogin'].")";        //echo $Pedido;
        echo '<img src="'.$Carpeta_Destino.$Nombre_Imagen.'"/>';
       

        $Resultado = mysqli_query($conex, $Pedido);
        if ($Resultado) {
            echo "<h>Te inscribiste a alumnos</h>";
        } else {
            echo "<h2>Ocurrio un error</h2>";
        }
    }}}
}