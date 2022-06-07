<html>

<head>
    <title>Formulario</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <?php
    session_start();
    if (isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $age = trim($_POST['age']);
        $email = trim($_POST['email']);
        $tel = ($_POST['tel']);
        $FechaRegistro = date("y/m/d");
    }
    ?>
    <form action="" method="post">
        <p>Nombre:<input type="text" name="name" value="<?php
                                                        if (isset($name)) echo "$name" ?>" /></p>
        <p>Edad:<input type="number" min=6 name="age" value="<?php
                                                                if (isset($age)) echo "$age" ?>" /></p>
        <p>Email:<input type="text" name="email" value="<?php
                                                         echo $_SESSION["email"]; ?>" /></p>
        <p>Telefono<input type="number" name="tel" value="<?php
                                                            if (isset($tel)) echo "$tel" ?>" /></p>
        <p><input type="submit" name="submit" value="Enviar" /></p>
    </form>
    <?php
    include("Server-Form.php");
    ?>
</body>

</html>