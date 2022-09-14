<?php
session_start();

/*$link = mysqli_connect('localhost', 'admin', 'NCUEcsie!@', 'website_database') 
or die("無法開啟MySQL資料庫連結!<br>");
$sql = "select * from member";
// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");*/

$_SESSION['chinese'] = intval($_POST['chinese']);
$_SESSION['english'] = intval($_POST['english']);
$_SESSION['matha'] = intval($_POST['matha']);
$_SESSION['mathb'] = intval($_POST['mathb']);
$_SESSION['socialstu'] = intval($_POST['socialstu']);
$_SESSION['sciencestu'] = intval($_POST['sciencestu']);
$_SESSION['listening'] = intval($_POST['listening']);
$_SESSION['r'] = intval($_POST['realistic']);
$_SESSION['i'] = intval($_POST['investigative']);
$_SESSION['a'] = intval($_POST['artistic']);
$_SESSION['s'] = intval($_POST['social']);
$_SESSION['e'] = intval($_POST['enterprising']);
$_SESSION['c'] = intval($_POST['conventional']);

header("Location: fuzzysearch.php");
?>

