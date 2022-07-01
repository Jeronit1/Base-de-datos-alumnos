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
    <form action="Proceso_delete.php" method="POST">
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
        <input type="hidden" value="<?php echo $mostrar['ID'] ?>" name="ID">
            <td><?php echo $mostrar['ID'] ?></td>
            <td><?php echo $mostrar['Nombre'] ?></td>
            <td><?php echo $mostrar['Edad'] ?></td>
            <td><?php echo $mostrar['Email'] ?></td>
            <td><?php echo $mostrar['Telefono'] ?></td>
            <td><?php echo $mostrar['Fecha de registro'] ?></td>
            <td><?php echo $mostrar['Imagen'] ?></td>
            <td><?php echo $mostrar['ID_Login'] ?></td>
            <td> <input type="submit" value="Eliminar"></td>
        </tr>
        <?php
        }
        ?>
    </table>
    </form>
</body>

</html>