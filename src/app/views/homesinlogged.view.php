<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home sin login</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header>
        <h1>ProgresoFit</h1>
        <img src="/Logo.JPG" alt="">
        <form action="/inicio-sesion" method="get">
            <button type="submit">Inicio-sesion</button>
        </form>
    </header>
    <main>
        <h2>ProgresoFit</h2>
        <form action="/crear-cuenta" method="get">
            <button type="submit">Crear cuenta</button>
        </form>
    </main>
    <?php require 'parts/footer.view.php'; ?>
</body>