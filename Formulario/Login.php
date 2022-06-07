<?php
session_start();
?>
<html>

<head>
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <form action="Formulario.php" method="post">
        <p>Email:<input type="text" value="<?php
                                                        echo $_SESSION["email"]; ?>" /></p>
        <p>Contraseña<input type="password" name="contraseña" value="" /></p>
        <p><input type="submit" name="submitIn" value="Iniciar sesion" /></p>
    </form>
    <?php
    include("Register-server.php");
    ?>
</body>

</html>