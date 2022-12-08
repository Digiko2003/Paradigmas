<?php
    // Esta sentencia dice que si estan vacios los campos de nombre, edad y signo
    // Manda un mensaje de error y te expulsará del ciclo
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtId"]) || empty($_POST["txtIdAsignatura"]) || empty($_POST["txtIdAlumno"]) || empty($_POST["txtIdProfesor"]) || empty($_POST["txtFecha"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    //Se obtiene la conexion de la clase conexion
    include_once 'model/conexion.php';
    $id = $_POST["txtId"];
    $idasignatura = $_POST["txtIdAsignatura"];
    $idalumno = $_POST["txtIdAlumno"];
    $idprofesor = $_POST["txtIdProfesor"];
    $fecha = $_POST["txtFecha"];
    // Se colocan de los datos para insertarlos a la base de datos
    $sentencia = $bd->prepare("INSERT INTO inscripcion (id, idasignatura, idalumno, idprofesor, fecha)VALUES (?,?,?,?,?);");
    $resultado = $sentencia->execute([$id, $idasignatura, $idalumno, $idprofesor, $fecha]);
    // Esta sentencia dice que si el resultado es verdadero, se enviará un mensaje de registrado
    // En el caso contrario, mandará un mensaje de error y terminará el ciclo
    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>