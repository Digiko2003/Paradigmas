<?php
    
    if(empty($_POST["oculto"]) || empty($_POST["txtId"]) || empty($_POST["txtNombre"]) || empty($_POST["txtApellido"]) || empty($_POST["txtDireccion"]) || empty($_POST["txtFecha"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }


    include_once 'model/conexion.php';
    $id = $_POST["txtId"];
    $Nombre = $_POST["txtNombre"];
    $Apellido = $_POST["txtApellido"];
    $Direccion = $_POST["txtDireccion"];
    $Fecha_nacimiento = $_POST["txtFecha"];
    // Se colocan de los datos p
    $sentencia = $bd->prepare("INSERT INTO alumnos (id, Nombre, Apellido, Direccion, Fecha_nacimiento)VALUES (?,?,?,?,?);");
    $resultado = $sentencia->execute([$id, $Nombre,$Apellido,$Direccion, $Fecha_nacimiento]);
    
    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>