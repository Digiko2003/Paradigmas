<?php 
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=error');
        exit();
    }
    

    include 'model/conexion.php';
    $id = $_GET['id'];
    //Se obtienen los datos 

    $sentencia = $bd->prepare("DELETE FROM asignatura where id = ?;");
    $resultado = $sentencia->execute([$id]);
    
    // Si la conexión es correcta se imprime el mensaje de eliminado
    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=eliminado');
    } else {
        header('Location: index.php?mensaje=error');
    }
    
?>