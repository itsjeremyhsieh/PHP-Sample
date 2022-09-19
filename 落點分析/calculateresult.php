<?php
session_start();

$link = mysqli_connect('localhost', 'admin', 'NCUEcsie!@', 'website_database') 
or die("無法開啟MySQL資料庫連結!<br>");
// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

$recordnum = $_SESSION['num'];
$code = "SELECT * FROM searchrecord where id = '" . $recordnum . "'";
$result = mysqli_query($link, $code);
$row = mysqli_fetch_assoc($result);

$grade = array($row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);
$prefer = array($row[14], $row[15], $row[16], $row[28]);
$field_prefer = array($row[17], $row[18], $row[19], $row[20], $row[21], $row[22], $row[23], $row[24], $row[25], $row[26], $row[27]);
$location_field = array($row[29], $row[30], $row[31], $row[32], $row[33]);
mysqli_close($link);
$link = mysqli_connect('localhost', 'admin', 'NCUEcsie!@', 'independent_study') 
or die("無法開啟MySQL資料庫連結!<br>");
// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
$code = "SELECT * FROM code_score ";
$result = mysqli_query($link, $code);
$i = 0;
while ($row = mysqli_fetch_assoc($result))
{
    $code = "SELECT * FROM department_code WHERE ID = $row[0]";
    $result1 = mysqli_query($link, $code);
    $row1 = mysqli_fetch_assoc($result1);
    $department[$i][0] = $row[0];
    $department[$i][1] = $row[1];
    $department[$i][4] = $row[5];
    $department[$i][6] = $row1[1];
    $i++;
}

$code = "SELECT * FROM id_code_type ";
$result1 = mysqli_query($link, $code);
while ($row1 = mysqli_fetch_assoc($result1))
{
    for($j = 0 ; $j < $i ; $j++)
    {
        if($department[$j][0] == $row1[0])
        {
            $department[$j][3] = $row1[2];
            break;
        }
           
    }
}

//calculate previous grades
$_SESSION['111grades'] = $grade;
$code = "SELECT * FROM ch WHERE score = $grade[0]";
$result = mysqli_query($link, $code);
while ($row = mysqli_fetch_assoc($result))
{
    if($row[0] == 110)
        $ch[0] = $row[2];
    else if($row[0] == 109)
        $ch[1] = $row[2];
    else if($row[0] == 108)
        $ch[2] = $row[2];
}
$_SESSION['ch_pre'] = $ch;

$code = "SELECT * FROM eng WHERE score = $grade[1]";
$result = mysqli_query($link, $code);
while ($row = mysqli_fetch_assoc($result))
{
    if($row[0] == 110)
        $eng[0] = $row[2];
    else if($row[0] == 109)
        $eng[1] = $row[2];
    else if($row[0] == 108)
        $eng[2] = $row[2];
}
$_SESSION['eng_pre'] = $eng;

$code = "SELECT * FROM mathA WHERE score = $grade[2]";
$result = mysqli_query($link, $code);
while ($row = mysqli_fetch_assoc($result))
{
    if($row[0] == 110)
        $mathA[0] = $row[2];
    else if($row[0] == 109)
        $mathA[1] = $row[2];
    else if($row[0] == 108)
        $mathA[2] = $row[2];
}
$_SESSION['matha_pre'] = $mathA;

$code = "SELECT * FROM mathB WHERE score = $grade[3]";
$result = mysqli_query($link, $code);
while ($row = mysqli_fetch_assoc($result))
{
    if($row[0] == 110)
        $mathB[0] = $row[2];
    else if($row[0] == 109)
        $mathB[1] = $row[2];
    else if($row[0] == 108)
        $mathB[2] = $row[2];
}
$_SESSION['mathb_pre'] = $mathB;

$code = "SELECT * FROM soc WHERE score = $grade[4]";
$result = mysqli_query($link, $code);
while ($row = mysqli_fetch_assoc($result))
{
    if($row[0] == 110)
        $soc[0] = $row[2];
    else if($row[0] == 109)
        $soc[1] = $row[2];
    else if($row[0] == 108)
        $soc[2] = $row[2];
}
$_SESSION['soc_pre'] = $soc;

$code = "SELECT * FROM sci WHERE score = $grade[5]";
$result = mysqli_query($link, $code);
while ($row = mysqli_fetch_assoc($result))
{
    if($row[0] == 110)
        $sci[0] = $row[2];
    else if($row[0] == 109)
        $sci[1] = $row[2];
    else if($row[0] == 108)
        $sci[2] = $row[2];
}
$_SESSION['sci_pre'] = $sci;

header("Location: result.php");
