<?php
session_start();

$link = mysqli_connect('localhost', 'admin', 'NCUEcsie!@', 'website_database') 
or die("無法開啟MySQL資料庫連結!<br>");
// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

$recordnum = $_SESSION['num'];
//echo $recordnum;
$code = "SELECT * FROM searchrecord where id = " . $recordnum . "";
$result = mysqli_query($link, $code);
$row = mysqli_fetch_assoc($result);
//echo $row[1];
$grade = array($row["chinese"], $row["english"], $row["matha"], $row["mathb"], $row["socialstu"], $row["sciencestu"]);
$prefer = array($row["school_order"], $row["percentage_order"], $row["field_order"], $row["location_order"]);
$field_prefer = array($row["education"], $row["art"], $row["social"], $row["business"], $row["science"], $row["cs"], $row["constructure"], $row["agri"], $row["med"], $row["service"], $row["other"]);
$location_prefer = array($row["north"], $row["central"], $row["south"], $row["east"], $row["island"]);
mysqli_close($link);
/*print_r($grade);
print_r($prefer);
print_r($field_prefer);
print_r($location_field);*/
$b = 0;
$field_specific = array();
$location_specific = array();
for($a = 0 ; $a < 11 ; $a ++)
{
    if($field_prefer[$a] != 0)
    {
        $field_specific[] = intval($a+1);
    } 
}
$b = 0;
for($a = 0 ; $a < 5 ; $a ++)
{
    if($location_prefer[$a] != 0)
    {
        $location_specific[] = intval($a+1);
    } 
}
$link = mysqli_connect('localhost', 'admin', 'NCUEcsie!@', 'independent_study') 
or die("無法開啟MySQL資料庫連結!<br>");
// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
$code = "SELECT * FROM id_code_type WHERE location_code IN (". implode(",", array_map('intval', $location_specific)) . ") AND field_code IN (". implode(",", array_map('intval', $field_specific)) . ")" ;
$result = mysqli_query($link, $code);
$i = 0;
$department = array();
while ($row = mysqli_fetch_assoc($result))
{
    echo $row['id'] . " ";
    $code = "SELECT * FROM code_score WHERE ID = " . $row['id'];
    $result1 = mysqli_query($link, $code);
    $row1 = mysqli_fetch_assoc($result1);
    $department[][0] = $row['id'];
    $department[][1] = $row1['score_percentage'];
    $department[][3] = $row['field_code'];
    $department[][4] = $row['location_code'];
}
$txt = "";
for($i = 0 ; $i < count($department) ; $i++)
{
    $txt = $txt. $department[$i][0]. ",";
}
$txt = str_replace(",,,,", ",", $txt);
$myfile = fopen("ids.txt", "w") or die("Unable to open file!");
fwrite($myfile, $txt);
fclose($myfile);
//need testing
//$fp = fopen("ProbFile.txt", "r")or exit("can't open file<br>");
$textCnt  = "ProbFile.txt";
$contents = file_get_contents($textCnt);
$arrfields = explode(',', $contents);
$cnt = 1;
$tmppercentage = array();
foreach($arrfields as $field) {
    if($cnt % 2 == 1)
    $tmppercentage[][0] = $field;
    else
    $tmppercentage[][1] = $field;
}

for($i = 0 ; $i < count($department) ; $i ++)
{
    for($j = 0 ; $j < count($tmppercentage) ; $j ++)
    {
        if($department[$i][0] != $tmppercentage[$j][0])
            continue;
        $department[$i][2] = $tmppercentage[$j][1];
    }
}

for($i = 0 ; $i < count($department) ; $i ++)
{
    $total = ($department[$i][1] * $prefer[0]) + ($department[$i][2] * $prefer[1]) + ($department[$i][3] * $prefer[2]) + ($department[$i][4] * $prefer[3]);
    $department[$i][5] = $total;
}

function sortByOrder($a, $b) {
    return $a[5] - $b[5];
}

usort($department, 'sortByOrder');

$_SESSION['department'] = $department;
//calculate previous grades
$_SESSION['111grades'] = $grade;

$ch = array();
$end = array();
$mathA= array();
$mathB = array();
$soc = array();
$sci = array();

$code = "SELECT * FROM ch WHERE score = $grade[0]";
$result = mysqli_query($link, $code);
while ($row = mysqli_fetch_assoc($result))
{
    if($row['year'] == 110)
        $ch[] = $row['adjust_score'];
    else if($row['year'] == 109)
        $ch[] = $row['adjust_score'];
    else if($row['year'] == 108)
        $ch[] = $row['adjust_score'];
}
$_SESSION['ch_pre'] = $ch;

$code = "SELECT * FROM eng WHERE score = $grade[1]";
$result = mysqli_query($link, $code);
while ($row = mysqli_fetch_assoc($result))
{
    if($row['year'] == 110)
        $eng[] = $row['adjust_score'];
    else if($row['year'] == 109)
        $eng[] = $row['adjust_score'];
    else if($row['year'] == 108)
        $eng[] = $row['adjust_score'];
}
$_SESSION['eng_pre'] = $eng;

$code = "SELECT * FROM mathA WHERE score = $grade[2]";
$result = mysqli_query($link, $code);
while ($row = mysqli_fetch_assoc($result))
{
    if($row['year'] == 110)
        $mathA[] = $row['adjust_score'];
    else if($row['year'] == 109)
        $mathA[] = $row['adjust_score'];
    else if($row['year'] == 108)
        $mathA[] = $row['adjust_score'];
}
$_SESSION['matha_pre'] = $mathA;

$code = "SELECT * FROM mathB WHERE score = $grade[3]";
$result = mysqli_query($link, $code);
while ($row = mysqli_fetch_assoc($result))
{
    if($row['year'] == 110)
        $mathB[] = $row['adjust_score'];
    else if($row['year'] == 109)
        $mathB[] = $row['adjust_score'];
    else if($row['year'] == 108)
        $mathB[] = $row['adjust_score'];
}
$_SESSION['mathb_pre'] = $mathB;

$code = "SELECT * FROM soc WHERE score = $grade[4]";
$result = mysqli_query($link, $code);
while ($row = mysqli_fetch_assoc($result))
{
    if($row['year'] == 110)
        $soc[] = $row['adjust_score'];
    else if($row['year'] == 109)
        $soc[] = $row['adjust_score'];
    else if($row['year'] == 108)
        $soc[] = $row['adjust_score'];
}
$_SESSION['soc_pre'] = $soc;

$code = "SELECT * FROM sci WHERE score = $grade[5]";
$result = mysqli_query($link, $code);
while ($row = mysqli_fetch_assoc($result))
{
    if($row['year'] == 110)
        $sci[] = $row['adjust_score'];
    else if($row['year'] == 109)
        $sci[] = $row['adjust_score'];
    else if($row['year'] == 108)
        $sci[] = $row['adjust_score'];
}
$_SESSION['sci_pre'] = $sci;

header("Location: result.php");
