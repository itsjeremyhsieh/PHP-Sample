<?php
session_start();

$link = mysqli_connect('localhost', 'admin', 'NCUEcsie!@', 'website_database') // 建立MySQL的資料庫連結
or die("無法開啟MySQL資料庫連結!<br>");
$sql = "select * from message ";
// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$year = $_POST['testyear'];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sqlquery = "INSERT INTO member VALUES
    ('$username', '$name', '$gender', '$email', '$pwd','$year', '1')";

    if ($result = mysqli_query($link, $sqlquery)) // 送出查詢的SQL指令
    {
        function_alert("帳號新增成功！");
    } else
    function_alert("帳號新增失敗！");
  
}

function function_alert($message) { 
      
    echo "<script>alert('$message');
    window.location.href='login.php';
   </script>"; 
   return false;
}

?>