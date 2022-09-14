<?php
session_start();

/*$link = mysqli_connect('localhost', 'admin', 'NCUEcsie!@', 'website_database') 
or die("無法開啟MySQL資料庫連結!<br>");
$sql = "select * from member";
// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");*/

$school_order = intval($_POST['school_order']);
$percentage_order = intval($_POST['percentage_order']);
$field_order = intval($_POST['field_order']);
$education = intval($_POST['education']);
$art = intval($_POST['art']);
$social = intval($_POST['social']);
$business = intval($_POST['business']);
$science = intval($_POST['science']);
$cs = intval($_POST['cs']);
$med = intval($_POST['med']);
$constructure = intval($_POST['constructure']);
$agri = intval($_POST['agri']);
$service = intval($_POST['service']);
$other = intval($_POST['other']);
$location_order = intval($_POST['location_order']);
$north = intval($_POST['north']);
$central = intval($_POST['central']);
$south = intval($_POST['south']);
$east = intval($_POST['east']);
$island = intval($_POST['island']);

$chinese = $_SESSION['chinese'];
$english = $_SESSION['english'];
$matha = $_SESSION['matha'];
$mathb = $_SESSION['mathb'];
$socialstu = $_SESSION['socialstu'] ;
$sciencestu = $_SESSION['sciencestu'];
$listening = $_SESSION['listening'];
$r = $_SESSION['r'];
$i = $_SESSION['i'];
$a = $_SESSION['a'];
$s = $_SESSION['s'];
$e = $_SESSION['e'];
$c = $_SESSION['c'];


$result = array($chinese, $english, $matha, $mathb, $socialstu, $sciencestu, $listening, $r, $i, $a, $s, $e, $c, $school_order, $percentage_order, $field_order, $education, $art, $social, $business, $science, $cs, $med, $constructure, $agri, $service, $other, $location_order, $north, $central, $south, $east, $island);
for($i = 0 ; $i < count($result) ; $i++)
{
    echo $result[$i] . " ";
}
echo count($result);

//header("Location: index.php");
?>