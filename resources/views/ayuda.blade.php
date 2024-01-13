<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Ayuda</title>
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

      <h1 class="titulo">PREGUNTAS FRECUENTES</h1>
      <div class="contenedor">
        <p>¿Cuántos puntos debo acumular para ganar dinero?
            100 puntos = 1 MXN
        </p>
        <p>¿Cuántos puntos necesito tener en mi cuenta para recibir el dinero en mi PayPal?
            Se necesita tener más de 5000 puntos acumulados para recibir el dinero equivalente a los puntos.
        </p>
        <p>¿Cuándo me van a pagar por los puntos que tengo?
            Todos los domingos del mes los usuarios recibirán automáticamente el dinero en su PayPal equivalente a los puntos que tienen los cuales se eliminarán de su cuenta al ser pagados.
        </p>
        <p>¿Cómo registro mi PayPal?
            En el apartado de cuenta hay una opción para que los usuarios registren su PayPal al que desean que se les transfiera el dinero.
        </p>
        <p>
            ¿Por qué no me aparecen tareas? Las tareas aparecerán cada cierto tiempo y se notoficará a los usuario cuando tengan nuevas tareas pendientes.
        </p>
        <p>
            ¿Puedo eliminar una tarea que no puedo realizar? No, las tareas que no se han completado serán eliminadas los días domingos pero el usuaro no puede eliminarlas de su cuenta.
        </p>
        <p>
            ¿Cuál es el máximo de puntos que puedo ganar? No existe un máximo de puntos, puedes acumular tantos como desees.
        </p>
        <p>
            ¿Por qué no he recibido mi dinero? ECOTASK debe revisar cuidadosamente las pruebas de las tareas que envien los usuarios, que cumplan con los requisitos y las imagenes no sean fraudolentas o sacadas de internet así que si has cometido fraude no recibirás un pago y los puntos se eliminarán de tu cuenta sin recibir una recompensa.
        </p>

        <h2>Envíanos tus preguntas, dudas, quejas o sugerencias:</h2>
        <form id="contact-form">
      <textarea id="message" name="message" rows="6" placeholder="Escribe aquí tu mensaje..." required></textarea>
    <button type="submit">Enviar</button>
  </form>
</div>

      

      <script src="scriptt.js"></script>
    
</body>
</html>