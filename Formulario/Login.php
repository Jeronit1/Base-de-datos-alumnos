<?php
session_start();
include("Login-server.php");

if(count($_POST)> 0) {
    $query="select * from `login-alumnos` where email = '".$_POST["email"]."' and contraseña = '".$_POST["contraseña"]."'";
    //echo $query;
    $data=mysqli_query($conex,$query);
    if (($row = mysqli_fetch_array($data))) {
        //usuariologuado
        $_SESSION["IDLogin"] = $row["IDLogin"]; 
        header("location: Formulario.php");
    } else {
        //no hay usuaior
    }

}
?>
<html>

<head>
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <form action="" method="post">
        <p>Email:<input type="text" name="email" value="<?php
                                                        if (isset($email)) echo "$email"?>"/></p>
        <p>Contraseña<input type="password" name="contraseña" value="" /></p>
        <p><input type="submit" name="submitIn" value="Iniciar sesion" /></p>
    </form>
    <?php
    include("Register-server.php");
    ?>
</body>

</html>
