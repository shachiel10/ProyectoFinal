<?php
// Conexión a la base de datos
$servidor = 'localhost';
$cuenta = 'root';
$password = '';
$bd = 'proyectof';

// Conexión a la base de datos
$conn = new mysqli($servidor, $cuenta, $password, $bd);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

