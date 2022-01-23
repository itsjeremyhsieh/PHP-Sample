
<?php 
echo "你以<b>學測</b>進行搜尋","<br>";
$chi = $_POST['chinese']; 
if(strcmp($chi, "請選擇") )
    echo "你的國文成績是<b>$chi</b>級分","<br>";
$eng = $_POST['english']; 
if(strcmp($eng, "請選擇") )
    echo "你的英文成績是<b>$eng</b>級分","<br>";
$matA= $_POST['mathA']; 
if(strcmp($matA, "請選擇") )
    echo "你的數學A成績是<b>$matA</b>級分","<br>";
$matB= $_POST['mathB']; 
if(strcmp($matB, "請選擇") )
    echo "你的數學A成績是<b>$matB</b>級分","<br>";
$soc = $_POST['social']; 
if(strcmp($soc, "請選擇") )
    echo "你的社會成績是<b>$soc</b>級分","<br>";
$sci = $_POST['science']; 
if(strcmp($sci, "請選擇") )
    echo "你的自然成績是<b>$sci</b>級分","<br>";
$listen = $_POST['listening'];
if(strcmp($listen, "non"))
    echo "你的聽力是<b>$listen</b>";
//
if(isset( $_POST ["interest"]))
{
    $ins = $_POST ["interest"];
    echo '<br>';  
    $myallins = implode (", ", $ins);
    echo "你的興趣量表是 <b>$myallins</b>";
}

?>


