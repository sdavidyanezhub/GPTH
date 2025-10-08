<php>
</php>
<!DOCTYPE html>
<html Langua="es">
<head>
<Meta CharseT="UTF-8">
<Meta name= "Viewport" content="width=device-width,initial-scale=1.0">
<title>Perfil y Talento Humano</title>
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
	<?php include("Menu.php"); ?>
	

<main>
<H1> Bienvenido a GPTH </H1>
<p> Desarrolla el potencial de tus empleados, conviertelos en trabajadores cada vez mas eficientes y satisface su forma de producir. </p>
</main>

<footer>
<p> Realizado por: Samuel Yanez </p>
</footer>
</body>

</html>
