<?php
require ("../CJ/ws_connect.php");

$sql="SELECT * FROM grupo WHERE usuario_email = 'fmsifpr@gmail.com'";

$result = mysqli_query($_DB['connection'],$sql);

$result = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($result);

mysqli_close($_DB['connection']);
?>