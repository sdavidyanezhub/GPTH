<?php
// Incluir la conexión
include ("db/conexiones.php");

// Validar que el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

// preparar consulta (SQL Injection seguro)
$stmt = $conn->prepare("INSERT INTO formulario (nombre, correo, telefono, asunto, mensaje) VALUES (?, ?, ?, ?, ?)");
$stmt-> bind_param ("sssss", $nombre, $correo, $telefono, $asunto, $mensaje);

if ($stmt->execute()) {
      $msg = "✅ Tu mensaje se envió correctamente.";
      echo "<script>document.addEventListener('DOMContentLoaded', function(){ var m = " . json_encode($msg) . ";
      var d = document.createElement('div');
      d.textContent = m;
      Object.assign(d.style, {position:'fixed', left:'50%', top:'20px', transform:'translateX(-50%)', background:'#1f2937', color:'#fff', padding:'12px 18px', borderRadius:'6px', zIndex:9999, fontSize:'16px', boxShadow:'0 2px 10px rgba(0,0,0,0.2)'});
      document.body.appendChild(d);
      setTimeout(function(){
        try { window.close(); } catch(e) {}
        setTimeout(function(){
        if (!window.closed) { window.location = 'Contacto.php'; }
        }, 200);
      }, 3000);
      });</script>";
    } else {
      $err = "❌ Error: " . $stmt->error;
      echo "<script>document.addEventListener('DOMContentLoaded', function(){ var m = " . json_encode($err) . ";
      var d = document.createElement('div');
      d.textContent = m;
      Object.assign(d.style, {position:'fixed', left:'50%', top:'20px', transform:'translateX(-50%)', background:'#7f1d1d', color:'#fff', padding:'12px 18px', borderRadius:'6px', zIndex:9999, fontSize:'16px', boxShadow:'0 2px 10px rgba(0,0,0,0.2)'});
      document.body.appendChild(d);
      setTimeout(function(){
        try { window.close(); } catch(e) {}
        setTimeout(function(){
        if (!window.closed) { window.location = 'Contacto.php'; }
        }, 200);
      }, 3000);
      });</script>";
    }

$stmt->close();
$conn->close();
}
?>
<!DOCTYPE html>
<html Langua="es">
<head>
<Meta CharseT="UTF-8">
<Meta name= "Viewport" content="width=device-width,initial-scale=1.0">
<title>Perfil y Talento Humano</title>
<link rel="icon" href="https://ibb.co/hFvJ79mL" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="Diseño_Contacto.css">
<style>
    * {margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;}

    body {display: flex;
      flex-direction: column;
      min-height: 100vh;}

    /* ====== Header ====== */
    header {background: #000000;
      color: gold;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;}

    header h1 {font-size: 22px;}

    nav ul {list-style: none; display: flex; gap: 20px;}

    nav a {color: white;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;}

    nav a:hover {color: #E8CB2C;}

    /* ====== Contenido principal ====== */
    main {flex: 1;
      padding: 40px;
      background: #FFFFFF;}

    main h2 {margin-bottom: 15px;}

    /* ====== Footer ====== */
    footer {background: #DBC12A;}
      color: white;
      text-align: center;
      padding: 15px 0;}
  </style>
</head>

<body>
	<header>
<H1> Mi web Frontend</H1>
<nav>
<ul>
	<li><a href="PagWebgpth.php">Inicio</a></li>
	<li><a href="Acerca.php">Acerca</a></li>
	<li><a href="Contacto.php">Contacto</a></li>
</ul>
</nav>
</header>
	</header>

<main>
 <div class="contact-container">
   <H2>Contacto</H2>

<!-- Formulario: ajusta action y method según tu backend -->  
<form action="Contacto.php" method="post" novalidate class="talent-form-clean">
    <div class="form-grid">
        
        <div class="form-group">
            <label for="nombre" class="form-label">Nombre completo</label>
            <input id="nombre" name="nombre" type="text" placeholder="Tu nombre" required class="form-input">
        </div>

        <div class="form-group">
            <label for="email" class="form-label">Correo electrónico</label>
            <input id="email" name="email" type="email" placeholder="tucorreo@ejemplo.com" required class="form-input">
        </div>

        <div class="form-group">
            <label for="telefono" class="form-label">Teléfono (opcional)</label>
            <input id="telefono" name="telefono" type="text" placeholder="+57 600 000 0000" class="form-input">
        </div>

        <div class="form-group">
            <label for="asunto" class="form-label">Asunto</label>
            <input id="asunto" name="asunto" type="text" placeholder="Breve resumen" required class="form-input">
        </div>
        
        <div class="form-group form-full-width">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje..." required class="form-textarea"></textarea>
            <div class="form-hint">Máximo 2000 caracteres.</div>
        </div>

        <div class="form-actions">
            <button type="reset" class="btn btn-secondary-clean">Limpiar</button>
            <button type="submit" class="btn btn-primary-clean">Enviar mensaje</button>
        </div>
        
    </div>
</form>
</div>
</main>

<footer>
<p> Realizado por: Samuel Yanez </p>
</footer>
<script>
      (function(){
        var mensaje = document.getElementById('mensaje');
        var counter = document.getElementById('counter');
        var form = document.querySelector('.contact-form');
        var submit = document.getElementById('submitBtn');

        function updateCount(){
          var len = mensaje.value.length;
          counter.textContent = len + ' / ' + (mensaje.maxLength || 2000);
          if(len > (mensaje.maxLength - 20)){
            counter.style.color = '#b45309';
          } else {
            counter.style.color = '';
          }
        }
        mensaje.addEventListener('input', updateCount);
        updateCount();

        // simple client-side validation feedback
        form.addEventListener('submit', function(e){
          if(!form.checkValidity()){
            e.preventDefault();
            // focus first invalid
            var firstInvalid = form.querySelector(':invalid');
            if(firstInvalid) firstInvalid.focus();
            // visual hint
            submit.textContent = 'Corrige los campos';
            setTimeout(function(){ submit.textContent = 'Enviar mensaje'; }, 1800);
          } else {
            // prevent double submit UX: disable button briefly while submitting
            submit.disabled = true;
            submit.style.opacity = '.7';
            setTimeout(function(){ submit.disabled = false; submit.style.opacity = ''; }, 3000);
          }
        });

        // reset handler
        document.getElementById('resetBtn').addEventListener('click', function(){
          setTimeout(updateCount, 10);
        });
      })();
    </script>
</body>
</html>