<?= $head; ?>
<br>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Formulario</h5>
        <p class="card-text">Agrega un nuevo libro</p><br>
        <form method="post" action="<?= site_url('/actualizar') ?>" enctype="multipart/form-data">
            <div class="form-group">
                <img class="img-fluid" src="<?= base_url() ?>/uploads/<?= $libro['imagen']; ?>" width="100" height="100" alt="">
                <input type="hidden" name="id" value="<?= $libro['id']; ?>">
            </div><br>
            <div class="form-group">
                <label for="nombre">Nombre del libro:</label>
                <input id="nombre" value="<?= $libro['nombre']; ?>" class="form-control" type="text" name="nombre" placeholder="Ingresa aqui el nombre de la imagen">
            </div>
            <div class="form-group">
                <label for="imagen">Ingresa la imagen del libro:</label>
                <input id="imagen" class="form-control-file" type="file" name="imagen">
            </div><br>
            <button class="btn btn-info" type="submit">Actualizar</button>
            <br><br>
            <a href="<?= base_url('listar'); ?>">Regresar</a>
        </form>
    </div>
</div>
<?= $footer; ?>