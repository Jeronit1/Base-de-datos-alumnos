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
    <div class="conteiner-tableup">
        <div class="table-title">Eliminar</div>
        <div class="table_header">ID</div>
        <div class="table_header">Nombre</div>
        <div class="table_header">Edad</div>
        <div class="table_header">Email</div>
        <div class="table_header">Telefono</div>
        <div class="table_header">Fecha de registro</div>
        <div class="table_header">Imagen</div>
        <div class="table_header">ID_Login</div>
        <div class="table_header"> Editar</div>
        <?php
        $id = $_GET["ID"];
        $SQL= "SELECT * FROM `base de datos alumnos` WHERE ID = '$id'";
        $Resultado=mysqli_query($conexion, $SQL);
        while ($mostrar=mysqli_fetch_array($Resultado)) {
        ?>
        
        <input type="hidden" value="<?php echo $mostrar['ID'] ?>" name="ID">
        <div class="table-item"><?php echo $mostrar['ID'] ?></div>
        <div class="table-item"><?php echo $mostrar['Nombre'] ?></div>
        <div class="table-item"><?php echo $mostrar['Edad'] ?></div>
        <div class="table-item"><?php echo $mostrar['Email'] ?></div>
        <div class="table-item"><?php echo $mostrar['Telefono'] ?></div>
        <div class="table-item"><?php echo $mostrar['Fecha de registro'] ?></div>
        <div class="table-item"><?php echo $mostrar['Imagen'] ?></div>
        <div class="table-item"><?php echo $mostrar['ID_Login'] ?></div>
        <button class="botonel" input type="submit" value="Eliminar">Eliminar</button>
        
        <?php
        }
        ?>
    </table>
    </form>
</body>

</html>