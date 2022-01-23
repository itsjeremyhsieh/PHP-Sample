<?php 
echo "你以<b>指考</b>進行搜尋","<br>";
$math = $_POST['math'];
if(strcmp($math, "") )
    echo "你的數甲成績是<b>$math</b>分","<br>";
$his= $_POST['history'];
if(strcmp($his, "") )
    echo "你的歷史成績是<b>$his</b>分","<br>";
$geo = $_POST['geo'];
if(strcmp($geo, "") )
    echo "你的地理成績是<b>$geo</b>分","<br>";
$social = $_POST['social'];
if(strcmp($social, "") )
    echo "你的公民成績是<b>$social</b>分","<br>";
$phy = $_POST['physics'];
if(strcmp($phy, "") )
    echo "你的物理成績是<b>$phy</b>分","<br>";
$chem = $_POST['chem'];
if(strcmp($chem, "") )
    echo "你的化學成績是<b>$chem</b>分","<br>";
$bio = $_POST['bio'];
if(strcmp($bio, "") )
    echo "你的生物成績是<b>$bio</b>分","<br>";

if(isset( $_POST ["interest"]))
{
    $ins = $_POST ["interest"];
    echo '<br>';  
    $myallins = implode (", ", $ins);
    echo "你的興趣量表是 <b>$myallins</b>";
}
?>