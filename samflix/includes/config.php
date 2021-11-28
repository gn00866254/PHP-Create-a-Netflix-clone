<?php
ob_start(); //Turns on output buffering
session_start();

date_default_timezone_set("Asia/Tokyo");

try {
    //インスタンスを作成することで接続を確率する。PDO object
    $con = new PDO("mysql:dbname=samflix+;host=localhost","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
}
catch (PDOException $e){
    //エラーメッセージを出力する。
    exit("Connetion failed: ".$e->getMessage());
}
?>