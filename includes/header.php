<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        header {
            background: #4CAF50;
            color: white;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between; /* 👈 PARA SEPARAR LOGO Y MENÚ */
            align-items: center; /* 👈 CENTRA VERTICALMENTE */
        }

        .logo_titulo {
            display: flex;
            align-items: center;
            gap: 15px; /* espacio entre imagen y texto */
        }

        .logo_titulo img {
            width: 60px;   /* 👈 Tamaño adecuado */
            border-radius: 12px;
        }

        h2 {
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin: 0;
        }

        nav {
        display: flex;
        align-items: center;
        gap: 20px;
        }

        nav svg {
        vertical-align: middle;
        }

        nav a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        hr {
            background-color: #87771aff;
            padding: 0.5px;
        }

    </style>
</head>
<body>

<header>
    <div class="logo_titulo">
        <img src="img/logo.png" alt="Logo Tienda PHP">
        <h2>Tienda PHP</h2>
    </div>

    <nav>
        <a href="inicio.php">Inicio</a>
        <a href="index.php?view=list">productos</a>

        <a href="" ><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 512 512"><path fill="currentColor" fill-rule="evenodd" d="M256 42.667A213.333 213.333 0 0 1 469.334 256c0 117.821-95.513 213.334-213.334 213.334c-117.82 0-213.333-95.513-213.333-213.334C42.667 138.18 138.18 42.667 256 42.667m21.334 234.667h-42.667c-52.815 0-98.158 31.987-117.715 77.648c30.944 43.391 81.692 71.685 139.048 71.685s108.104-28.294 139.049-71.688c-19.557-45.658-64.9-77.645-117.715-77.645M256 106.667c-35.346 0-64 28.654-64 64s28.654 64 64 64s64-28.654 64-64s-28.653-64-64-64"/></svg></a>
    </nav>
</header>

<hr>
