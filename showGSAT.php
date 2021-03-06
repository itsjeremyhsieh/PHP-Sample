<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>分析結果</title>

    <style>
        html {
            height: 100%;
        }

        body {
            background-color: rgba(230, 230, 250, 1);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            background-blend-mode: multiply;
        }

        .container {
            display: flex;
            /* 水平置中 */
            justify-content: center;
            /* 垂直置中 */
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div style="top:10px; position:absolute;border-width: 300px; width:300px; height:50px; text-align:center; line-height:50px; background-color: rgba(247, 231, 179, 0.9); border-radius: 20px 20px 20px 20px;">
            <span style="color: rgb(133, 93, 7);font-size:30px">
                <font face=" sans-serif ">110年大學落點分析</font>
            </span>
        </div>

        <div style="top:120px; position:absolute; border-width: 3px ; width: 220px; height: 30px ; padding: 5px; text-align: center; background-color: rgba(29, 122, 228, 0.7); border-radius: 10px 10px 0 0px;">
            <span style="color: rgb(255, 255, 255);">落點分析結果（學測）</span>
        </div>
        <div style="top:160px; position:absolute;border-width: 100px ; width: 1200px; height: 3px; padding: 5px; text-align: center; background-color: rgba(142, 179, 221, 0.7); border-radius: 0 10px 0px 0;">
        </div>
        <div style="top:173px; position:absolute; border-width: 3px ; width: 1200px; height: 2000px; text-align: center; padding: 5px; background-color: rgba(222, 240, 173, 0.7); border-radius: 0px 0px 0 0px;">
        </div>

        <div style="top:180px; position:absolute; border-width: 3px ; width: 1150px; height: auto; text-align: top; padding: 5px; background-color: rgba(255, 255, 255, 0.4); border-radius: 0px 0px 0 0px;">
            <table style="width:1100px;line-height:3px;border:2px #D4D4D4 solid;" align=center cellpadding="10" border=1>
                <tr>
                    <td colspan=64 bgcolor="#19CAAD" style="width: 50%; border:1px #D4D4D4 solid;" align=center cellpadding="8" border="1"><b>我的成績</b></td>
                </tr>

                <tr>
                    <td colspan=4 bgcolor=#8CC7B5 style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>科目</td>
                    <td colspan=4 bgcolor=#8CC7B5 style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>國文</td>
                    <td colspan=4 bgcolor=#8CC7B5 style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>英文</td>
                    <td colspan=4 bgcolor=#8CC7B5 style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>數學A</td>
                    <td colspan=4 bgcolor=#8CC7B5 style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>數學B</td>
                    <td colspan=4 bgcolor=#8CC7B5 style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>社會</td>
                    <td colspan=4 bgcolor=#8CC7B5 style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>自然</td>
                    <td colspan=4 bgcolor=#8CC7B5 style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>聽力</td>
                </tr>

                <?php


                echo  "<tr><td colspan=4 align='center' bgcolor= #A0EEE1 style= 'border:1px #D4D4D4 solid'; align=center cellpadding=10 border=1>級分</td>";
                $chi = $_POST['chinese'];
                if (strcmp($chi, "未報考"))
                    echo "<td colspan=4 align='center' bgcolor= #A0EEE1 style= 'border:1px #D4D4D4 solid'; align=center cellpadding=10 border=1>$chi</td>";
                else {
                    $chi = 0;
                    echo "<td colspan=4 align='center' bgcolor= #A0EEE1 style= 'border:1px #D4D4D4 solid'; align=center cellpadding=10 border=1>未報考</td>";
                }
                $eng = $_POST['english'];
                if (strcmp($eng, "未報考"))
                    echo "<td colspan=4 align='center' bgcolor= #A0EEE1 style= 'border:1px #D4D4D4 solid'; align=center cellpadding=10 border=1>$eng</td>";
                else {
                    $eng = 0;
                    echo "<td colspan=4 align='center' bgcolor= #A0EEE1 style= 'border:1px #D4D4D4 solid'; align=center cellpadding=10 border=1>未報考</td>";
                }
                $matA = $_POST['mathA'];
                if (strcmp($matA, "未報考"))
                    echo "<td colspan=4 align='center' bgcolor= #A0EEE1 style= 'border:1px #D4D4D4 solid'; align=center cellpadding=10 border=1>$matA</td>";
                else {
                    $matA = 0;
                    echo "<td colspan=4 align='center' bgcolor= #A0EEE1 style= 'border:1px #D4D4D4 solid'; align=center cellpadding=10 border=1>未報考</td>";
                }
                $matB = $_POST['mathB'];
                if (strcmp($matB, "未報考"))
                    echo "<td colspan=4 align='center' bgcolor= #A0EEE1 style= 'border:1px #D4D4D4 solid'; align=center cellpadding=10 border=1>$matB</td>";
                else {
                    $matB = 0;
                    echo "<td colspan=4 align='center' bgcolor= #A0EEE1 style= 'border:1px #D4D4D4 solid'; align=center cellpadding=10 border=1>未報考</td>";
                }
                $soc = $_POST['social'];
                if (strcmp($soc, "未報考"))
                    echo "<td colspan=4 align='center' bgcolor= #A0EEE1 style= 'border:1px #D4D4D4 solid'; align=center cellpadding=10 border=1>$soc</td>";
                else {
                    $soc = 0;
                    echo "<td colspan=4 align='center' bgcolor= #A0EEE1 style= 'border:1px #D4D4D4 solid'; align=center cellpadding=10 border=1>未報考</td>";
                }
                $sci = $_POST['science'];
                if (strcmp($sci, "未報考"))
                    echo "<td colspan=4 align='center' bgcolor=#A0EEE1 style= 'border:1px #D4D4D4 solid'; align=center cellpadding=10 border=1>$sci</td>";
                else {
                    $sci = 0;
                    echo "<td colspan=4 align='center' bgcolor=#A0EEE1 style= 'border:1px #D4D4D4 solid'; align=center cellpadding=10 border=1>未報考</td>";
                }
                $listen = $_POST['listening'];
                if (strcmp($listen, "non")) {
                    if ($listen == "A")
                        $listennum = 3;
                    else if ($listen == "B")
                        $listennum = 2;
                    else if ($listen == "C")
                        $listennum = 1;
                    else if ($listen == "F")
                        $listennum = 0;
                    echo "<td colspan=4 align='center' bgcolor= #A0EEE1 style= 'border:1px #D4D4D4 solid'; align=center cellpadding=10 border=1>$listen</td>";
                } else {
                    $listennum = 0;
                    echo "<td colspan=4 align='center' bgcolor= #A0EEE1 style= 'border:1px #D4D4D4 solid'; align=center cellpadding=10 border=1>未報考</td>";
                }
                echo "</tr>";
                echo "<tr><td  colspan=4 align='center' bgcolor=#BEE7E9 style= 'border:1px #D4D4D4 solid'; align=center cellpadding=10 border=1>換算去年級分</td></tr>";


                //
                echo "<td  colspan=4 align='center' bgcolor=#BEEDC7 style= 'border:1px #D4D4D4 solid'; align=center cellpadding=10 border=1>你的興趣量表</td>";
                if (isset($_POST["interest"])) {
                    $ins = $_POST["interest"];
                    echo '<br>';
                    $myallins = implode(", ", $ins);
                    echo "<td colspan=28 align='center' bgcolor=#BEEDC7	 style= 'border:1px #D4D4D4 solid'; align=center cellpadding=10 border=1>$myallins</td>";
                }

                ?>
            </table>
            <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
            <br><br>

            <?php
            $link = @mysqli_connect('localhost', 'root', 'Jeremy20020107!', '110gsat');
            if (!$link) {
                echo "MySQL資料庫連線錯誤!";
            } else {

                $sql = "SELECT * FROM 大學入學門檻 U WHERE $chi >= U.Chinese AND $eng >= U.English AND $matA >= U.Math AND $soc >= U.Social AND $sci >= U.Science AND $listennum >= U.Listening";
                $result = mysqli_query($link, $sql);
                echo "<div align='center'><table border = 1>";
                echo "<tr><td align='center'>學校</td><td align='center'>科系</td></tr>";
                while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                    echo "<tr><td align='center'>$row[1]</td>";
                    echo "<td align='center'>$row[2]</td></tr>";
                }
                echo "</table>";
            }
            ?>

            <table style="font-size: 15px;width: 1100px;;line-height:2px;border:2px #D4D4D4 solid;" align=center cellpadding="10" border=1>
                <tr>
                    <td bgcolor=#85B8CB style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>代碼</td>
                    <td bgcolor=#85B8CB style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>校名</td>
                    <td bgcolor=#85B8CB style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>系名</td>
                    <td bgcolor=#85B8CB style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>篩選倍率</td>
                    <td bgcolor=#85B8CB style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>110年最低標準</td>
                    <td bgcolor=#85B8CB style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>興趣量表</td>
                    <td bgcolor=#85B8CB style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>簡章</td>
                    <td bgcolor=#85B8CB style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>分析更多</td>
                    <td bgcolor=#85B8CB style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>通過率</td>
                </tr>
                <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


                <tr>
                    <td bgcolor=#D1DDDB style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>001242</td>
                    <td bgcolor=#D1DDDB style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>國立臺灣大學</td>
                    <td bgcolor=#D1DDDB style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>醫學系</td>
                    <td bgcolor=#D1DDDB style="line-height:50px;border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>順序1:國(4)<br>順序2:國+英+數A+自(3)<br>順序3:英+數A+自(2)</td>
                    <td bgcolor=#D1DDDB style="line-height:50px;border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>順序一：國文(13)<br>
                        順序二：國文+英文+數學A+自然(59)<br>
                        順序三：英文+數學A+自然(45)</td>
                    <td bgcolor=#D1DDDB style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>I</td>
                    <td bgcolor=#D1DDDB style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>簡章</td>
                    <td bgcolor=#D1DDDB style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>按鈕</td>
                    <td bgcolor=#D1DDDB style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>⭐⭐⭐⭐⭐</td>
                </tr>
            </table>




            <br>
            <br>

            <!---按按鈕出現的畫面------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

            <table style="text-align:center;font-size: 12px;width: 1100px;border:2px #D4D4D4 solid;" align=center cellpadding="8" border=1>




                <tr>
                    <th colspan="19" bgcolor=#2e2e25>
                        <font color="d4d4d9">111第一次篩選
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td bgcolor=#2e2e25 colspan="3">
                            <font color="d4d4d9">國文
                        </td>
                        <td bgcolor=#2e2e25 colspan="3">
                            <font color="d4d4d9">英文
                        </td>
                        <td bgcolor=#2e2e25 colspan="3">
                            <font color="d4d4d9">數學A
                        </td>
                        <td bgcolor=#2e2e25 colspan="3">
                            <font color="d4d4d9">數學B
                        </td>
                        <td bgcolor=#2e2e25 colspan="3">
                            <font color="d4d4d9">自然
                        </td>
                        <td bgcolor=#2e2e25 colspan="3">
                            <font color="d4d4d9">社會
                        </td>
                        <td bgcolor=#2e2e25 colspan="1">
                            <font color="d4d4d9">英聽
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor=#d4d4d9 colspan="3">頂標</td>
                        <td bgcolor=#d4d4d9 colspan="3">頂標</td>
                        <td bgcolor=#d4d4d9 colspan="3">頂標</td>
                        <td bgcolor=#d4d4d9 colspan="3">頂標</td>
                        <td bgcolor=#d4d4d9 colspan="3">頂標</td>
                        <td bgcolor=#d4d4d9 colspan="3">頂標</td>
                        <td bgcolor=#d4d4d9 colspan="1"></td>
                    </tr>
                    <tr>
                        <td rowspan="2" bgcolor=#2e2e25 colspan="2">
                            <font color="d4d4d9">校<br>系<br>代<br>碼
                        </td>
                        <td bgcolor=#2e2e25 rowspan="2">
                            <font color="d4d4d9">校<br>系<br>名<br>稱
                        <td bgcolor=#2e2e25 rowspan="4">
                            <font color="d4d4d9">名<br>額
                        </td>
                        <td bgcolor=#2e2e25 colspan="15">
                            <font color="d4d4d9">倍率篩選
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor=#2e2e25 colspan="3">
                            <font color="d4d4d9">順序1
                        </td>
                        <td bgcolor=#2e2e25 colspan="3">
                            <font color="d4d4d9">順序2
                        </td>
                        <td bgcolor=#2e2e25 colspan="3">
                            <font color="d4d4d9">順序3
                        </td>
                        <td bgcolor=#2e2e25 colspan="3">
                            <font color="d4d4d9">順序4
                        </td>
                        <td bgcolor=#2e2e25 colspan="3">
                            <font color="d4d4d9">順序5
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor=#d4d4d9 rowspan="2" colspan="2">160222</td>
                        <td bgcolor=#d4d4d9 rowspan="2">台灣大學<br>醫學系</td>
                        <td bgcolor=#2e2e25 rowspan="2">
                            <font color="d4d4d9">科目
                        </td>
                        <td bgcolor=#2e2e25 rowspan="2">
                            <font color="d4d4d9">倍率
                        </td>
                        <td bgcolor=#2e2e25 rowspan="2">
                            <font color="d4d4d9">通過級分
                        </td>
                        <td bgcolor=#2e2e25 rowspan="2">
                            <font color="d4d4d9">科目
                        </td>
                        <td bgcolor=#2e2e25 rowspan="2">
                            <font color="d4d4d9">倍率
                        </td>
                        <td bgcolor=#2e2e25 rowspan="2">
                            <font color="d4d4d9">通過級分
                        </td>
                        <td bgcolor=#2e2e25 rowspan="2">
                            <font color="d4d4d9">科目
                        </td>
                        <td bgcolor=#2e2e25 rowspan="2">
                            <font color="d4d4d9">倍率
                        </td>
                        <td bgcolor=#2e2e25 rowspan="2">
                            <font color="d4d4d9">通過級分
                        </td>
                        <td bgcolor=#2e2e25 rowspan="2">
                            <font color="d4d4d9">科目
                        </td>
                        <td bgcolor=#2e2e25 rowspan="2">
                            <font color="d4d4d9">倍率
                        </td>
                        <td bgcolor=#2e2e25 rowspan="2">
                            <font color="d4d4d9">通過級分
                        </td>
                        <td bgcolor=#2e2e25 rowspan="2">
                            <font color="d4d4d9">科目
                        </td>
                        <td bgcolor=#2e2e25 rowspan="2">
                            <font color="d4d4d9">倍率
                        </td>
                        <td bgcolor=#2e2e25 rowspan="2">
                            <font color="d4d4d9">通過級分
                        </td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td bgcolor=#2e2e25 colspan="3">
                            <font color="d4d4d9">111學年度
                        </td>
                        <td bgcolor=#d4d4d9>50</td>
                        <td bgcolor=#d4d4d9>國</td>
                        <td bgcolor=#d4d4d9>4</td>
                        <td bgcolor=#d4d4d9>13</td>
                        <td bgcolor=#d4d4d9>國+英+數+自</td>
                        <td bgcolor=#d4d4d9>3</td>
                        <td bgcolor=#d4d4d9>59</td>
                        <td bgcolor=#d4d4d9>英+數+自</td>
                        <td bgcolor=#d4d4d9>2</td>
                        <td bgcolor=#d4d4d9>45</td>
                        <td bgcolor=#d4d4d9></td>
                        <td bgcolor=#d4d4d9></td>
                        <td bgcolor=#d4d4d9></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td bgcolor=#2e2e25 colspan="3">
                            <font color="d4d4d9">110學年度
                        </td>
                        <td bgcolor=#d4d4d9>50</td>
                        <td bgcolor=#d4d4d9>國</td>
                        <td bgcolor=#d4d4d9>4</td>
                        <td bgcolor=#d4d4d9>13</td>
                        <td bgcolor=#d4d4d9>國+英+數+自</td>
                        <td bgcolor=#d4d4d9>3</td>
                        <td bgcolor=#d4d4d9>59</td>
                        <td bgcolor=#d4d4d9>英+數+自</td>
                        <td bgcolor=#d4d4d9>2</td>
                        <td bgcolor=#d4d4d9>45</td>
                        <td bgcolor=#d4d4d9></td>
                        <td bgcolor=#d4d4d9></td>
                        <td bgcolor=#d4d4d9></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td bgcolor=#2e2e25 colspan="3">
                            <font color="d4d4d9">109學年度
                        </td>
                        <td bgcolor=#d4d4d9>50</td>
                        <td bgcolor=#d4d4d9>國</td>
                        <td bgcolor=#d4d4d9>4</td>
                        <td bgcolor=#d4d4d9>13</td>
                        <td bgcolor=#d4d4d9>國+英+數+自</td>
                        <td bgcolor=#d4d4d9>3</td>
                        <td bgcolor=#d4d4d9>59</td>
                        <td bgcolor=#d4d4d9>英+數+自</td>
                        <td bgcolor=#d4d4d9>2</td>
                        <td bgcolor=#d4d4d9>45</td>
                        <td bgcolor=#d4d4d9></td>
                        <td bgcolor=#d4d4d9></td>
                        <td bgcolor=#d4d4d9></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td bgcolor=#2e2e25 colspan="3">
                            <font color="d4d4d9">超額篩選
                        </td>
                        <td bgcolor=#d4d4d9 colspan="4">國英數自</td>
                        <td bgcolor=#d4d4d9 colspan="3">數</td>
                        <td bgcolor=#d4d4d9 colspan="3">自</td>
                        <td colspan="3"></td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td bgcolor=#2e2e25 colspan="3">
                            <font color="d4d4d9">甄試日期
                        </td>
                        <td colspan="3">111.5.21 111.5.27 111.5.28</td>
                        <td bgcolor=#2e2e25>
                            <font color="d4d4d9">繳交資料截止收件
                        </td>
                        <td colspan="4">111.5.10</td>
                        <td colspan="8">簡章</td>
                    </tr>

            </table>















            <h2>相關連結</h2>
            <a href='https://www.ceec.edu.tw/'>大考中心首頁</a>
        </div>
    </div>
    </div>
</body>