<?php
include __DIR__ . "/../conexion.php";
$condicion = "";
$param = [];

if (isset($_GET['buscar']) && $_GET['buscar'] !== "") {
    $condicion = " WHERE nombre LIKE :buscar ";
    $param['buscar'] = "%" . $_GET['buscar'] . "%";
}

$sql = "SELECT * FROM productos $condicion ORDER BY id DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute($param);
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<main class="list">

<nav class="opciones">
    <div class="op-left">
        <form action="index.php" method="GET" class="buscador">
            <input type="hidden" name="view" value="list">
            <input type="text" name="buscar" placeholder="Buscar producto..." value="<?= htmlspecialchars($_GET['buscar'] ?? '') ?>">
            <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path stroke-dasharray="40" stroke-dashoffset="40" d="M10.76 13.24c-2.34 -2.34 -2.34 -6.14 0 -8.49c2.34 -2.34 6.14 -2.34 8.49 0c2.34 2.34 2.34 6.14 0 8.49c-2.34 2.34 -6.14 2.34 -8.49 0Z">
                            <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.5s" values="40;0"/>
                        </path>
                        <path stroke-dasharray="12" stroke-dashoffset="12" d="M10.5 13.5l-7.5 7.5">
                            <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.2s" values="12;0"/>
                        </path>
                    </g>
                </svg>
            </button>
        </form>
    </div>

    <div class="op-right">
        <button onclick="crearProducto()" class="crear">Nuevo producto</button>
    </div>
</nav>

<?php foreach($productos as $p): ?>
    <div class="card">
        
        <div class="info">
            <strong><?= $p["nombre"]; ?></strong><br>
            Precio: <?= $p["precio"]; ?>
        </div>

        <div class="acciones">
            <a href="#" onclick="editarProducto(<?= $p['id'] ?>)">Editar</a>
            <a href="/tienda_php/public/delete.php?id=<?= $p['id']; ?>" class="delete">Eliminar</a>
        </div>
    </div>
<?php endforeach; ?>
</main>

<div id="modal-bg" class="modal-bg">
    <div class="modal" id="modal-content">
        <!-- Aquí se carga el formulario -->
    </div>
</div>

