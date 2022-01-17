
<?php 


$listen = $_POST['listening'];
echo "你的聽力是 $listen ";
$ins = $_POST ["interest"];
echo '<br>';  
$myallins = implode (",", $ins);
echo "你的興趣量表是 $myallins";

?>


