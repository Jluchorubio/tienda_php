<!-- hacer css-->
<?php include __DIR__ . "/includes/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin</title>
    <style>
        h1{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 60px;
            color: #091937;
        }

        p{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 20px;
            color: #091937;
        }
    </style>
</head>
<body>
<main>
    <h1>Productos tienda virtual</h1>
    <p>Esta es la sección de admin, decide qué hacer con los productos.</p>

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
<?php include __DIR__ . "/includes/footer.php"; ?>

</body>
</html>
