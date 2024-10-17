<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];
$conexion = mysqli_connect('localhost', 'root', 
'', 'php_inicial_488') or exit ("No se ha podido conectar a la base de datos, Inténtelo más tarde...");

mysqli_query($conexion,"INSERT INTO consultas(name, email, phone, msg) VALUES('$name', '$email','$phone', '$msg')");

mysqli_close($conexion);

