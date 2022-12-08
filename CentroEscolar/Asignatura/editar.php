<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("select * from asignatura where id = ?;");
    $sentencia->execute([$id]);
    $asignatura = $sentencia->fetch(PDO::FETCH_OBJ);

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                <div class="mb-3">
                        <label class="form-label">Id: </label>
                        <input type="text" class="form-control" name="txtId" required 
                        value="<?php echo $asignatura->id; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre de la asignatura: </label>
                        <input type="text" class="form-control" name="txtNombre" required 
                        value="<?php echo $asignatura->Nombre; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $asignatura->id; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>