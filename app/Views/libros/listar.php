<?= $head; ?>
<center>
    <h3>Lista de los libros</h3><br>
    <a href="<?= base_url('crear') ?>">Crear un libro</a>
</center><br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Manera diferente</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($libros as $lib) : ?>
            <tr>
                <td><?= $lib['id']; ?></td>
                <td><img class="img-fluid" src="<?= base_url() ?>/uploads/<?= $lib['imagen']; ?>" width="100" height="100" alt=""></td>
                <td><?= $lib['nombre']; ?></td>
                <td><?php echo $lib['nombre']; ?></td>
                <td>
                    <a href="<?= base_url('editar/'.$lib['id']); ?>" class="btn btn-primary" type="button">Editar</a>
                    <a href="<?= base_url('borrar/'.$lib['id']); ?>" class="btn btn-danger" type="button">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $footer; ?>