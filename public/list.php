<?php
include __DIR__ . "/../conexion.php";

$stmt = $pdo->query("SELECT * FROM productos");
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .card {
            background: #f1f1f1;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .info {
            font-size: 16px;
        }

        .acciones a {
            margin-left: 10px;
            text-decoration: none;
            color: white;
            background: #007BFF;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .acciones .delete {
            background: red;
        }
    </style>
</head>
<body>

<h1>Productos</h1>
<a href="create.php">Nuevo producto</a>

<?php foreach($productos as $p): ?>
    <div class="card">
        
        <div class="info">
            <strong><?php echo $p["nombre"]; ?></strong><br>
            Precio: <?php echo $p["precio"]; ?>
        </div>

        <div class="acciones">
            <a href="edit.php?id=<?php echo $p["id"]; ?>">Editar</a>
            <a href="/tienda_php/public/delete.php?id=<?php echo $p['id']; ?>" class="delete">Eliminar</a>

        </div>

    </div>
<?php endforeach; ?>

</body>
</html>

