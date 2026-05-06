<!DOCTYPE html>
<html lang="es">

<head>
    <title>Rutina Individual</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/rutina-ind.css">
</head>

<body>
    <?php require 'parts/header.view.php'; ?>
    
    <main>
        <header class="rutina-header">
            <h2>Rutina #X</h2>
            <div class="rutina-meta">
                <span class="rutina-autor">Entrenador</span>
                <div class="rutina-fechas">
                    <time datetime="2026-04-07">Inicio: 07/04</time>
                    <time datetime="2026-04-12">Fin: 12/04</time>
                </div>
                <span class="rutina-objetivo">Objetivo: Reforzar tren superior</span>
            </div>
        </header>

        <section class="grid-entrenamientos">
            <article class="card-entrenamiento">
                <div class="card-header">
                    <h3>Día 1 - Pecho</h3>
                    <div class="card-meta-badges">
                        <span class="badge-duracion">30 min</span>
                        <span class="badge-ejercicios">3 ejercicios</span>
                        <span class="badge-grupo">Pecho</span>
                    </div>
                </div>

                <div class="lista-ejercicios">
                    <div class="ejercicio-item">
                        <div>
                            <div class="ejercicio-nombre">Press de banca con barra</div>
                            <div class="ejercicio-series">4x10</div>
                        </div>
                        <div class="ejercicio-acciones">
                            <a href="/press-de-banca" class="btn-ver">Ver</a>
                            <a href="https://youtube.com/prees-de-banca" class="btn-video" aria-label="Ver video en YouTube">
                                <img src="/logoyoutube.JPG" alt="Video">
                            </a>
                        </div>
                    </div>

                    <div class="ejercicio-item">
                        <div>
                            <div class="ejercicio-nombre">Press inclinado</div>
                            <div class="ejercicio-series">4x12</div>
                        </div>
                        <div class="ejercicio-acciones">
                            <a href="/press-inclidado" class="btn-ver">Ver</a>
                            <a href="https://youtube.com/prees-inclinado" class="btn-video" aria-label="Ver video en YouTube">
                                <img src="/logoyoutube.JPG" alt="Video">
                            </a>
                        </div>
                    </div>

                    <div class="ejercicio-item">
                        <div>
                            <div class="ejercicio-nombre">Aperturas en polea</div>
                            <div class="ejercicio-series">3x8-10</div>
                        </div>
                        <div class="ejercicio-acciones">
                            <a href="/apertura-de-polea" class="btn-ver">Ver</a>
                            <a href="https://youtube.com/apertura-de-polea" class="btn-video" aria-label="Ver video en YouTube">
                                <img src="/logoyoutube.JPG" alt="Video">
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <article class="card-entrenamiento">
                <div class="card-header">
                    <h3>Día 2 - Pecho</h3>
                    <div class="card-meta-badges">
                        <span class="badge-duracion">30 min</span>
                        <span class="badge-ejercicios">3 ejercicios</span>
                        <span class="badge-grupo">Pecho</span>
                    </div>
                </div>

                <div class="lista-ejercicios">
                    <div class="ejercicio-item">
                        <div>
                            <div class="ejercicio-nombre">Press de banca con barra</div>
                            <div class="ejercicio-series">4x10</div>
                        </div>
                        <div class="ejercicio-acciones">
                            <a href="/press-de-banca" class="btn-ver">Ver</a>
                            <a href="https://youtube.com/prees-de-banca" class="btn-video" aria-label="Ver video en YouTube">
                                <img src="/logoyoutube.JPG" alt="Video">
                            </a>
                        </div>
                    </div>

                    <div class="ejercicio-item">
                        <div>
                            <div class="ejercicio-nombre">Press inclinado</div>
                            <div class="ejercicio-series">4x12</div>
                        </div>
                        <div class="ejercicio-acciones">
                            <a href="/press-inclidado" class="btn-ver">Ver</a>
                            <a href="https://youtube.com/prees-inclinado" class="btn-video" aria-label="Ver video en YouTube">
                                <img src="/logoyoutube.JPG" alt="Video">
                            </a>
                        </div>
                    </div>

                    <div class="ejercicio-item">
                        <div>
                            <div class="ejercicio-nombre">Aperturas en polea</div>
                            <div class="ejercicio-series">3x8-10</div>
                        </div>
                        <div class="ejercicio-acciones">
                            <a href="/apertura-de-polea" class="btn-ver">Ver</a>
                            <a href="https://youtube.com/apertura-de-polea" class="btn-video" aria-label="Ver video en YouTube">
                                <img src="/logoyoutube.JPG" alt="Video">
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>
    
    <?php require 'parts/footer.view.php'; ?>
</body>

</html>