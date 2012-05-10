<?php
$bd_host = "sql200.byethost24.com";   
$bd_usuario = "b24_5296847";   
$bd_password = "iagodiaz";   
$bd_base = "b24_5296847_contador";   
$con = mysql_connect($bd_host, $bd_usuario, $bd_password);   
mysql_select_db($bd_base, $con);
?>