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
    <div class="conteiner-tableup">
        <div class="table-title">Actualizar</div>
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
            <div class="table-item"><input type="text" value="<?php echo $mostrar['ID'] ?>" name="ID" required minlength="1"></div>
            <div class="table-item"><input type="text" value="<?php echo $mostrar['Nombre'] ?>" name="Nombre" required minlength="4"></div>
            <div class="table-item"><input type="text" value="<?php echo $mostrar['Edad'] ?>" name="Edad" required minlength="1"></div>
            <div class="table-item"><input type="text" value="<?php echo $mostrar['Email'] ?>" name="Email" required minlength="5"></div>
            <div class="table-item"><input type="text" value="<?php echo $mostrar['Telefono'] ?>" name="Telefono" required minlength="6"></div>
            <div class="table-item"><input type="text" value="<?php echo $mostrar['Fecha de registro'] ?>"name="Fechaderegistro" required minlength="8"></div>
            <div class="table-item"><input type="text" value="<?php echo $mostrar['Imagen'] ?>" name="Imagen" required minlength="1"></div>
            <div class="table-item"><input type="text" value="<?php echo $mostrar['ID_Login'] ?>" name="ID_Login" required minlength="1"></div>
            <button class="botonup" input type="submit" value="Actualizar">Agregar</button>
        <?php
        }
        ?>
    </div>
    </form>
    </body>

</html>