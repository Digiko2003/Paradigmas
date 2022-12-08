<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: index.php?mensaje=error');
    }
    
    //Se obtiene la conexion con la clase conexion
    include 'model/conexion.php';
    $id = $_POST['txtId'];
    $idasignatura = $_POST['txtIdAsignatura'];
    $idalumno = $_POST['txtIdAlumno'];
    $idprofesor = $_POST['txtIdProfesor'];
    $fecha = $_POST['txtFecha'];
    //Se mandan a llamar los datos para poder hacer la actualizacion, tanto si llega a encontrar
    //un error en la colocacion de datos

    $sentencia = $bd->prepare("UPDATE inscripcion SET idasignatura = ?, idalumno = ?, idprofesor = ? ,fecha = ?   WHERE id = ?");
    $resultado = $sentencia->execute([$idasignatura, $idalumno, $idprofesor, $fecha,  $id]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>