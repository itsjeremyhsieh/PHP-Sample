<?php
session_start();

/*$link = mysqli_connect('localhost', 'admin', 'NCUEcsie!@', 'website_database') 
or die("無法開啟MySQL資料庫連結!<br>");
$sql = "select * from member";
// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");*/

$chinese = intval($_POST['chinese']);
$english = intval($_POST['english']);
$matha = intval($_POST['matha']);
$mathb = intval($_POST['mathb']);
$socialstu = intval($_POST['socialstu']);
$sciencestu = intval($_POST['sciencestu']);
$listening = intval($_POST['listening']);
$r = intval($_POST['realistic']);
$i = intval($_POST['investigative']);
$a = intval($_POST['artistic']);
$s = intval($_POST['social']);
$e = intval($_POST['enterprising']);
$c = intval($_POST['conventional']);
header("Location: fuzzysearch.php");
?>

