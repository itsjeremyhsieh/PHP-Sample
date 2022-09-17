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

$chinese = $_SESSION['chinese'];
$english = $_SESSION['english'];
$matha = $_SESSION['matha'];
$mathb = $_SESSION['mathb'];
$social = $_SESSION['socialstu'];
$science = $_SESSION['sciencestu'];
$r = $_SESSION['r'];
$i = $_SESSION['i'];
$a = $_SESSION['a'];
$s = $_SESSION['s'];
$e = $_SESSION['e'];
$c = $_SESSION['c'];
//run recommendation
$re = exec("python test.py $chinese $english $matha $mathb $social $science $r $i $a $s $e $c");

//
header("Location: fuzzysearch.php");

?>

