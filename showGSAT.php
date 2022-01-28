<!DOCTYPE html>
<title>
    <meta charset = "utf-8">
    <title>分析結果</title>

    <style>
    html {
            height: 100%;
        }
    body {
            background-image: url(backgrounds/background_gsat.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            background-blend-mode: multiply;
        }
    .container{
            display: flex;
            /* 水平置中 */
            justify-content: center;    
            /* 垂直置中 */
            align-items: center; 
        }

    </style>
</title>
<body>
    <div class= "container">
        <div style="top:10px; position:absolute;border-width: 300px; width:300px; height:50px; text-align:center; line-height:50px; background-color: rgba(247, 231, 179, 0.9); border-radius: 20px 20px 20px 20px;">
            <span style="color: rgb(133, 93, 7);font-size:30px"><font face=" sans-serif ">110年大學落點分析</font></span>  
        </div>
    
        <div style="top:120px; position:absolute; border-width: 3px ; width: 220px; height: 30px ; padding: 5px; text-align: center; background-color: rgba(29, 122, 228, 0.9); border-radius: 10px 10px 0 0px;">
            <span style="color: rgb(255, 255, 255);">落點分析結果（學測）</span>
        </div>
        <div style="top:160px; position:absolute;border-width: 100px ; width: 650px; height: 3px; padding: 5px; text-align: center; background-color: rgba(142, 179, 221, 0.9); border-radius: 0 10px 0px 0;">
        </div>
        <div style="top:173px; position:absolute; border-width: 3px ; width: 650px; height: 2000px; text-align: center; padding: 5px; background-color: rgba(222, 240, 173, 0.9); border-radius: 0px 0px 0 0px;">
        </div>
        <div style="top:180px; position:absolute; border-width: 3px ; width: 600px; height: auto; text-align: top; padding: 5px; background-color: rgba(255, 255, 255, 0.4); border-radius: 0px 0px 0 0px;">
                <?php 
                $chi = $_POST['chinese']; 
                if(strcmp($chi, "未報考") )
                    echo "<div align='center'>你的國文成績是<b>$chi</b>級分","<br>";
                else{
                    $chi = 0;
                }
                $eng = $_POST['english']; 
                if(strcmp($eng, "未報考") )
                    echo "<div align='center'>你的英文成績是<b>$eng</b>級分","<br>";
                else{
                    $eng = 0;
                }
                $matA= $_POST['mathA']; 
                if(strcmp($matA, "未報考") )
                    echo "<div align='center'>你的數學A成績是<b>$matA</b>級分","<br>";
                else{
                    $matA = 0;
                }
                $matB= $_POST['mathB']; 
                if(strcmp($matB, "未報考") )
                    echo "<div align='center'>你的數學B成績是<b>$matB</b>級分","<br>";
                else{
                    $matB = 0;
                }
                $soc = $_POST['social']; 
                if(strcmp($soc, "未報考") )
                    echo "<div align='center'>你的社會成績是<b>$soc</b>級分","<br>";
                else{
                    $soc = 0;
                }
                $sci = $_POST['science']; 
                if(strcmp($sci, "未報考") )
                    echo "<div align='center'>你的自然成績是<b>$sci</b>級分","<br>";
                else{
                    $sci = 0;
                }
                $listen = $_POST['listening'];
                if(strcmp($listen, "non"))
                {
                    if($listen == "A")
                        $listennum = 3;
                    else if($listen == "B")
                        $listennum = 2;
                    else if($listen == "C")
                        $listennum = 1;
                    else if($listen == "F")
                        $listennum = 0;
                echo "<div align='center'>你的聽力是<b>$listen</b>";
                }
                else{
                    $listennum = 0;
                }
                //
                if(isset( $_POST ["interest"]))
                {
                    $ins = $_POST ["interest"];
                    echo '<br>';  
                    $myallins = implode (", ", $ins);
                    echo "<div align='center'>你的興趣量表是 <b>$myallins</b>";
                }

                ?>
          
                <br><br>
            
                <?php 
                    $link = @mysqli_connect('localhost', 'root', 'Jeremy20020107!', '110gsat');
                    if(!$link){
                        echo "MySQL資料庫連線錯誤!";
                    }
                    else{
                    /* $sql = "UPDATE 大學入學門檻 U
                                SET U.Chinese = (Select Chinese FROM 110五標分數 S WHERE U.Chinese = S.五標),
                                U.English = (Select English FROM 110五標分數 S WHERE U.English = S.五標),
                                U.Math = (Select Math FROM 110五標分數 S WHERE U.Math = S.五標),
                                U.Social = (Select Social FROM 110五標分數 S WHERE U.Social = S.五標),
                                U.Science = (Select Science FROM 110五標分數 S WHERE U.Science = S.五標)"; 

                        if ($link->query($sql) === TRUE) {
                            if($link-> query("SELECT IFNULL(")
                        

                            } else {
                            echo "Error updating record: " . $link->error;
                            }*/
                        $sql = "SELECT * FROM 大學入學門檻 U WHERE $chi >= U.Chinese AND $eng >= U.English AND $matA >= U.Math AND $soc >= U.Social AND $sci >= U.Science AND $listennum >= U.Listening";
                        $result = mysqli_query($link, $sql);
                        echo "<div align='center'><table border = 1>";
                        echo "<tr><td align='center'>學校</td><td align='center'>科系</td></tr>";
                        while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                            echo "<tr><td align='center'>$row[1]</td>";
                            echo"<td align='center'>$row[2]</td></tr>";}
                        echo "</table>";
                    }
                ?>
            
        <!--
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
                </table> -->
                
                <h2>相關連結</h2>
                <a href='https://www.ceec.edu.tw/'>大考中心首頁</a>
        </div>
        </div>
    </div>
</body>