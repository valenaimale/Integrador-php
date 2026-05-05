<!DOCTYPE html>
<html lang="es">


<head>
    <title>Perfil del Gimnasio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<>body>
    <?php require 'parts/header.view.php'; ?>
    <main>

        <!-- Foto principal del gimnasio -->
        <section>
            <figure>
                <img src="foto-gimnasio.jpg" alt="Foto del gimnasio">
            </figure>
        </section>

        <!-- Info principal del gimnasio -->
        <section>
            <dl>
                <dt>nombre</dt>
                <dd>"Nombre del gimnasio"</dd>
                
                <dt>descripcion</dt>
                <dd>"descripcion del gimnasio"</dd>

                <dt>Horario</dt>
                <dd>Lunes a sabado, 9 a 13h y 15 a 21hs</dd>

                <dt>Servicios</dt>
                <dd>Pileta  maquinas  entrenamiento personalizado  asesoramiento nutricional</dd>

                <dt>Dirección</dt>
                <dd>Calle falsa 1234, Lujan</dd>

                <dt>Teléfono</dt>
                <dd>+54 9 11 1111-1111</dd>

                <dt>Email</dt>
                <dd><a href="mailto:nombre_gym@yahoo.com.ar">nombre_gym@yahoo.com.ar</a></dd>
            </dl>
            <!-- fijarse a donde va a parar -->
            <a href="#">Asociate →</a>
        </section>

        <!-- Entrenadores del gimnasio -->
        <section>
            <h2>Nuestros entrenadores:</h2>
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
                <article>
                    <img src="entrenador5.jpg" alt="Foto de Entrenador 5">
                    <p>Entrenador 5</p>
                </article>
            </div>
        </section>
    </main>
    <?php require 'parts/footer.view.php'; ?>

    </body>

</html>