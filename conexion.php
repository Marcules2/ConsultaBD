<?php

/*$servidor="sql303.260mb.net";
$usuario="n260m_14520910";
$contrasena="david2";
$baseDatos="n260m_14520910_autos";
$con=mysql_connect($servidor,$usuario,$contrasena)or die("Error de conexión".mysql_error());
mysql_select_db($baseDatos,$con);*/

$servidor="localhost";
$usuario="root";
$contrasena="";
$baseDatos="transporte";
$con=mysql_connect($servidor,$usuario,$contrasena)or die("Error de conexión".mysql_error());
mysql_select_db($baseDatos,$con);
?>