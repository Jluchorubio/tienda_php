function abrirModal(html) {
    document.getElementById("modal-content").innerHTML = html;
    document.getElementById("modal-bg").style.display = "flex";
}

function cerrarModal() {
    document.getElementById("modal-bg").style.display = "none";
}
//-------------
function crearProducto() {
    abrirModal(`
        <h2>Nuevo producto</h2>
        <form action="/tienda_php/public/create/store.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="number" name="precio" placeholder="Precio" required>
            <button type="submit">Guardar</button>
        </form>
        <button onclick="cerrarModal()">Cerrar</button>
    `);
}
//--------------------
function editarProducto(id) {
    fetch(`/tienda_php/public/update/edit.php?id=` + id)
    .then(response => response.text())
    .then(html => {
        abrirModal(html + `<button onclick="cerrarModal()">Cerrar</button>`);
    });
}