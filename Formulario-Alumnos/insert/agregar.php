<!DOCTYPE html>
<html>

<head>
    <title>Agregar nuevo</title>
    <link rel="stylesheet" href="/Formulario-Alumnos/style.css">

<?php
$conexion= mysqli_connect('localhost','root','','tp-php')
?>
</head>
<body>
<form action="Proceso_insert.php" method="post">
<table>
        <tr>
            <td>Nombre</td>
            <td>Edad</td>
            <td>Email</td>
            <td>Telefono</td>
            <td>Fecha de registro</td>
            <td>Imagen</td>
            <td>Editar</td>
        </tr>
        <?php
        $SQL= "SELECT * FROM `base de datos alumnos` WHERE 1";
        $Resultado=mysqli_query($conexion,$SQL);
        ?>
        <tr>
        <input type="hidden" value="<?php echo $mostrar['ID']+1 ?>" name="ID" >
            <td><input type="text" value="" name="Nombre" required minlength="4"></td>
            <td><input type="text" value="" name="Edad" required minlength="1"></td>
            <td><input type="text" value="" name="Email" required minlength="5"></td>
            <td><input type="text" value="" name="Telefono" required minlength="6"></td>
            <td><input type="text" value=""name="Fechaderegistro" required minlength="8"></td>
            <td><input type="text" value="" name="Imagen" required minlength="1"></td>
            <td><input type="submit" value="Agregar"></td>
            </tr>
        <?php
         mysqli_free_result($Resultado);
        ?>
    </table>
    </form>
    </body>