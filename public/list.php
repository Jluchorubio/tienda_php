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


$stmt = $pdo->query("SELECT * FROM productos");
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        main {
            padding: 0% 5% 5% 5%;
        }

        .list{
            padding: 5% 5% 5% 5%;
        }

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
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: 800;
            text-decoration: none;
            color: white;
            background: #091937;;
            padding: 8px 12px;
            border-radius: 5px;
        }

        .acciones .delete {
            background: red;
        }

        .opciones {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        }

        .op-right a {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-weight: bolder;
        font-size: 16px;
        background: #4CAF50;
        color: white !important;
        padding: 10px 15px;
        border-radius: 8px;
        text-decoration: none;
        }

        .op-right a:hover {
    background: #3d8e41;
        }

        .buscador {
        display: flex;
        align-items: center;
        background: white;
        padding: 5px 10px;
        border-radius: 20px;
        margin-left: 20px;
        border-color:#4CAF50 ;
        }

        .buscador input {
    border-color:#4CAF50 ;
    outline: none;
    padding: 8px 10px;
    width: 180px;
    font-size: 14px;
    border-radius: 20px;
        }

        .buscador button {
    border: none;
    background: #4CAF50;
    color: white;
    padding: 8px 12px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 16px;
        }

        .buscador button:hover {
    background: #3d8e41;
        }

    </style>
</head>
<body>

<main class="list">

<nav class="opciones">
    <div class="op-left">
        <form action="index.php" method="GET" class="buscador">
            <input type="text" name="buscar" placeholder="Buscar producto..." required>
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
        <a href="index.php?view=create" class="crear">Nuevo producto</a>
    </div>
</nav>
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
</main>
</body>
</html>

