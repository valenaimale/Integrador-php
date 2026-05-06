<!DOCTYPE html>
<html lang="es">


<head>
    <title>Perfil del entrenador</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/perfil.css">

</head>

<body>
    <?php require 'parts/header.view.php'; ?>
    <main>
        <div class="perfil-grid">
            <!-- Foto principal del entrenador -->
            <section class="perfil-hero">
                <figure>
                    <img src="foto-entrenador.jpg" alt="Foto del entrenador">
                </figure>
            </section>

            <!-- Info principal del entrenador -->
            <section class="info-lista">
                <dl>
                    <dt>nombre</dt>
                    <dd>"Nombre del entrenador"</dd>
     
                    <dt>descripcion</dt>
                    <dd>"descripcion del entrenador"</dd>
     
                    <dt>especialidad</dt>
                    <dd>Futbol - Basquet - Funcional - Alto Rendimiento deportivo </dd>
     
                    <dt>estudios</dt>
                    <dd>Licenciatura en Educacion FIsica - Maestria en ciencias del deporte - Maestria en Alto Rendimiento Deportivo</dd>
     
                    <dt>horarios</dt>
                    <dd>Lunes a sabado, 9 a 13h y 15 a 21hs</dd>
     
                    <dt>Teléfono</dt>
                    <dd>+54 9 11 1111-1111</dd>
     
                    <dt>Email</dt>
                    <dd><a href="mailto:nombre@yahoo.com.ar">nombre@yahoo.com.ar</a></dd>
                </dl>
            </section>
        </div>
    </main>
    <?php require 'parts/footer.view.php'; ?>

</body>

</html>