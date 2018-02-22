<?php
require("../config/config.php");
require("../lib/db.php");
$mysqli = db_init($config["host"],$config["id"],$config["pw"],$config["db"] );

if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}

extract($_POST); //자동으로 $user_id, $user_pw, $user_pw2, $user_email 변수 생성

echo $user_id.'<br />';
echo $user_pw.'<br />';
echo $user_pw2.'<br />';
echo $user_email.'<br />';

$q = "INSERT INTO ap_member(`id`,`pw`,`email`) VALUES('$user_id','$user_pw','$user_email')";
$mysqli -> query($q);
//mysqli_query($mysqli, $q);
$mysqli -> close();
 ?>
