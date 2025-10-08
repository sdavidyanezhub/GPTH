<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GPTH";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
 if ($conn->connect_error) {
  die("conexión fallida: " . $conn->connect_error);
}
?>