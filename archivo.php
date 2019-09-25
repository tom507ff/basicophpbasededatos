<?php
// esta es una conexion a la base de datos o&M
// variable= tipo db=nombre de base de datos; host=direccion donde se aloja la base de datos
$dsn = 'mysql:dbname=oym;host=192.1.202.248';
$user= 'xxx';  // usuario que ocupas para la conexion
$password= 'xxx'; // password algunas veces no tienen password quedaria vacia ''

try                   // ejecutamos el comando try que tratara de ejecutar lo que esta en {}
  {
   $pdo = new PDO ( $dsn,
                    $user,
                    $password);
  echo 'conexion exitosa';  // si la conexion es exitosa te mandara un mensaje de 'conexion exitosa'  
  }catch ( PDOExeption $e )   // aqui atrapamos los errores de conexion 
  {
  echo 'error al conectarnos: '.$e->getMessage(); // desplejamos los errores de conexion
  }
?>
