<?php
$id = $_POST['id'];
$conexion = mysqli_connect("localhost", "root","","posts");
$busqueda =mysqli_query($conexion,"DELETE FROM posts . post WHERE post . id = $id;");
header("Location:tablas.php");
?>
