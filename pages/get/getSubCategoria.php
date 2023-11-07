<?php
require_once('../../config/conexion.php');

// Realizar la consulta para obtener las categorías desde la base de datos
$query = "SELECT cat_sub_categoria.sub_cat_id,
 cat_sub_categoria.sub_cat_nombre, cat_sub_categoria.fecha_registro, cat_estado.estado_tipo, cat_categoria_producto.cat_prod_nombre
  FROM cat_sub_categoria INNER JOIN cat_estado ON cat_sub_categoria.estado_id = cat_estado.estado_id
  INNER JOIN cat_categoria_producto ON cat_sub_categoria.cat_producto = cat_categoria_producto.cat_producto_num";
$statement = $pdo->prepare($query);
$statement->execute();
$categorias = $statement->fetchAll(PDO::FETCH_ASSOC);

// Devolver los datos en formato JSON
echo json_encode($categorias);
?>
