<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>ProgresoFit</title>
</head>

<body>
    <?php require 'parts/header.view.php'; ?>

    <main>
        <!-- SECCIÓN: Mapa -->
        <section>
            <h2>Descubra sus gimnasios cercanos</h2>
            <div id="mapa">
                <span class="mapa-icon">📍</span>
                <span class="mapa-label">Mapa de gimnasios</span>
            </div>
        </section>

        <!-- SECCIÓN: Entrenadores destacados -->
        <section>
            <h2>Entrenadores destacados</h2>
            <div class="grid-entrenadores">
                <article class="card-entrenador">
                    <div class="avatar">
                        <img src="assets/img/imagenUser.jpg" alt="Foto de Entrenador 1">
                    </div>
                    <p>Entrenador 1</p>
                </article>
                <article class="card-entrenador">
                    <div class="avatar">
                        <img src="assets/img/imagenUser.jpg" alt="Foto de Entrenador 2">
                    </div>
                    <p>Entrenador 2</p>
                </article>
                <article class="card-entrenador">
                    <div class="avatar">
                        <img src="assets/img/imagenUser.jpg" alt="Foto de Entrenador 3">
                    </div>
                    <p>Entrenador 3</p>
                </article>
                <article class="card-entrenador">
                    <div class="avatar">
                        <img src="assets/img/imagenUser.jpg" alt="Foto de Entrenador 4">
                    </div>
                    <p>Entrenador 4</p>
                </article>
            </div>
        </section>

        <!-- SECCIÓN: Posts destacados -->
        <section>
            <h2>Posts destacados</h2>
            <div class="grid-posts">
                <article class="card-post">
                    <header>
                        <div class="avatar-sm">
                            <img src="assets/img/imagenUser.jpg" alt="Avatar de Nombre de usuario">
                        </div>
                        <span>Nombre de usuario</span>
                    </header>
                    <figure>
                        <img src="imagen-post.jpg" alt="Imagen del post">
                    </figure>
                    <footer>
                        <button type="button" class="btn-like" aria-label="Me gusta">&#9825;</button>
                        <p>Descripción del Post</p>
                    </footer>
                </article>
            </div>
        </section>

    </main>

    <?php require 'parts/footer.view.php'; ?>

</body>

</html>