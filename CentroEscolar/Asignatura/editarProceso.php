<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: index.php?mensaje=error');
    }
    
    //Se obtiene la conexion con la clase conexion
    include 'model/conexion.php';
    $id = $_POST['txtId'];
    $Nombre = $_POST['txtNombre'];
    //Se mandan a llamar los datos para poder hacer la actualizacion

    $sentencia = $bd->prepare("UPDATE asignatura SET Nombre=? WHERE id = ?");
    $resultado = $sentencia->execute([$Nombre,$id]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>