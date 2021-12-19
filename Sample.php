<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
       <title>HTML Website Sample</title>

    </head>
    <body>
       
    <center><h1>110年大學交叉查榜</h1></center>
        <h2>交叉查榜查詢</h2>
        <p>請輸入您的個人資料</p>
        <form action="Sample.php" method="post">
            成績查詢方式:
            <input type="submit" name="學測" value="學測">
            <input type="submit" name="指考" value="指考">
        </form>

        <form actime="Sample.php" method="post">
          
            <p>請輸入五科級分:
            國文 <input type="text" name="Chinese" value="">  
            英文 <input type="text" name="English" value="">  
            數學 <input type="text" name="Math" value="">  
            社會 <input type="text" name="Social" value="">  
            自然 <input type="text" name="Science" value="">
            <input type="submit" name="submit" value="提交">
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
        <hr>
        <h2>相關連結</h2>
        <a href='https://www.ceec.edu.tw/'>大考中心首頁</a>

    </body>
</html>

