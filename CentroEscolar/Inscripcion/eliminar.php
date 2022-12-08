<?php 
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=error');
        exit();
    }
    //Se manda a llamar la conexion

    include 'model/conexion.php';
    $id = $_GET['id'];
    //Se obtienen los datos y se elimina de la base de datos

    $sentencia = $bd->prepare("DELETE FROM inscripcion where id = ?;");
    $resultado = $sentencia->execute([$id]);
    
    // Si la conexión es correcta se imprime el mensaje de eliminado, en caso contrario, arrojará un mensaje de error
    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=eliminado');
    } else {
        header('Location: index.php?mensaje=error');
    }
    
?>