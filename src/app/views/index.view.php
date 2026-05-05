<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Libreria</title>
</head>

<body>
    <?php require 'parts/header.view.php'; ?>

    <main>
        <section>
            <h2>Descubra sus gimnasios cercanos</h2>
            <div id="mapa">
                <!-- aca va el mapa -->
            </div>
        </section>

        <!-- SECCIÓN: Entrenadores destacados -->
        <section>
            <h2>Entrenadores destacados</h2>
            <div>
                <article>
                    <img src="entrenador1.jpg" alt="Foto de Entrenador 1">
                    <p>Entrenador 1</p>
                </article>
                <article>
                    <img src="entrenador2.jpg" alt="Foto de Entrenador 2">
                    <p>Entrenador 2</p>
                </article>
                <article>
                    <img src="entrenador3.jpg" alt="Foto de Entrenador 3">
                    <p>Entrenador 3</p>
                </article>
                <article>
                    <img src="entrenador4.jpg" alt="Foto de Entrenador 4">
                    <p>Entrenador 4</p>
                </article>
            </div>
        </section>

        <!-- SECCIÓN: Posts destacados -->
        <section>
            <h2>Posts destacados</h2>
            <article>
                <header>
                    <img src="avatar-usuario.jpg" alt="Avatar de Nombre de usuario">
                    <span>Nombre de usuario</span>
                </header>
                <figure>
                    <img src="imagen-post.jpg" alt="Imagen del post">
                </figure>
                <footer>
                    <button type="button" aria-label="Me gusta">&#9825;</button>
                    <p>Descripción del Post</p>
                </footer>
            </article>
        </section>

    </main>

    <!-- Footer de página -->
    <?php require 'parts/footer.view.php'; ?>


</body>

</html>