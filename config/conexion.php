<?php
require_once('configuracion.php');

try {
    // Establecer la conexión usando PDO
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
    
    // Establecer el modo de error de PDO a excepción
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Establecer el juego de caracteres a utf8
    $pdo->exec("SET NAMES 'utf8'");

    //Iniciar la sesión
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
} catch (PDOException $e) {
    // En caso de error en la conexión, imprimir el mensaje de error
    die("Error de conexión: " . $e->getMessage());
}
?>
