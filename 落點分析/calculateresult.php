<?php
session_start();

$link = mysqli_connect('localhost', 'admin', 'NCUEcsie!@', 'website_database') 
or die("無法開啟MySQL資料庫連結!<br>");
// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

$recordnum = $_SESSION['num'];
$code = "SELECT * FROM searchrecord where id = '" . $recordnum . "'";
$result = mysqli_query($link, $code);
$row = mysqli_fetch_assoc($result);

?>