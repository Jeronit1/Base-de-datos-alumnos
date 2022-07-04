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
    <div class="conteiner-tableup">
        <div class="table-title">Anexar</div>
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
        ?>
       <div class="table-item"><input type="hidden" value="<?php echo $mostrar['ID']+1 ?>" name="ID" ></div>
        <div class="table-item"><input type="text" value="" name="Nombre" required minlength="4"></div>
        <div class="table-item"><input type="text" value="" name="Edad" required minlength="1"></div>
        <div class="table-item"><input type="text" value="" name="Email" required minlength="5"></div>
        <div class="table-item"><input type="text" value="" name="Telefono" required minlength="6"></div>
        <div class="table-item"><input type="text" value=""name="Fechaderegistro" required minlength="8"></div>
        <div class="table-item"><input type="text" value="" name="Imagen" required minlength="1"></div>
        <button class="botonag" input type="submit" value="Agregar">Agregar</button>
        
        <?php
         mysqli_free_result($Resultado);
        ?>
    </div>
    </form>
    </body>