<?php
include __DIR__ . "/../../conexion.php";


$sql = "INSERT INTO productos (nombre, precio) VALUES (:n, :p)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'n' => $_POST['nombre'],
    'p' => $_POST['precio']
]);

header("Location: ../../index.php?view=list");
exit;

