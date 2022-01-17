
<?php 
$chi = $_POST['chinese']; 
echo "你的國文成績是$chi 級分","<br>";
$eng = $_POST['english']; 
echo "你的英文成績是$eng 級分","<br>";
$mat= $_POST['math']; 
echo "你的數學成績是$mat 級分","<br>";
$soc = $_POST['social']; 
echo "你的社會成績是$soc 級分","<br>";
$sci = $_POST['science']; 
echo "你的自然成績是$sci 級分","<br>";
$listen = $_POST['listening'];
echo "你的聽力是 $listen ";
$ins = $_POST ["interest"];
echo '<br>';  
$myallins = implode (",", $ins);
echo "你的興趣量表是 $myallins";

?>


