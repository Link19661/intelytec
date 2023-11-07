<?php
require_once('../../config/conexion.php');

// Realizar la consulta para obtener las categorías desde la base de datos
$query = "SELECT cat_marca.id_marca,
 cat_marca.marca_nombre, cat_marca.fecha_creacion, cat_estado.estado_tipo
  FROM cat_marca INNER JOIN cat_estado ON cat_marca.estado_id = cat_estado.estado_id";
$statement = $pdo->prepare($query);
$statement->execute();
$marca = $statement->fetchAll(PDO::FETCH_ASSOC);

// Devolver los datos en formato JSON
echo json_encode($marca);
?>

