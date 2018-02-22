<?php
function db_init($host, $id, $pw, $db){
$mysqli = mysqli_connect($host, $id, $pw); // MySQL 접속
mysqli_select_db($mysqli, $db); // DB선택
return $mysqli;
}
?>
