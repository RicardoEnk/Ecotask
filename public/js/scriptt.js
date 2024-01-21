let taskFileCounts = {}; // Objeto para almacenar los contadores de archivos por tarea
let totalPoints = 0;
const totalFilesPerTask = 7; 

function submitFile(taskIndex) {
  var fileInput = document.getElementById('file-' + taskIndex);
  var files = fileInput.files; // Obtiene todos los archivos seleccionados

  if (files.length === 0) {
    alert('Por favor, selecciona al menos un archivo para subir.');
    return;
  }

  if (!taskFileCounts[taskIndex]) {
    taskFileCounts[taskIndex] = 0; // Inicializa el contador de archivos para la tarea si aún no existe
  }

  var formData = new FormData();
  for (var i = 0; i < files.length; i++) {
    var file = files[i];
    formData.append('file-' + taskIndex + '-' + (i + 1), file); // Agrega los archivos al FormData con un nombre único
    taskFileCounts[taskIndex]++; // Incrementa el contador de archivos para la tarea
  }
  formData.append('taskIndex', taskIndex);

  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'upload.php', true);

  xhr.upload.onprogress = function (e) {
    if (e.lengthComputable) {
      var percentage = (e.loaded / e.total) * 100; // Calcula el porcentaje de progreso
      var progress = document.getElementById('progress-' + taskIndex);
      progress.value = percentage;
    }
  };

  xhr.onload = function () {
    if (xhr.status === 200) {
      console.log(xhr.responseText);
      taskFileCounts[taskIndex]--; // Reduce el contador de archivos para la tarea
      if (taskFileCounts[taskIndex] === 0) { // Verifica si todos los archivos de la tarea se han subido
        var taskElement = document.getElementById('task-' + taskIndex);
        taskElement.remove(); // Elimina la tarea del DOM

        // Agregar puntos al usuario por completar la tarea
        var points = calculatePointsForTask(taskIndex);
        totalPoints += points;
        var totalPointsElement = document.getElementById('total-points');
        totalPointsElement.textContent = totalPoints;

        checkAllTasksCompleted();
      }
      updateNotification();
    } else {
      console.log('Error en la solicitud.');
    }
  };

  xhr.send(formData);
}

function calculatePointsForTask(taskIndex) {
    //cantidad de puntos que el usuario recibe por completar cada tarea
    var pointsPerTask = 10;
    return pointsPerTask;
  }

function calculatePendingTasks() {
    var tasks = document.getElementsByClassName('task');
    var pendingTasks = 0;
  
    for (var i = 0; i < tasks.length; i++) {
      var progress = tasks[i].querySelector('progress');
      if (progress.value !== '100') {
        pendingTasks++;
      }
    }
  
    return pendingTasks;
  }
  
 
  
  // Llama a la función de actualización al cargar la página
window.addEventListener('load', updateNotification);

function checkAllTasksCompleted() {
  var tasks = document.getElementsByClassName('task');
  var remainingTasks = [];

  for (var i = 0; i < tasks.length; i++) {
    var progress = tasks[i].querySelector('progress');
    if (progress.value !== '100') { 
      remainingTasks.push(tasks[i]);
    }
  }

  if (remainingTasks.length === 0) {
    alert('¡Todas las tareas se han completado, no tienes tareas pendientes por el momento!');
  }
}

function updateNotification() {
    var notificationBadge = document.getElementById('notification-badge');
    var pendingTasks = calculatePendingTasks();
  
    if (pendingTasks > 0) {
      notificationBadge.textContent = pendingTasks;
      notificationBadge.style.display = 'block';
      notificationBadge.classList.add('notification-badge-red'); // Agregar clase roja
    } else {
      notificationBadge.style.display = 'none';
      notificationBadge.classList.remove('notification-badge-red'); // Eliminar clase roja
    }
  }

function toggleMenu() {
    var menu = document.getElementById('menu');
    menu.classList.toggle('show'); 
  }

  function showNotifications() {
    // Obtener el número de tareas pendientes
  var pendingTasks = calculatePendingTasks();

  // Mostrar el mensaje de alerta con el número de tareas pendientes
  alert(`Tienes ${pendingTasks} tareas pendientes.`);
    
  }

  function toggleDarkMode() {
    var body = document.body;
    body.classList.toggle('dark-mode');

    var isDarkMode = body.classList.contains('dark-mode');
    localStorage.setItem('darkMode', isDarkMode);
    
  }

  document.getElementById("btnRegistrarPayPal").addEventListener("click", function() {
    document.getElementById("modal").style.display = "block";
  });
  
  document.getElementById("btnCerrarModal").addEventListener("click", function() {
    document.getElementById("modal").style.display = "none";
  });
  
  window.addEventListener("click", function(event) {
    if (event.target == document.getElementById("modal")) {
      document.getElementById("modal").style.display = "none";
    }
  });

  document.getElementById('contact-form').addEventListener('submit', function (event) {
    event.preventDefault(); // Evita que el formulario se envíe automáticamente
  
    var message = document.getElementById('message').value;
  
    // Aquí realizar la lógica para enviar los datos del formulario al servidor
  
    alert('¡Gracias por enviarnos tu mensaje! Te responderemos pronto.');
  });


  

