<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
    <link rel="stylesheet" href="/css/stylee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
</head>
<body>
    <img src="img/logo.png" class="logo">

    <div class="menu-button" onclick="toggleMenu()">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>

    <div class="menu" id="menu">
        <ul>
            <li><a href="cuenta.php">Cuenta</a></li>
            <li><a href="ayuda.php">Ayuda</a></li>
            <li><a href="index.php">Cerrar sesión</a></li>
        </ul>
    </div>

    <div class="container">
        <h1>Bienvenido a tu cuenta, <?php echo $nombreUsuario; ?>!</h1>

        <h2>Editar Correo Electrónico</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label>Correo electrónico:</label>
            <input type="email" name="nuevoCorreo" value="<?php echo $correo; ?>" required>
            <button type="submit" name="editarCorreo">Editar correo</button>
        </form>

        <?php
        // Mostrar mensaje de éxito si existe
        if (isset($_GET['mensaje']) && $_GET['mensaje'] === "Correo actualizado correctamente") {
            echo '<p style="color: green;">Correo actualizado correctamente</p>';
        } elseif (isset($errorMensajeCorreo)) {
            echo '<p style="color: red;">' . $errorMensajeCorreo . '</p>';
        }
        ?>

        <h2>Editar Contraseña</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label>Contraseña actual:</label>
            <input type="password" name="contrasenaActual" required>
            <label>Nueva contraseña:</label>
            <input type="password" name="nuevaContrasena" required>
            <label>Confirmar contraseña:</label>
            <input type="password" name="confirmarContrasena" required>
            <button type="submit" name="editar">Editar contraseña</button>
        </form>

        <?php
        // Mostrar mensaje de éxito o error
        if (isset($_GET['mensaje']) && $_GET['mensaje'] === "Contraseña actualizada correctamente") {
            echo '<p style="color: green;">Contraseña actualizada correctamente</p>';
        } elseif (isset($errorMensaje)) {
            echo '<p style="color: red;">' . $errorMensaje . '</p>';
        }
        ?>

<div>
    <button style="background-color: blue; color: white;" onclick="abrirModal('modalPayPal')">Registrar PayPal</button>
    <button style="background-color: red; color: white;">Eliminar cuenta</button>
</div>
</div>

<!-- Modal de Registro de PayPal -->
<div id="modalPayPal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="cerrarModal('modalPayPal')">&times;</span>
        <h2>Registrar PayPal</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="nombreCompleto">Nombre Completo:</label>
            <input type="text" id="nombreCompleto" name="nombreCompleto" required>

            <label for="correoElectronico">Correo Electrónico:</label>
            <input type="email" id="correoElectronico" name="correoElectronico" required>

            <button type="button" style="background-color: blue; color: white;" onclick="abrirModal('modalPayPal')">Registrar PayPal</button>
        </form>
        <?php
        // Mostrar mensaje de éxito o error al registrar PayPal
        if (isset($mensajePayPal)) {
            echo '<p style="color: green;">' . $mensajePayPal . '</p>';
        } elseif (isset($errorPayPal)) {
            echo '<p style="color: red;">' . $errorPayPal . '</p>';
        }
        ?>
    </div>
    <script>
    // Función para abrir el modal
    function abrirModal(idModal) {
        var modal = document.getElementById(idModal);
        modal.style.display = "block";
    }

    // Función para cerrar el modal
    function cerrarModal(idModal) {
        var modal = document.getElementById(idModal);
        modal.style.display = "none";
    }

    // Cuando el usuario haga clic fuera del modal, se cerrará
    window.addEventListener("click", function (event) {
        var modal = document.getElementById("modalPayPal");
        if (event.target === modal) {
            cerrarModal('modalPayPal');
        }
    });
</script>

</div>

</body>
</html>