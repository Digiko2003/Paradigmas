<?php 
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=error');
        exit();
    }
    

    include 'model/conexion.php';
    $id = $_GET['id'];
    //Se obtienen los datos y se elimina

    $sentencia = $bd->prepare("DELETE FROM alumnos where id = ?;");
    $resultado = $sentencia->execute([$id]);
    
    // Mensaje de eliminado
    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=eliminado');
    } else {
        header('Location: index.php?mensaje=error');
    }
    
?>