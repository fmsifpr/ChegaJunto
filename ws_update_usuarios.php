<?php
require ("../ws_db/connect.php");

$sql="UPDATE usuarios WHERE email = ".'"'.$_GET["email"].'"';

if (mysqli_query($_DB['connection'],$sql)) {
	echo "true";
} else {
	echo "false";
}

mysqli_close($_DB['connection']);
?>