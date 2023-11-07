<?php

require_once('../../config/conexion.php'); // Incluye el archivo de conexión

header('Content-Type: application/json');
// Obtener datos del cuerpo de la solicitud en formato JSON
$inputJSON = file_get_contents('php://input');
$inputData = json_decode($inputJSON, true);

// Verificar si se recibieron datos válidos
if ($inputData !== null && isset($inputData["email"]) && isset($inputData["password"])) {

    // Obtener los datos del formulario
    $email = $inputData["email"];
    $password = $inputData["password"];

 // Realizar la consulta para verificar el inicio de sesión
 $query = "SELECT usuario_id, usuario_email, usuario_clave, usuario_nombre FROM tb_usuario WHERE usuario_email = :email";
 $statement = $pdo->prepare($query);
 $statement->bindParam(":email", $email, PDO::PARAM_STR);
 $statement->execute();
 $usuario = $statement->fetch(PDO::FETCH_ASSOC);

 // verificar si se encontro el usuario con el correo electronico
if ($usuario && $password === $usuario["usuario_clave"]) {

    // Obtener más detalles del usuario (por ejemplo, su nombre)
    $usuarioId = $usuario["usuario_id"];
    $nombreUsuario = $usuario["usuario_nombre"]; 
    //se crea una sesion con el id del usuario
    $_SESSION["usuario_id"] = $usuario["usuario_id"];
    $_SESSION["usuario_nombre"] = $usuario["usuario_nombre"];
    $estadoSesion = 1;
    // Obtener la dirección IP del cliente y la hora actual
    $ip = $_SERVER['REMOTE_ADDR'];
    $hora = date("Y-m-d H:i:s");

    // Obtener el nuevo número de sesión
    $queryNumeroSesion = "SELECT COALESCE(MAX(sesion_id) + 1, 1) AS nuevo_numero FROM tb_sesion";
    $statementNumeroSesion = $pdo->prepare($queryNumeroSesion);
    $statementNumeroSesion->execute();
    $nuevoNumeroSesion = $statementNumeroSesion->fetch(PDO::FETCH_ASSOC)["nuevo_numero"];

    // Realizar la consulta para insertar los datos en la tabla de sesiones
    $querySesion = "INSERT INTO tb_sesion (sesion_id, usuario_id, estado_id, sesion_usuario, sesion_ip, sesion_hora) VALUES (:numero, :usuario, :estado, :nombre, :ip, :hora)";
    $statementSesion = $pdo->prepare($querySesion);
    $statementSesion->bindParam(":numero", $nuevoNumeroSesion, PDO::PARAM_INT);
    $statementSesion->bindParam(":usuario", $usuarioId, PDO::PARAM_INT);
    $statementSesion->bindParam(":estado", $estadoSesion, PDO::PARAM_INT); // Aquí se establece el estado activo
    $statementSesion->bindParam(":nombre", $nombreUsuario, PDO::PARAM_STR); 
    $statementSesion->bindParam(":ip", $ip, PDO::PARAM_STR);
    $statementSesion->bindParam(":hora", $hora, PDO::PARAM_STR);
    $statementSesion->execute();

    // El inicio de sesión es exitoso
    echo json_encode(["success" => true, "success" => "success"]);
} else {
    // El inicio de sesión falló, enviar una respuesta de error al cliente
    echo json_encode(["success" => false, "error" => "Credenciales incorrectas"]);
}

} else {
 // Si no se recibieron datos válidos, enviar una respuesta de error al cliente
 echo json_encode(["success" => false, "error" => "Datos inválidos"]);
}
?>