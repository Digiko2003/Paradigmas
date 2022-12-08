<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: index.php?mensaje=error');
    }
    
    
    include 'model/conexion.php';
    $id = $_POST['txtId'];
    $Nombre = $_POST['txtNombre'];
    $Apellido = $_POST['txtApellido'];
    $Direccion = $_POST['txtDireccion'];
    $Fecha_nacimiento = $_POST['txtFecha'];
    //Se mandan a llamar los datos para poder hacer la actualizacion

    $sentencia = $bd->prepare("UPDATE alumnos SET Nombre=?, Apellido=?,Direccion=?, Fecha_nacimiento=? WHERE id = ?");
    $resultado = $sentencia->execute([$Nombre, $Apellido, $Direccion, $Fecha_nacimiento, $id]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>