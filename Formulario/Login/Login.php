<?php
session_start();
include("Login-server.php");
?>
<html>

<head>
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="/Formulario/Style.css">
</head>

<body>
    <form action="" method="post">
        <p>Email:<input type="text" name="email" value="<?php
                                                        if (isset($email)) echo "$email"?>"/></p>
        <p>Contraseña<input type="password" name="contraseña" value="" /></p>
        <p><input type="submit" name="submitIn" value="Iniciar sesion" /></p>
        <a href="/Formulario/Registrarse/Registro.php"><input type="button" value="Registrarse"></a>
    </form>
</body>

</html>
