<!DOCTYPE html>
<title>
    <meta charset = "utf-8">
    <title>分析結果</title>
</title>
<body>
  
    <p>
        <?php 
        echo "你以<b>學測</b>進行搜尋","<br>";
        $chi = $_POST['chinese']; 
        if(strcmp($chi, "未報考") )
            echo "你的國文成績是<b>$chi</b>級分","<br>";
        $eng = $_POST['english']; 
        if(strcmp($eng, "未報考") )
            echo "你的英文成績是<b>$eng</b>級分","<br>";
        $matA= $_POST['mathA']; 
        if(strcmp($matA, "未報考") )
            echo "你的數學A成績是<b>$matA</b>級分","<br>";
        $matB= $_POST['mathB']; 
        if(strcmp($matB, "未報考") )
            echo "你的數學A成績是<b>$matB</b>級分","<br>";
        $soc = $_POST['social']; 
        if(strcmp($soc, "未報考") )
            echo "你的社會成績是<b>$soc</b>級分","<br>";
        $sci = $_POST['science']; 
        if(strcmp($sci, "未報考") )
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
        <?php 
            $link = @mysqli_connect('localhost', 'root', 'Jeremy20020107!', '110gsat');
            if(!$link){
                echo "MySQLw資料庫連線錯誤!";
            }
            else{
                echo "MySQL資料庫連線成功!";
            }

        ?>
        <div style="background-color: rgb(253, 253, 232);">
        <h2>分析結果</h2>
        <p>
        <div style="background-color: #f5e2cf;">

        您的落點分析結果如下表所示：
        <table  wide=”200” height=”800” border =”3”>
        <tr>
        <td align="center"><b>順位</b></td>
        <td align="center"><b>校系代碼</b></td>
        <td align="center"><b>校系名稱</b></td>   
        <td align="center"><b>通過機率</b></td>
        <td align="center"><b>甄試日期</b></td></tr>
        <tr><td> 1 </td><td>023152</td><td> 國立彰化師範大學資訊工程學系</td><td>☆☆☆☆☆</td><td>無</td></tr> 
        <tr><td> 2 </td><td>001572</td><td> 國立台灣大學電機工程學系</td><td>☆</td><td>3/10</td></tr> 
        </p>
        </table>
        <div style="background-color:rgb(253, 253, 232);">
        <hr>
        
        <h2>相關連結</h2>
        <a href='https://www.ceec.edu.tw/'>大考中心首頁</a>
    </p>
</body>