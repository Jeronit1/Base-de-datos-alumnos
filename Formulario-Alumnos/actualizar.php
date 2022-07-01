<?php
$conexion= mysqli_connect('localhost','root','','tp-php')
?>
<!DOCTYPE html>
<html>

<head>
    <title>Base de datos Alumnos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
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
            <td><input type="text" value="<?php echo $mostrar['ID'] ?>"></input></td>
            <td><input type="text" value="<?php echo $mostrar['Nombre'] ?>"></input></td>
            <td><input type="text" value="<?php echo $mostrar['Edad'] ?>"></input></td>
            <td><input type="text" value="<?php echo $mostrar['Email'] ?>"></input></td>
            <td><input type="text" value="<?php echo $mostrar['Telefono'] ?>"></input></td>
            <td><input type="text" value="<?php echo $mostrar['Fecha de registro'] ?>"></input></td>
            <td><input type="url" value="<?php echo $mostrar['Imagen'] ?>"></input></td>
            <td><input type="text" value="<?php echo $mostrar['ID_Login'] ?>"></input></td>
            <td> <input type="submit" value="Actualizar"></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>