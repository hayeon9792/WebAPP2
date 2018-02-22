<?php
require("../config/config.php");
require("../lib/db.php");
$mysqli = db_init($config["host"],$config["id"],$config["pw"],$config["db"] );

if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}

extract($_POST); //자동으로 $user_id, $user_pw, $user_pw2, $user_email 변수 생성

$encrypted_pw = sha1($user_pw);

$q = "INSERT INTO ap_member(`id`,`pw`,`email`) VALUES('$user_id','$encrypted_pw','$user_email')";
$mysqli -> query($q);
//mysqli_query($mysqli, $q);
$mysqli -> close();
/*
string md5 ( string $str [, bool $raw_output = false ] )
$str = 해쉬값을 구할 문자열
$raw_output = true 로 설정하면, 결과값이 16자로 만들어줍니다.
              설정하지 않을 경우, 32자의 길이를 가집니다.

string sha1 ( string $str [, bool $raw_output = false ] )
$str = 해쉬값을 구할 문자열
$raw_output = true 로 설정하면, 결과값이 20자로 만들어줍니다.
              설정하지 않을 경우, 40자의 길이를 가집니다.
*/
 ?>
