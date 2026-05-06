<!DOCTYPE html>
<html lang="es">

<head>
    <title>rutinas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require 'parts/header.view.php'; ?>
    <main>
        <h2>Elige tu programa segun tu objetivo</h2>
        <ul>
            <li>
                <a href="/rutina1">
                    <article>
                        <h3>Rutina #1</h3>
                        <p>Entrenador</p>
                        <p>fecha inicio y final</p>
                        <p>objetivo</p>
                    </article>
                </a>
            </li>
            <li>
                <a href="/rutina2">
                    <article>
                        <h3>Rutina #2</h3>
                        <p>Entrenador</p>
                        <p>fecha inicio y final</p>
                        <p>objetivo</p>
                    </article>
                </a>
            </li>
            <li>
                <a href="/rutina3">
                    <article>
                        <h3>Rutina #3</h3>
                        <p>Entrenador</p>
                        <p>fecha inicio y final</p>
                        <p>objetivo</p>
                    </article>
                </a>
            </li>
        </ul>
        <h2>Programas especiales de 28 dias</h2>
        <ul>
            <li>
                <a href="/autocuidado">
                   <article>
                        <h3>Autocuidado</h3>
                        <p>Las mejores rutinas para el cuidado personal</p>
                   </article> 
                </a>
            </li>
            <li>
                <a href="/principiante">
                   <article>
                        <h3>Principiante</h3>
                        <p>Tenes que ver esto si estas comenzando a entrenarte</p>
                   </article> 
                </a>
            </li>
        </ul>
    </main>
    <?php require 'parts/footer.view.php'; ?>

</body>