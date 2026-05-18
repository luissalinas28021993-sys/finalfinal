<?php
// procesar.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Correo fijo
    $correo = "luissalinas28021993@gmail.com";

    // Contraseña enviada desde el formulario
    $password = $_POST['password'];

    echo "<h2>Datos recibidos</h2>";

    echo "Correo: " . htmlspecialchars($correo) . "<br>";
    echo "Contraseña: " . htmlspecialchars($password);
}
?>