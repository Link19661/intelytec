<?php
require_once('../../config/conexion.php');

// Realizar la consulta para obtener las categorías desde la base de datos
$query = "SELECT cat_categoria_producto.cat_producto_num,
 cat_categoria_producto.cat_prod_nombre, cat_categoria_producto.fecha_registro, cat_estado.estado_tipo
  FROM cat_categoria_producto INNER JOIN cat_estado ON cat_categoria_producto.estado_id = cat_estado.estado_id";
$statement = $pdo->prepare($query);
$statement->execute();
$categorias = $statement->fetchAll(PDO::FETCH_ASSOC);

// Devolver los datos en formato JSON
echo json_encode($categorias);
?>
