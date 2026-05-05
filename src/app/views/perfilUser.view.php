<!DOCTYPE html>
<html lang="es">


<head>
    <title>Perfil del usuario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php require 'parts/header.view.php'; ?>
    <main>

        <!-- Foto principal del usuario -->
        <section>
            <figure>
                <img src="foto-usuario.jpg" alt="Foto del usuario">
            </figure>
        </section>

        <!-- Info principal del usuario -->
        <section>
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
                <dd><a href="mailto:nombre_gym@yahoo.com.ar">nombre_gym@yahoo.com.ar</a></dd>
            </dl>
        </section>

        
        
    </main>
    <?php require 'parts/footer.view.php'; ?>

</body>

</html>