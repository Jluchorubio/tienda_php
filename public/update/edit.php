<?php
include __DIR__ . "/../../conexion.php";

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM productos WHERE id=:id");
$stmt->execute(['id'=>$id]);
$p = $stmt->fetch();
?>

<h2>Editar producto</h2>
<form action="/tienda_php/public/update/update.php" method="POST">
    <input type="hidden" name="id" value="<?= $p['id'] ?>">
    <input type="text" name="nombre" value="<?= $p['nombre'] ?>" required>
    <input type="number" name="precio" value="<?= $p['precio'] ?>" required>
    <button type="submit">Actualizar</button>
</form>
