<!DOCTYPE html>
<title>
    <meta charset = "utf-8">
    <title>分析結果</title>
</title>
<body>
    <p>
        <?php 
        echo "你以<b>分科測驗</b>進行搜尋","<br>";
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