<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOTASK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <img src="img/logo.png" class="logo">
    <header>

        <nav class="navigation">
            <button class="btnContact-popup">Contacto</button>
            <button class="btnAbout-popup">Acerca de</button>
            <button class="btnLogin-popup">Iniciar sesión</button>
        </nav>
    </header>

    <h1>¡BIENVENIDO A ECOTASK!</h1>
    <h2>Realiza tareas y haz la diferencia</h2>

    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>

        <!-- Formulario de inicio de sesión -->
        <div class="form-box login">
            <h2>Iniciar sesión</h2>
            <form method="POST" action="">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" name="correo" required>
                    <label>Correo electrónico</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed">
                        </ion-icon>
                    </span>
                    <input type="password" name="contrasena" required>
                    <label>Contraseña</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                        Recuérdame</label>
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
                <button type="submit" name="iniciar_sesion" class="btn">Iniciar sesión</button>
                <div class="login-register">
                    <p>¿No tienes una cuenta?<a href="#" class="register-link"> Regístrate</a></p>
                </div>
                <div class="error-message">
                    <?php echo isset($_GET['error']) ? $_GET['error'] : ''; ?>
                </div>
            </form>
        </div>

        <!-- Formulario de registro -->
        <div class="form-box register">
            <h2>Registro</h2>
            <form method="POST" action="">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" name="nombreUsuario" required>
                    <label>Usuario</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" name="correo" required>
                    <label>Correo electrónico</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed">
                        </ion-icon>
                    </span>
                    <input type="password" name="contrasena" required>
                    <label>Contraseña</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" required>
                        Acepto los términos y condiciones</label>
                </div>
                <button type="submit" name="registrarse" class="btn">Regístrate</button>
                <div class="login-register">
                    <p>¿Ya tienes una cuenta?<a href="#" class="login-link"> Inicia sesión</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Código de la sección de iconos de redes sociales -->
    <section class="buttons">
        <a href="https://www.facebook.com/profile.php?id=100094636903555&mibextid=ZbWKwL" class="fa fa-facebook"></a>
        <a href="https://twitter.com/ecomp_any" class="fa fa-twitter"></a>
        <a href="https://youtube.com/@ECOMPANY-hb1dv" class="fa fa-youtube"></a>
        <a href="https://www.instagram.com/ecomp_any/" class="fa fa-instagram"></a>
    </section>

    <div class="contact">
        <span class="close">
            <ion-icon name="close"></ion-icon>
        </span>
        <i>ecompanytask@gmail.com</i>
    </div>

    <div class="about">
        <span class="closee">
            <ion-icon name="close"></ion-icon>
        </span>
        <i>ECOTASK es una innovadora aplicación web diseñada con la finalidad de abordar los desafíos de la
            contaminación ambiental. <br>

            Mediante ECOTASK, los usuarios pueden participar activamente en la reducción de la contaminación a través de
            tareas específicas. Estas tareas están diseñadas para fomentar prácticas sostenibles, como reciclar, reducir
            el consumo de energía, utilizar transporte público o participar en proyectos de reforestación. <br>

            Una de las características más destacadas de ECOTASK es su sistema de recompensas. Por cada tarea completada
            con éxito, los usuarios acumulan puntos que pueden convertirse en dinero real. Estos puntos pueden ser
            transferidos directamente a su cuenta de PayPal, proporcionando una forma tangible de reconocimiento y
            motivación. <br>

            ECOTASK no solo busca generar un impacto positivo en el medio ambiente, sino también en la vida de los
            usuarios. Nuestra plataforma promueve una mayor conciencia ambiental y fomenta un estilo de vida sostenible,
            al tiempo que ofrece una oportunidad real para ganar dinero mientras se contribuye a la protección del
            planeta. <br>

            Únete a ECOTASK hoy mismo y descubre cómo tus acciones pueden marcar la diferencia en la lucha contra la
            contaminación ambiental. ¡Ayuda al medio ambiente y sé recompensado por ello!</i>
    </div>


    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>