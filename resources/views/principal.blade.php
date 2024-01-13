<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOTASK</title>
    <link rel="stylesheet" href="resources/css/stylee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <img src="img/logo.png" class="logo">

    <div class="notifications-icon" onclick="showNotifications()">
        <i class="fas fa-bell"></i> 
        <div class="notification-badge" id="notification-badge"></div>
    </div>

    <button class="toggle-dark-mode" onclick="toggleDarkMode()">
        <i class="fas fa-moon"></i> 
        <i class="fas fa-sun"></i>
      </button>

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
    <p class="points-text">Puntos acumulados: <span id="total-points">0</span></p>
    <div class="task">
        <img src="/img/bicicleta.jpg" class="img">
        <div class="task-content">
        <h2>Tarea: Usar la bicicleta</h2>
        <p class="description">Descripción: Utiliza la bicicleta como medio de transporte para reducir la emisión de gases contaminantes.</p>
        <p class="desc">Sube 7 fotos de ti en días distintos utilizando una bicicleta.</p>
        <p class="des">¡Gana 10 puntos al completar la tarea!</p>
        <progress class="progress" id="progress-1" value="0" max="100"></progress>
        <input type="file" id="file-1" multiple>
        <button class="submit-button" onclick="submitFile(1)">Enviar archivo</button>
      </div>
    </div>
    
      <div class="task">
        <img src="/img/plantar.png" class="img">
        <div class="task-content">
        <h2>Tarea: Plantar árboles</h2>
        <p class="description">Descripción: Planta árboles para contribuir a la captura de carbono y mejorar la calidad del aire.</p>
        <p class="desc">Sube 7 fotos de ti en días distintos plantando las semillas de cualquier tipo de árbol.</p>
        <p class="des">¡Gana 10 puntos al completar la tarea!</p>
        <progress class="progress" id="progress-2" value="0" max="100"></progress>
        <input type="file" id="file-2" multiple>
        <button class="submit-button" onclick="submitFile(2)">Enviar archivo</button>
      </div>
    </div>
    
      <div class="task">
        <img src="/img/tbasura.jpg" class="img">
        <div class="task-content">
        <h2>Tarea: Tirar la basura</h2>
        <p class="description">Descripción: Deposita la basura en su lugar correspondiente y fomenta el reciclaje adecuado.</p>
        <p class="desc">Sube 7 fotos de ti en días distintos tirando la basura en su lugar.</p>
        <p class="des">¡Gana 10 puntos al completar la tarea!</p>
        <progress class="progress" id="progress-3" value="0" max="100"></progress>
        <input type="file" id="file-3" multiple>
        <button class="submit-button" onclick="submitFile(3)">Enviar archivo</button>
      </div>
    </div>
    
      <div class="task">
        <img src="img/desenchufar.jpg" class="img">
        <div class="task-content">
        <h2>Tarea: Desenchufar aparatos</h2>
        <p class="description">Descripción: Desconecta los aparatos eléctricos que no estés utilizando para reducir el consumo de energía innecesario.</p>
        <p class="desc">Sube 7 fotos de ti en días distintos desconectando aparatos eléctricos que no estén en uso.</p>
        <p class="des">¡Gana 10 puntos al completar la tarea!</p>
        <progress class="progress" id="progress-4" value="0" max="100"></progress>
        <input type="file" id="file-4" multiple>
        <button class="submit-button" onclick="submitFile(4)">Enviar archivo</button>
      </div>
    </div>
    
      <script src="scriptt.js"></script>
      
    </div>
</body>
</html>