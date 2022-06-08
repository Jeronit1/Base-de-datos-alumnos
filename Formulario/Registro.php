<html>

<head>
    <title>Registrarse</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <?php
    include("Register-server.php");
    if (isset($_POST['submitUp'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $contraseña = trim($_POST['contraseña']);
        $contraseña2 = trim($_POST['contraseña2']);
    }
    ?>
    <form action="" method="post">
       
        <p>Nombre:<input type="text" name="name" value="<?php
                                                        if (isset($name)) echo "$name" ?>" /></p>
        <p>Email:<input type="text" name="email" value="<?php
                                                        if (isset($email)) echo "$email" ?>" /></p>
        <p>Contraseña:<input type="password" name="contraseña" value="<?php
                                                        if (isset($contraseña)) echo "$contraseña" ?>" /></p>
        <p>Confirmar Contraseña:<input type="password" name="contraseña2" value="" /></p>                                                                                           
        <p><input type="submit" name="submitUp" value="Registrarse" /></p>
    </form>
</body>