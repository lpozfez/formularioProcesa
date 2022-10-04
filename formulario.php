<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
        $errores=[];
        if(isset($_POST['enviar'])){
            if (empty($_POST['nombre'])){
                $errores['nombre']="Nombre vacío";
            }
            if(empty($_POST['apellidos'])){
                $errores['apellidos']="Apellidos vacío";
            }
            if(isset($_POST['enviar']) && empty($_POST['edad'])){
                $errores['edad']="Edad vacío";
            }
        }
    ?>
    <form id="datosUsuario" action="" method="post">
        <label >Nombre:</label><br>
        <input type="text" name="nombre" value="<?php if(isset($_POST['nombre']))echo $_POST['nombre'];?>"/><br>
        <?php 
            if(isset($_POST['enviar']) && empty($_POST['nombre'])){
                echo $errores['nombre'] ;
            }
        ?>
        <label >Apellidos:</label><br>
        <input type="text" name="apellidos" value="<?php if(isset($_POST['apellidos']))echo $_POST['apellidos'];?>"/><br>
        <?php 
            if(isset($_POST['enviar']) && empty($_POST['apellidos'])){
                echo '<span style="color:red">Debe introducir los apellidos</span><br>';
            }
        ?>

        <label >Edad:</label><br>
        <input type="text" name="edad" value="<?php if(isset($_POST['edad']))echo $_POST['edad'];?>"/><br>
        <?php 
            if(isset($_POST['enviar']) && empty($_POST['edad'])){
                echo '<span style="color:red">Debe introducir una edad</span><br>';
            }
        ?>

        <input type="submit" name="enviar" value="enviar"/>
    </form>
    

</body>
</html>
    
