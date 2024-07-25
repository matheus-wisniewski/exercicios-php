<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$db = "usuarios";

// Create connection
$conn = new mysqli($host, $usuario, $senha, $db);

// Check connection
if (!$conn) {
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
}