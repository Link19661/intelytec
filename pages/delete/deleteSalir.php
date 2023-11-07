<?php

require_once('../../config/conexion.php'); // Incluye el archivo de conexión

header('Content-Type: application/json');
// Obtener datos del cuerpo de la solicitud en formato JSON
$inputJSON = file_get_contents('php://input');
$inputData = json_decode($inputJSON, true);

// Verificar si se recibieron datos válidos
if ($inputData !== null && isset($inputData["salir"])) {

    // Obtener el id de usuario de la sesión
    $usuario_id = $_SESSION["usuario_id"];

    // Actualizar el estado de la sesión a 2 (cerrada) en la tabla tb_sesion
    $queryUpdateSesion = "UPDATE tb_sesion SET estado_id = 2, sesion_fecha_fin = NOW(), sesion_hora_fin = NOW() WHERE usuario_id = :usuario_id AND estado_id = 1";
    $statementUpdateSesion = $pdo->prepare($queryUpdateSesion);
    $statementUpdateSesion->bindParam(":usuario_id", $usuario_id, PDO::PARAM_INT);
    $statementUpdateSesion->execute();

    // Cerrar la sesión del usuario
    session_unset();
    session_destroy();

    // El cierre de sesión es exitoso
    echo json_encode(["success" => true, "message" => "Sesión cerrada exitosamente"]);

} else {
    // Si no se recibieron datos válidos, enviar una respuesta de error al cliente
    echo json_encode(["success" => false, "error" => "Datos inválidos"]);
}
?>