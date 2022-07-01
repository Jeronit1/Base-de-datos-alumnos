<?php
$conexion= mysqli_connect('localhost','root','','tp-php')
?>
<!DOCTYPE html>
<html>

<head>
    <title>Base de datos Alumnos</title>
    <link rel="stylesheet" href="/Formulario-Alumnos/style.css">
</head>

<body>
    <form action="Proceso_update.php" method="POST">
    <table>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Edad</td>
            <td>Email</td>
            <td>Telefono</td>
            <td>Fecha de registro</td>
            <td>Imagen</td>
            <td>ID_Login</td>
            <td>Editar</td>
        </tr>
        <?php
        $id = $_GET["ID"];
        $SQL= "SELECT * FROM `base de datos alumnos` WHERE ID = '$id'";
        $Resultado=mysqli_query($conexion, $SQL);
        while ($mostrar=mysqli_fetch_array($Resultado)) {
        ?>
        <tr>
            <td><input type="text" value="<?php echo $mostrar['ID'] ?>" name="ID" required minlength="1"></td>
            <td><input type="text" value="<?php echo $mostrar['Nombre'] ?>" name="Nombre" required minlength="4"></td>
            <td><input type="text" value="<?php echo $mostrar['Edad'] ?>" name="Edad" required minlength="1"></td>
            <td><input type="text" value="<?php echo $mostrar['Email'] ?>" name="Email" required minlength="5"></td>
            <td><input type="text" value="<?php echo $mostrar['Telefono'] ?>" name="Telefono" required minlength="6"></td>
            <td><input type="text" value="<?php echo $mostrar['Fecha de registro'] ?>"name="Fechaderegistro" required minlength="8"></td>
            <td><input type="text" value="<?php echo $mostrar['Imagen'] ?>" name="Imagen" required minlength="1"></td>
            <td><input type="text" value="<?php echo $mostrar['ID_Login'] ?>" name="ID_Login" required minlength="1"></td>
            <td> <input type="submit" value="Actualizar"></td>
        </tr>
        <?php
        }
        ?>
    </table>
    </form>
</body>

</html>