<?php
session_start();
?>
<html>

<head>
    <title>Formulario</title>
    <link rel="stylesheet" href="/Formulario/Style.css">
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $age = trim($_POST['age']);
        $email = trim($_POST['email']);
        $tel = ($_POST['tel']);
        $FechaRegistro = date("y/m/d");
    }
    ?>
    <a href="/Formulario/Login/logout.php"><input type="button" value="Cerrar sesion" Cerrar Sesión></a>
    <form action="" method="post" enctype="multipart/form-data">
        <p>Nombre:<input type="text" name="name" value="<?php
                                                        if (isset($name)) echo "$name" ?>" /></p>
        <p>Edad:<input type="number" min=6 name="age" value="<?php
                                                                if (isset($age)) echo "$age" ?>" /></p>
        <p>Email:<input type="text" name="email" value="<?php
                                                        echo $_SESSION["email"]; ?>" /></p>
        <p>Telefono<input type="number" name="tel" value="<?php
                                                            if (isset($tel)) echo "$tel" ?>" /></p>
        <!--<input type="file" name="Imagen">     -->
        <input type="file" name="Imagen" id="seleccionArchivos" accept="image/*">
        <br><br>
        <!-- La imagen que vamos a usar para previsualizar lo que el usuario selecciona -->
        <img id="imagenPrevisualizacion">
        <script src="script.js"></script>
        <p><input type="submit" name="submit" value="Enviar" /></p>
    </form>

    <?php
    include("Server-Form.php");
    ?>
</body>

</html>