<?php
    // Esta sentencia dice que si estan vacios los campos de nombre, edad y signo
 
    if(empty($_POST["oculto"]) || empty($_POST["txtId"]) || empty($_POST["txtNombre"]) || empty($_POST["txtApellido"]) || empty($_POST["txtDireccion"]) || empty($_POST["txtFecha"])|| empty($_POST["txtNivel"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    //Se obtiene la conexion de la clase conexion
    include_once 'model/conexion.php';
    $id = $_POST["txtId"];
    $Nombre = $_POST["txtNombre"];
    $Apellido = $_POST["txtApellido"];
    $Direccion = $_POST["txtDireccion"];
    $Fecha_nacimiento = $_POST["txtFecha"];
    $nivel_academico = $_POST["txtNivel"];
    // Se colocan de los datos para insertarlos a la base de datos
    $sentencia = $bd->prepare("INSERT INTO profesor (id, Nombre, Apellido, Direccion, Fecha_nacimiento, nivel_academico)VALUES (?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$id, $Nombre,$Apellido,$Direccion, $Fecha_nacimiento, $nivel_academico]);
    // Esta sentencia dice que si el resultado es verdadero, se enviará un mensaje de registrado
    
    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>