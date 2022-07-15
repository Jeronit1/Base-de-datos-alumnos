<?php
$conexion= mysqli_connect('localhost','root','','tp-php')//se hace la conexion a la base de datos de mysql
?>
<!DOCTYPE html>
<html>

<head>
    <title>Base de datos Alumnos</title>
    <link rel="stylesheet" href="/Formulario-Alumnos/style.css">
</head>

<body>
<?php
    if (isset($_POST['submit'])) {//toma los datos del formulario y lo almaceno en variables
        $Nombre = trim($_POST['Nombre']);
        $Edad = trim($_POST['Edad']);
        $Telefono = ($_POST['Telefono']);
        $Fecha = date("y/m/d");
        $ID_Login= $_POST['ID_Login'];//Almaceno el id_login en una variable
    }
    ?>
    <form action="" method="POST" enctype="multipart/form-data"><!--formulario que lleva al proceso de update cuando se oprime el boton -->
        <?php
        $id = $_GET["ID"];// Se obtiene en ID del objeto que se va a actualizar
        $SQL= "SELECT * FROM `base de datos alumnos` WHERE ID = '$id'";//se selecciona atraves del id para que muestre el usuario a actualizar
        $Resultado=mysqli_query($conexion, $SQL);//conexion para ver la tabla del usuario
        while ($mostrar=mysqli_fetch_array($Resultado)) {//imprime la tabla del usuario
        ?>
            <input type="hidden" value="<?php echo $mostrar['ID'] ?>" name="ID" required minlength="1"><!--id oculto para hacer el proceso de update no mostrar -->
            <p>Nombre:<input type="text" name="Nombre" value="<?php echo $mostrar['Nombre'] ?>" /></p><!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
            <p>Edad:<input type="number" min=6 name="Edad" value="<?php echo $mostrar['Edad'] ?>" /></p><!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
            <p>Email:<input type="text" name="Email" value="<?php echo $mostrar['Email'] ?>" disabled /></p><!--El if  Deja escrito en el contenido cuando se recarga la pagina y al entrar a la pagina al ser una variable global -->
            <p>Telefono<input type="number" name="Telefono" value="<?php echo $mostrar['Telefono'] ?>" /></p><!--El if  Deja escrito en el contenido cuando se recarga la pagina -->
            <input type="file" name="Imagen" id="seleccionArchivos" accept="image/*"><!-- espacio donde se sube la imagen-->
        <br><br>
        <!-- La imagen que vamos a usar para previsualizar lo que el usuario selecciona -->
        <img id="imagenPrevisualizacion"><!-- muestra la imagen subida-->
        <!--<img src="/Formulario/intranet/uploads/Captura.PNG" alt="imagen">-->
        <script src="/formulario-alumnos/script.js"></script><!-- se une el script que hace que se muestre la imagen subida-->
            <input type="hidden" value="<?php echo $mostrar['ID_Login'] ?>" name="ID_Login" required minlength="1"><!--ID_Login del usuario actual oculto este no se debe modificar -->
            <p><input type="submit" name="submit" value="Actualizar"/></p><!-- Boton de actualizar que lleva al proceso_update -->
        <?php
        }
        include ('Proceso_update.php');
        ?>
    </table>
    </form>
</body>

</html>