<?php
    
    if(empty($_POST["oculto"]) || empty($_POST["txtId"]) || empty($_POST["txtNombre"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    //Se obtiene la conexion de la clase conexion
    include_once 'model/conexion.php';
    $id = $_POST["txtId"];
    $Nombre = $_POST["txtNombre"];
    // Se colocan de los datos para insertarlos a la base de datos
    $sentencia = $bd->prepare("INSERT INTO asignatura (id, Nombre)VALUES (?,?);");
    $resultado = $sentencia->execute([$id, $Nombre]);
    // Esta sentencia dice que si el resultado es verdadero
    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>