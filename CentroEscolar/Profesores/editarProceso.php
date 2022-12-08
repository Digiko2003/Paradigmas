<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: index.php?mensaje=error');
    }
    
    //Se obtiene la conexion con la clase conexion
    include 'model/conexion.php';
    $id = $_POST['txtId'];
    $Nombre = $_POST['txtNombre'];
    $Apellido = $_POST['txtApellido'];
    $Direccion = $_POST['txtDireccion'];
    $Fecha_nacimiento = $_POST['txtFecha'];
    $nivel_academico = $_POST['txtNivel'];
    //Se mandan a llamar los datos para poder hacer la actualizacion, tanto si llega a encontrar
    //un error en la colocacion de datos

    $sentencia = $bd->prepare("UPDATE profesor SET Nombre=?, Apellido=?,Direccion=?, Fecha_nacimiento=?, nivel_academico = ? WHERE id = ?");
    $resultado = $sentencia->execute([$Nombre, $Apellido, $Direccion, $Fecha_nacimiento,$nivel_academico, $id]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>