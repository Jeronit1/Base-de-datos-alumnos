<?php
session_start();//se inicia la sesion que sirve para guardar variables globales y utilizarlas para cerrar sesion y declarar una variable global
?>
<html>

<head>
    <title>Formulario</title>
    <link rel="stylesheet" href="/Formulario/Style.css">
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {//toma los datos del formulario y lo almaceno en variables
        $name = trim($_POST['name']);
        $age = trim($_POST['age']);
        $email = trim($_POST['email']);
        $tel = ($_POST['tel']);
        $FechaRegistro = date("y/m/d");
    }
    ?>
    <a href="/Formulario/Login/logout.php"><input type="button" value="Cerrar sesion" Cerrar Sesión></a><!--boton que provoca que la sesion se cierre-->
   <?php if ($_SESSION["UserAdmin"]) {//si el usuario es el administrador = se ve el boton ver usuarios?>
    <a href="/Formulario/Usuarios_logeados.php"><input type="button" value="Ver usuarios"></a><!--boton que lleva a la tabla de usuarios logeados-->
    <?php }?>
    <form action="" method="post" enctype="multipart/form-data">
        <p>Nombre:<input type="text" name="name" value="<?php
                                                        if (isset($name)) echo "$name" ?>" /></p><!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
        <p>Edad:<input type="number" min=6 name="age" value="<?php
                                                                if (isset($age)) echo "$age" ?>" /></p><!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
        <p>Email:<input type="text" name="email" value="<?php
                                                        echo $_SESSION["email"]; ?>" /></p><!--El if  Deja escrito en el contenido cuando se recarga la pagina y al entrar a la pagina al ser una variable global -->
        <p>Telefono<input type="number" name="tel" value="<?php
                                                            if (isset($tel)) echo "$tel" ?>" /></p><!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
        <input type="file" name="Imagen" id="seleccionArchivos" accept="image/*"><!-- espacio donde se sube la imagen-->
        <br><br>
        <!-- La imagen que vamos a usar para previsualizar lo que el usuario selecciona -->
        <img id="imagenPrevisualizacion"><!-- muestra la imagen subida-->
        <script src="script.js"></script><!-- se une el script que hace que se muestre la imagen subida-->
        <p><input type="submit" name="submit" value="Enviar" /></p>
    </form>
    <?php
    include("Server-Form.php");//Unir el codigo del server-form
    ?>
</body>

</html>