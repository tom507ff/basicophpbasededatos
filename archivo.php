<?php
// esta es una conexion a la base de datos o&M

$dsn = 'mysql:dbname=oym;host=192.1.202.248';
$user= 'xxx';
$password= 'xxx';

try 
  {
   $pdo = new PDO ( $dsn,
                    $user,
                    $password);
  //echo 'conexion exitosa';
  }catch ( PDOExeption $e )  
  {
  echo 'error al conectarnos: '.$e->getMessage();
  }
?>
