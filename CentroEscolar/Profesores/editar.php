<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("select * from profesor where id = ?;");
    $sentencia->execute([$id]);
    $profesor = $sentencia->fetch(PDO::FETCH_OBJ);

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
                        value="<?php echo $profesor->id; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" required 
                        value="<?php echo $profesor->Nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido: </label>
                        <input type="text" class="form-control" name="txtApellido" autofocus required
                        value="<?php echo $profesor->Apellido; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Direccion: </label>
                        <input type="text" class="form-control" name="txtDireccion" autofocus required
                        value="<?php echo $profesor->Direccion; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha_Nacimiento: </label>
                        <input type="text" class="form-control" name="txtFecha" autofocus required
                        value="<?php echo $profesor->Fecha_nacimiento; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nivel Academico: </label>
                        <input type="text" class="form-control" name="txtNivel" autofocus required
                        value="<?php echo $profesor->nivel_academico; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $profesor->id; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>