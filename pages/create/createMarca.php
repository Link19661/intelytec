<?php
require_once('../../config/conexion.php'); // Incluye el archivo de conexión

// Obtener datos del cuerpo de la solicitud en formato JSON
$inputJSON = file_get_contents('php://input');
$inputData = json_decode($inputJSON, true);

// Verificar si se recibieron datos válidos
if ($inputData !== null) {
    // Obtener el nuevo número de cat_producto_num
    $queryNumero = "SELECT COALESCE(MAX(id_marca) + 1, 1) AS nuevo_numero FROM cat_marca";
    $statementNumero = $pdo->prepare($queryNumero);
    $statementNumero->execute();
    $nuevoNumero = $statementNumero->fetch(PDO::FETCH_ASSOC)["nuevo_numero"];

    // Obtener los datos del formulario
    $nombreCategoria = $inputData["nombre"];
    $estadoCategoria = $inputData["estado"];

    // Realizar la consulta para insertar los datos en la base de datos
    $query = "INSERT INTO cat_marca (id_marca, marca_nombre, estado_id) VALUES (:numero, :nombre, :estado)";
    $statement = $pdo->prepare($query);

    // Asignar los valores a los parámetros de la consulta
    $statement->bindParam(":numero", $nuevoNumero, PDO::PARAM_INT);
    $statement->bindParam(":nombre", $nombreCategoria, PDO::PARAM_STR);
    $statement->bindParam(":estado", $estadoCategoria, PDO::PARAM_INT);

    try {
        // Ejecutar la consulta
        $statement->execute();

        // Enviar una respuesta de éxito al cliente
        echo json_encode(["success" => true]);
    } catch (PDOException $e) {
        // En caso de error, enviar una respuesta de error al cliente
        echo json_encode(["success" => false, "error" => $e->getMessage()]);
    }
} else {
    // Si no se recibieron datos válidos, enviar una respuesta de error al cliente
    echo json_encode(["success" => false, "error" => "Datos inválidos"]);
}
?>