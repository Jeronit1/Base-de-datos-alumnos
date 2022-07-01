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
        $SQL= "SELECT * FROM `base de datos alumnos` WHERE 1";
        $Resultado=mysqli_query($conexion,$SQL);
        while ($mostrar=mysqli_fetch_array($Resultado)) {
        ?>
        <tr>
            <td><?php echo $mostrar['ID'] ?></td>
            <td><?php echo $mostrar['Nombre'] ?></td>
            <td><?php echo $mostrar['Edad'] ?></td>
            <td><?php echo $mostrar['Email'] ?></td>
            <td><?php echo $mostrar['Telefono'] ?></td>
            <td><?php echo $mostrar['Fecha de registro'] ?></td>
            <td></a><?php  echo $mostrar['Imagen'] ?></td>
            <td><?php echo $mostrar['ID_Login'] ?></td>
            <td><a href="actualizar.php?ID=<?php echo $mostrar["ID"];?>">Editar/</a>
            <a href="eliminar.php?ID=<?php echo $mostrar["ID"];?>">Eliminar</a>
            </td>
        </tr>
        <?php
        } mysqli_free_result($Resultado);
        ?>
    </table>
</body>

</html>