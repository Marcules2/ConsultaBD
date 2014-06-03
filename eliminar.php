<?php
require 'conexion.php';

$id_auto=$_POST["id_auto"];


$sql="delete from autos where id_auto='$id_auto';";
$resultado=mysql_query($sql,$con);

if($resultado){
 echo "El registro elimino de manera correcta ";       
}else{
 die("Error de conexión".mysql_error());   
}

mysql_close($con);
?>