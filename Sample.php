<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
       <title>HTML Website Sample</title>

    </head>
    <body>
        <h1>110年大學交叉查榜</h1>
        <p>請輸入您的個人資料</p>
        <form action="Sample.php" method="post">
            成績查詢方式:
            <input type="submit" name="學測" value="學測">
            <input type="submit" name="指考" value="指考">
        </form>
        <form actime="Sample.php" method="post">
            請輸入五科級分:
            <input type="text" name="Chinese" value="國文">
            <input type="text" name="English" value="英文">
            <input type="text" name="Math" value="數學">
            <input type="text" name="Social" value="社會">
            <input type="text" name="Science" value="自然">
            <input type="submit" name="submit" value="提交">
        <?php
         function fun1($a, $b){
             if($a > $b)
                 return $a * $b;
             else
                 return $a + $b;
         }
 
         function fun2($a, $b){
             if($b == 0)
                 return -1;
             else    
                 return (float)($a / $b);
         }
        $a = 10;
        $b = 5;
        $c = fun1($a, $b);
        echo "Function1 result = ". $c. "<br>";
        $c = fun2($a, $b);
        echo "Function2 result = ". $c;
        ?>
    </body>
</html>

