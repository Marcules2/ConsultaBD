<?php
require 'conexion.php';
$colorac=$_POST["ColorA"];
$colornu=$_POST["ColorN"];


$sql="update autos set Precio='$colornu'  where Precio='$colorac'" ;
$resultado=mysql_query($sql,$con);
if($resultado){
	echo "Registro Actualizado";
	}else{
	die ("Registro no Actualizado".mysql_error());
		}
mysql_close($con);
?>