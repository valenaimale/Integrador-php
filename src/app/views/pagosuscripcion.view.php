<!DOCTYPE html>
<html lang="es">

<head>
    <title>Pagos y Suscripción</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <?php require 'parts/header.view.php'; ?>
    <main>
        <form action="/formularioPago" method="post">
        <fieldset>
            <legend>Datos personales</legend>
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <input type="text" name="documento" placeholder="Documento">
        </fieldset>
        <fieldset>
            <legend>Facturacion</legend>
            <input type="text" name="numero-tarjeta" placeholder="Numero tarjeta">
            <input type="text" name="nombre-titular" placeholder="Nombre titular">
            <input type="text" name="cvv" placeholder="123">
            <input type="date" name="fecha_ven">
        </fieldset>
        <button type="submit">Confirmar pago</button>
        </form>
        <aside><!--puede ir el aside aca ya que el estandar lo define como contenido relacionado indirectamente
            con el contenido principal de la pagina (que es el formulario de pago). En este caso los detalles del 
            plan son complementarios al formulario de pago-->
            <h2>Detalles del plan</h2>
            <p>Plan: ...</p>
            <p>Precio: ...</p>
        </aside>
    </main>
    <?php require 'parts/footer.view.php'; ?>

</body>

</html>
