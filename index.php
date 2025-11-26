<!-- hacker css-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin</title>
</head>
<body>

<main>
    <h1>Productos tienda</h1>
    <p>Esta es la sección de admin, decide qué hacer con los productos.</p>

    <!-- MENÚ -->
    <ul>
        <li><a href="index.php?view=list">Listar productos</a></li>
        <li><a href="index.php?view=create">Crear producto</a></li>
    </ul>

    <hr>
    <?php

if (isset($_GET['view'])) {
    $view = $_GET['view'];

    switch($view){

        case 'list':
            include __DIR__ . "/public/list.php";
            break;

        case 'create':
            include __DIR__ . "/public/create/create.php";
            break;

        case 'edit':
            include __DIR__ . "/public/update/edit.php";
            break;

        case 'delete':
            include __DIR__ . "/public/delete.php";
            break;

        default:
            echo "<p>Opción no válida.</p>";
    }

} else {
    echo "<p>Selecciona una opción del menú.</p>";
}
?>
</main>
</body>
</html>
