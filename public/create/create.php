<h2>Nuevo producto</h2>

<form action="/tienda_php/public/create/store.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="number" name="precio" placeholder="Precio" required>

    <button type="submit" class="btn-guardar">Guardar</button>
    <button type="button" class="btn-cerrar" onclick="cerrarModal()">Cerrar</button>
</form>


