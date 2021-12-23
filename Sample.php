<!DOCTYPE html>
<html>
    <head>
       <meta charset = "utf-8">
       <title>HTML Website Sample</title>
    </head>
    <body>
       
    <center><h1>110年大學落點分析</h1></center>
        <h2>落點分析查詢</h2>
        <p>請輸入您的個人資料</p>
    
        <div style="float:left"> 
            以學測或指考搜尋？
        </div>
        <select>
            <option>學測</option>
            <option>指考</option>
        </select>


        <form actime="Sample.php" method="post">
          
            <p>請輸入五科級分:
            國文 <input type="text" size="5" name="Chinese" value="">  
            英文 <input type="text" size="5"name="English" value="">  
            數學 <input type="text" size="5"name="Math" value="">  
            社會 <input type="text" size="5"name="Social" value="">  
            自然 <input type="text" size="5"name="Science" value="">
            英文聽力(未報考者免填) <input type="text"size="5" name="Listening" value="">
            </p>
        </form>
        <form actime="Sample.php" method="post">
            <p>請勾選您的興趣量表結果:
            <input type="checkbox" name="interest[]" value="R"><label>實用型(R)</label>
            <input type="checkbox" name="interest[]" value="I"><label>研究型(I)</label>
            <input type="checkbox" name="interest[]" value="A"><label>藝術型(A)</label>
            <input type="checkbox" name="interest[]" value="S"><label>社會型(S)</label>
            <input type="checkbox" name="interest[]" value="E"><label>企業型(E)</label>
            <input type="checkbox" name="interest[]" value="C"><label>事務型(C)</label>
            </p>
        </form>
        <form actime="Sample.php" method="post">
            <input type="submit" name="submit" value="提交資料">
        </form>
        <hr>
        <h2>分析結果</h2>
        <p>
        您的落點分析結果如下表所示：
        <table  wide=”200” height=”800” border =”3”>
        <tr><td align="center"><b>順位</b></td>
            <td align="center"><b>校系名稱</b></td>   
            <td align="center"><b>通過機率</b></td></tr>
        <tr><td> 1 </td><td> 國立彰化師範大學資訊工程學系</td><td>☆☆☆☆☆</td></tr> 
        <tr><td> 2 </td><td> 國立台灣大學電機工程學系</td><td>☆</td></tr> 
        </p>
        </table>
        <hr>

        <h2>相關連結</h2>
        <a href='https://www.ceec.edu.tw/'>大考中心首頁</a>

    </body>
</html>

