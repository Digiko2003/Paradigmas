<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("select * from inscripcion where id = ?;");
    $sentencia->execute([$id]);
    $inscripcion = $sentencia->fetch(PDO::FETCH_OBJ);

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
                        value="<?php echo $inscripcion->id; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Id de Asignatura: </label>
                        <input type="text" class="form-control" name="txtIdAsignatura" required 
                        value="<?php echo $inscripcion->idasignatura; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Id de alumno: </label>
                        <input type="text" class="form-control" name="txtIdAlumno" autofocus required
                        value="<?php echo $inscripcion->idalumno; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Id de profesor: </label>
                        <input type="text" class="form-control" name="txtIdProfesor" autofocus required
                        value="<?php echo $inscripcion->idprofesor; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha: </label>
                        <input type="text" class="form-control" name="txtFecha" autofocus required
                        value="<?php echo $inscripcion->fecha; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $inscripcion->id; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>