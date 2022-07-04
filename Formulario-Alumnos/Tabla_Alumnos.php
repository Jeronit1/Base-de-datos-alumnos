<?php
session_start();
$conexion= mysqli_connect('localhost','root','','tp-php')
?>
<!DOCTYPE html>
<html>

<head>
    <title>Base de datos Alumnos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <div class="conteiner-table">
        <div class="table-title">Datos del usuario</div>
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
        $SQL= "SELECT * FROM `base de datos alumnos` WHERE 1";
        $Resultado=mysqli_query($conexion,$SQL);
        while ($mostrar=mysqli_fetch_array($Resultado)) {
        ?>
        <input type="hidden" value="<?php echo $mostrar['ID'] ?>" name="ID">
            <div class="table-item"><?php echo $mostrar['ID'] ?></div>
            <div class="table-item"><?php echo $mostrar['Nombre'] ?></div>
            <div class="table-item"><?php echo $mostrar['Edad'] ?></div>
            <div class="table-item"><?php echo $mostrar['Email'] ?></div>
            <div class="table-item"><?php echo $mostrar['Telefono'] ?></div>
            <div class="table-item"><?php echo $mostrar['Fecha de registro'] ?></div>
            <td></a><?php  echo $mostrar['Imagen'] ?></td>
            <div class="table-item"><?php echo $mostrar['ID_Login'] ?></div>
            <div class="table-item"><a href="/Formulario-Alumnos/update/actualizar.php?ID=<?php echo $mostrar["ID"];?>">Editar/</a>
            <a href="/Formulario-Alumnos/delete/eliminar.php?ID=<?php echo $mostrar["ID"];?>">Eliminar</a>
        </div>
        <?php
        } mysqli_free_result($Resultado);
        ?>
    </div>
    
    <button class="boton" onclick="window.location.href = '/Formulario-Alumnos/insert/Agregar.php'">Anexar</button>
</body>

</html>