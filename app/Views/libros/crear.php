<?= $head; ?>
<br>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Formulario</h5>
        <p class="card-text">Agrega un nuevo libro</p><br>
        <form method="post" action="<?= site_url('/guardar') ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Nombre del libro:</label>
                <input id="nombre" value="<?= old('nombre'); ?>" class="form-control" type="text" name="nombre" placeholder="Ingresa aqui el nombre de la imagen">
            </div>
            <div class="form-group">
                <label for="imagen">Ingresa la imagen del libro:</label>
                <input id="imagen" class="form-control-file" type="file" name="imagen">
            </div><br>
            <button class="btn btn-success" type="submit">Guardar</button>
            <br><br>
            <a href="<?= base_url('listar'); ?>">Regresar</a>
        </form>
    </div>
</div>
<?= $footer; ?>