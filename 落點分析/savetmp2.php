<?php
session_start();

$link = mysqli_connect('localhost', 'admin', 'NCUEcsie!@', 'website_database') 
or die("無法開啟MySQL資料庫連結!<br>");
// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");


$school_order = $_POST['school_order'];
$percentage_order = $_POST['percentage_order'];
$field_order = $_POST['field_order'];
$education = $_POST['education'];
$art = $_POST['art'];
$social = $_POST['social'];
$business = $_POST['business'];
$science = $_POST['science'];
$cs = $_POST['cs'];
$med = $_POST['med'];
$constructure = $_POST['constructure'];
$agri = $_POST['agri'];
$service = $_POST['service'];
$other = $_POST['other'];
$location_order = $_POST['location_order'];
$north = $_POST['north'];
$central = $_POST['central'];
$south = $_POST['south'];
$east = $_POST['east'];
$island = $_POST['island'];

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

$result = mysqli_query($link, "SELECT * FROM searchrecord");
$num = mysqli_num_rows($result); //查詢結果筆數
$num = $num + 1;
$_SESSION['num'] = $num;
$result = array($num, $chinese, $english, $matha, $mathb, $socialstu, $sciencestu, $listening, $r, $i, $a, $s, $e, $c, $school_order, $percentage_order, $field_order, $education, $art, $social, $business, $science, $cs, $med, $constructure, $agri, $service, $other, $location_order, $north, $central, $south, $east, $island);
/*for($i = 0 ; $i < count($result) ; $i++)
{
    echo $result[$i] . " ";
}
echo count($result);*/
$sql = "insert into searchrecord values ('" . $result[0] . "','" . $result[1] . "','" . $result[2] . "','" . $result[3] . "','" . $result[4] . "','" . $result[5] . "','" . $result[6]. "','" . $result[7]. "','" . $result[8]. "','" . $result[9]. "','" . $result[10]. "','" . $result[11]. "','" . $result[12]. "','" . $result[13]. "','" . $result[14]. "','" . $result[15]. "','" . $result[16]. "','" . $result[17]. "','" . $result[18]. "','" . $result[19]. "','" . $result[20]. "','" . $result[21]. "','" . $result[22]. "','" . $result[23]. "','" . $result[24]. "','" . $result[25]. "','" . $result[26]. "','" . $result[27]. "','" . $result[28]. "','" . $result[29]. "','" . $result[30]. "','" . $result[31]. "','" . $result[32].  "','" . $result[33]. "')";
$result = mysqli_query($link, $sql);
header("Location: calculate result.php");
?>