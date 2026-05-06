<!DOCTYPE html>
<html lang="es">


<head>
    <title>Perfil del usuario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/perfil.css">

</head>

<body>
    <?php require 'parts/header.view.php'; ?>
    <main>
        <div class="perfil-grid">
            <!-- Foto principal del usuario -->
            <section class="perfil-hero">
                <figure>
                    <img src="foto-usuario.jpg" alt="Foto del usuario">
                </figure>
            </section>

            <!-- Info principal del usuario -->
            <section class="info-lista">
                <dl>
                    <dt>nombre</dt>
                    <dd>"Nombre del usuario"</dd>
     
                    <dt>descripcion</dt>
                    <dd>"descripcion del usuario"</dd>
     
                    <dt>edad</dt>
                    <dd>25 años</dd>
     
                    <dt>localidad</dt>
                    <dd>Lujan</dd>
     
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