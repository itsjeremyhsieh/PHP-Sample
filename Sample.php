<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
       <title>HTML Website Sample</title>

    </head>
    <body>
        <h1>110�~�j�ǥ�e�d�]</h1>
        <p>�п�J�z���ӤH���</p>
        <form action="Sample.php" method="post">
            ���Z�d�ߤ覡:
            <input type="submit" name="�Ǵ�" value="�Ǵ�">
            <input type="submit" name="����" value="����">
        </form>
        <form actime="Sample.php" method="post">
            �п�J����Ť�:
            <input type="text" name="Chinese" value="���">
            <input type="text" name="English" value="�^��">
            <input type="text" name="Math" value="�ƾ�">
            <input type="text" name="Social" value="���|">
            <input type="text" name="Science" value="�۵M">
            <input type="submit" name="submit" value="����">
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

