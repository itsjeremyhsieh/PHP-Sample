<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Mirai</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        select {
            border: 1px solid #c9c9c9;
            background-color: #fff;
            color: #666;
            height: 30px;
            line-height: 25px;
            padding: 4px 6px;
            font-size: 17px;
            border-radius: 6px;
            cursor: pointer;
            outline: none;
        }

        .col-xs-3-tag-title {

            top: 80px;
            left: 17.5%;
            position: relative;
            border-width: 3px;
            width: 15%;
            height: 50px;
            padding: 5px;
            text-align: center;
            background-color: rgba(188, 215, 245, 1);
            border-radius: 10px 10px 0 0px;
            font-size: 20px;
            font-weight: 500;
            color: white;
            font-family: KaiTi;
        }

        .col-xs-3-tag-title-1 {


            left: 17.5%;
            position: relative;
            border-width: 3px;
            width: 65%;
            height: 10px;
            padding: 5px;
            top: 80px;
            background-color: rgba(188, 215, 245, 1);
            border-radius: 0px 0px 0 0px;

        }

        .positiontext {
            padding-left: 50px;

            position: relative;

        }

        .goleft {
            margin: 0 auto;
            position: relative;
            padding: 5px;
            display: block;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .golefte {
            position: relative;
            top: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .positionselect {
            position: inline-block;
            padding-left: 35px;
            margin: 0 auto;
            top: 10px;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .positionselect1 {
            position: relative;
            padding-left: 20px;
            margin: 0 auto;
            top: 10px;

        }

        .block {
            position: relative;
            background-color: white;
            margin: 80px auto;
            width: 65%;
            box-shadow:
                rgba(0, 0, 0, 0.4) 3px 3px 20px 0px;
            border-color: #013e99;
            height: auto;
            font-weight: 500;
            font-family: KaiTi;

        }



        .habit {
            position: relative;
            margin: 0 auto;
            text-align: center;
            padding-left: 220px;
            top: 10px;

        }

        .buttunleft {
            position: block;
            margin: 0 auto;
            text-align: center;
            padding-left: 270px;
            top: 10px;
            justify-content: center;
            align-items: center;
        }

        .hr {
            position: relative;
            top: 5px;
            width: 80%;

            border-top: 1px solid rgb(126, 125, 231);
        }

        .dash {
            position: relative;
            top: 5px;
            width: 80%;
            border-top: 1px dashed rgb(126, 125, 231);
        }

        #div1 {
            display: inline-block;
            font-size: 17px;
            font-weight: 500;
            font-family: KaiTi;
            color: black;

        }

        #div2 {
            display: inline-block;
            font-weight: 500;
            font-family: KaiTi;
            color: black;
            border-color: #013e99;

        }

        #wrap {
            display: flex;
            justify-content: space-around;
            font-weight: 500;

            font-family: KaiTi;
            color: black;
            height: auto;
        }

        #back {
            background-image: url(images/banner1_img.png);
            background-repeat: no-repeat;

            background-position: center;
            background-size: cover;
        }

        .button-five {
            background-color: #50d8d7;
            border-radius: 20px;
        }
    </style>

<script>
    function fuzzy(){
        window.location.href = "fuzzysearch.php";
}
    </script>
</head>

<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <?php include "header.php" ?>

    <!-- section -->

    <section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full">
                        <h3>學測落點分析查詢</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end section -->

    <!-- section -->



    <div class="col-xs-3-tag-title">篩選條件</div>
    <div class="col-xs-3-tag-title-1"></div>
    <form action="showGSAT.php" method="post">
        <div class="block">
            <br>
            <div id="wrap">


                <div id="div1">國文</div>
                <div id="div1">英文</div>
                <div id="div1">數學A</div>
                <div id="div1">數學B</div>
                <div id="div1">社會</div>
                <div id="div1">自然</div>
            </div>
            <br>



            <div id="wrap">

                <div id="div2">
                    <select name="chinese">
                        <option>未報考</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                    </select>
                </div>

                <div id="div2">
                    <select name="english">
                        <option>未報考</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                    </select>
                </div>

                <div id="div2">
                    <select name="mathA">
                        <option>未報考</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                    </select>
                </div>

                <div id="div2">
                    <select name="mathB">
                        <option>未報考</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                    </select>
                </div>


                <div id="div2">
                    <select name="social">
                        <option>未報考</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                    </select>
                </div>


                <div id="div2">
                    <select name="science">
                        <option>未報考</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                    </select>
                </div>
            </div>

            <br>
            <hr class="hr">
            <br>


            <div id="wrap">
                <h3>英文聽力</h3>
            </div>
            <br>

            <div id="wrap">
                <div id="div2">
                    <input type="radio" name="listening" value="A"> A
                </div>
                <div id="div2">
                    <input type="radio" name="listening" value="B"> B
                </div>
                <div id="div2">
                    <input type="radio" name="listening" value="C"> C
                </div>
                <div id="div2">
                    <input type="radio" name="listening" value="F"> F
                </div>
                <div id="div2">
                    <input type="radio" name="listening" value="non" checked> 無
                </div>
            </div>


            <hr class="hr">
            <br>
            <div id="wrap">
                <h3>興趣量表結果</h3>
            </div>
            <br>
            <div id="wrap">
                <div id="div2"><label>實作型（R）</label></div>
                <div id="div2"><label>研究型（I）</label></div>
                <div id="div2"><label>藝術型（A）</label></div>
                <div id="div2"><label>社交型（S）</label></div>
                <div id="div2"><label>企業型（E）</label></div>
                <div id="div2"><label>常規型（C）</label></div>
            </div>
            <br>
            <div id="wrap">
                <div id="div2"><input type="text" name="interest[]" maxlength="4" size="6"></div>
                <div id="div2"><input type="text" name="interest[]" maxlength="4" size="6"></div>
                <div id="div2"><input type="text" name="interest[]" maxlength="4" size="6"></div>
                <div id="div2"><input type="text" name="interest[]" maxlength="4" size="6"></div>
                <div id="div2"><input type="text" name="interest[]" maxlength="4" size="6"></div>
                <div id="div2"><input type="text" name="interest[]" maxlength="4" size="6"></div>
            </div>

<!--
            <hr class="hr">
            <br>
            <div id="wrap">
                <h3>請勾選您的學群 </h3>
            </div>
            <br>
            <div id="wrap">
                <table>
                    <tr>
                        <td width="150">
                            <input onclick=groupid.check(this); type="checkbox" name="groupid_all" id="groupid_all" />
                            全選
            </div>
            </td>
            <td width="150"><input onclick=groupid.check(this); type="checkbox" name="groupid[]" value="01" id="groupid_01" />
                資訊學群</td>
            <td width="150"><input onclick=groupid.check(this); type="checkbox" name="groupid[]" value="02" id="groupid_02" />
                工程學群</td>
            <td width="150"><input onclick=groupid.check(this); type="checkbox" name="groupid[]" value="03" id="groupid_03" />
                數理化學群</td>
            <td width="150"><input onclick=groupid.check(this); type="checkbox" name="groupid[]" value="04" id="groupid_04" />
                醫藥衛生學群</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input onclick=groupid.check(this); type="checkbox" name="groupid[]" value="05" id="groupid_05" />
                    生命科學學群</td>
                <td><input onclick=groupid.check(this); type="checkbox" name="groupid[]" value="06" id="groupid_06" />
                    生物資源學群</td>
                <td><input onclick=groupid.check(this); type="checkbox" name="groupid[]" value="07" id="groupid_07" />
                    地球與環境學群</td>
                <td><input onclick=groupid.check(this); type="checkbox" name="groupid[]" value="08" id="groupid_08" />
                    建築與設計學群</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input onclick=groupid.check(this); type="checkbox" name="groupid[]" value="09" id="groupid_09" />
                    藝術學群</td>
                <td><input onclick=groupid.check(this); type="checkbox" name="groupid[]" value="10" id="groupid_10" />
                    社會與心理學群</td>
                <td><input onclick=groupid.check(this); type="checkbox" name="groupid[]" value="11" id="groupid_11" />
                    大眾傳播學群</td>
                <td><input onclick=groupid.check(this); type="checkbox" name="groupid[]" value="12" id="groupid_12" />
                    外語學群</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input onclick=groupid.check(this); type="checkbox" name="groupid[]" value="13" id="groupid_13" />
                    文史哲學群</td>
                <td><input onclick=groupid.check(this); type="checkbox" name="groupid[]" value="14" id="groupid_14" />
                    教育學群</td>
                <td><input onclick=groupid.check(this); type="checkbox" name="groupid[]" value="15" id="groupid_15" />
                    法政學群</td>
                <td><input onclick=groupid.check(this); type="checkbox" name="groupid[]" value="16" id="groupid_16" />
                    管理學群</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input onclick=groupid.check(this); type="checkbox" name="groupid[]" value="17" id="groupid_17" />
                    財經學群</td>
                <td><input onclick=groupid.check(this); type="checkbox" name="groupid[]" value="18" id="groupid_18" />
                    遊憩與運動學群</td>
                <td><input onclick=groupid.check(this); type="checkbox" name="groupid[]" value="19" id="groupid_19" />
                    其他學群</td>
                <td>&nbsp;</td>
            </tr>
            </table>
        </div>


        <hr class="hr">
        <br>
        <div id="wrap">
            <h3>請勾選學校 </h3>
        </div>
        <br>


        <div align="center" class="selectuniversitytitle">
            <table width="810">
                <tr>
                    <td width="123">
                        <div align="center">北。北。基</div>
                    </td>
                    <td width="98"><input onclick=area2_g.check(this); type="checkbox" name="area2_g_all" id="area2_g_all" />
                        公立全選</td>
                    <td width="182"><input onclick=area2_g.check(this); type="checkbox" name="area2_g[]" value="001" id="u_001" />
                        國立臺灣大學</td>
                    <td width="203"><input onclick=area2_g.check(this); type="checkbox" name="area2_g[]" value="002" id="u_002" />
                        國立臺灣師範大學</td>
                    <td width="183"><input onclick=area2_g.check(this); type="checkbox" name="area2_g[]" value="006" id="u_006" />
                        國立政治大學</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input onclick=area2_g.check(this); type="checkbox" name="area2_g[]" value="013" id="u_013" />
                        國立陽明交通大學</td>
                    <td><input onclick=area2_g.check(this); type="checkbox" name="area2_g[]" value="028" id="u_028" />
                        國立臺北藝術大學</td>
                    <td><input onclick=area2_g.check(this); type="checkbox" name="area2_g[]" value="032" id="u_032" />
                        國立臺北教育大學</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input onclick=area2_g.check(this); type="checkbox" name="area2_g[]" value="035" id="u_035" />
                        臺北市立大學</td>
                    <td><input onclick=area2_g.check(this); type="checkbox" name="area2_g[]" value="056" id="u_056" />
                        國立臺灣藝術大學</td>
                    <td><input onclick=area2_g.check(this); type="checkbox" name="area2_g[]" value="099" id="u_099" />
                        國立臺北大學</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input onclick=area2_g.check(this); type="checkbox" name="area2_g[]" value="021" id="u_021" />
                        國立臺灣海洋大學</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input onclick=area2_p.check(this); type="checkbox" name="area2_p_all" id="area2_p_all" />
                        私立全選</td>
                    <td><input onclick=area2_p.check(this); type="checkbox" name="area2_p[]" value="005" id="u_005" />
                        東吳大學</td>
                    <td><input onclick=area2_p.check(this); type="checkbox" name="area2_p[]" value="014" id="u_014" />
                        淡江大學</td>
                    <td><input onclick=area2_p.check(this); type="checkbox" name="area2_p[]" value="017" id="u_017" />
                        中國文化大學</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input onclick=area2_p.check(this); type="checkbox" name="area2_p[]" value="019" id="u_019" />
                        大同大學</td>
                    <td><input onclick=area2_p.check(this); type="checkbox" name="area2_p[]" value="020" id="u_020" />
                        輔仁大學</td>
                    <td><input onclick=area2_p.check(this); type="checkbox" name="area2_p[]" value="044" id="u_044" />
                        華梵大學</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input onclick=area2_p.check(this); type="checkbox" name="area2_p[]" value="046" id="u_046" />
                        銘傳大學</td>
                    <td><input onclick=area2_p.check(this); type="checkbox" name="area2_p[]" value="047" id="u_047" />
                        世新大學</td>
                    <td><input onclick=area2_p.check(this); type="checkbox" name="area2_p[]" value="050" id="u_050" />
                        實踐大學</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input onclick=area2_p.check(this); type="checkbox" name="area2_p[]" value="079" id="u_079" />
                        真理大學</td>
                    <td><input onclick=area2_p.check(this); type="checkbox" name="area2_p[]" value="109" id="u_109" />
                        臺北醫學大學</td>
                    <td><input onclick=area2_p.check(this); type="checkbox" name="area2_p[]" value="152" id="u_152" />
                        馬偕醫學院</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input onclick=area2_p.check(this); type="checkbox" name="area2_p[]" value="154" id="u_154" />
                        臺北基督學院</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <hr class="dash">
            <br>
            <table width="810">
                <tr>
                    <td width="123">
                        <div align="center">桃。竹。苗</div>
                    </td>
                    <td width="98"><input onclick=area3_g.check(this); type="checkbox" name="area3_g_all" id="area3_g_all" />
                        公立全選</td>
                    <td width="182"><input onclick=area3_g.check(this); type="checkbox" name="area3_g[]" value="011" id="u_011" />
                        國立清華大學</td>
                    <td width="201"><input onclick=area3_g.check(this); type="checkbox" name="area3_g[]" value="013" id="u_013" />
                        國立陽明交通大學</td>
                    <td width="183"><input onclick=area3_g.check(this); type="checkbox" name="area3_g[]" value="016" id="u_016" />
                        國立中央大學</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input onclick=area3_g.check(this); type="checkbox" name="area3_g[]" value="039" id="u_039" />
                        國立體育大學</td>
                    <td><input onclick=area3_g.check(this); type="checkbox" name="area3_g[]" value="151" id="u_151" />
                        國立聯合大學</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input onclick=area3_p.check(this); type="checkbox" name="area3_p_all" id="area3_p_all" />
                        私立全選</td>
                    <td><input onclick=area3_p.check(this); type="checkbox" name="area3_p[]" value="008" id="u_008" />
                        中原大學</td>
                    <td><input onclick=area3_p.check(this); type="checkbox" name="area3_p[]" value="030" id="u_030" />
                        長庚大學</td>
                    <td><input onclick=area3_p.check(this); type="checkbox" name="area3_p[]" value="040" id="u_040" />
                        元智大學</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input onclick=area3_p.check(this); type="checkbox" name="area3_p[]" value="043" id="u_043" />
                        中華大學</td>
                    <td><input onclick=area3_p.check(this); type="checkbox" name="area3_p[]" value="065" id="u_065" />
                        玄奘大學</td>
                    <td><input onclick=area3_p.check(this); type="checkbox" name="area3_p[]" value="110" id="u_110" />
                        開南大學</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input onclick=area3_p.check(this); type="checkbox" name="area3_p[]" value="046" id="u_046" />
                        銘傳大學(桃園校區)</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <hr class="dash">
            <br>
            <table width="810">
                <tr>
                    <td width="123">
                        <div align="center">中。彰。投</div>
                    </td>
                    <td width="98"><input onclick=area4_g.check(this); type="checkbox" name="area4_g_all" id="area4_g_all" />
                        公立全選</td>
                    <td width="182"><input onclick=area4_g.check(this); type="checkbox" name="area4_g[]" value="003" id="u_003" />
                        國立中興大學</td>
                    <td width="203"><input onclick=area4_g.check(this); type="checkbox" name="area4_g[]" value="023" id="u_023" />
                        國立彰化師範大學</td>
                    <td width="183"><input onclick=area4_g.check(this); type="checkbox" name="area4_g[]" value="031" id="u_031" />
                        國立臺中教育大學</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input onclick=area4_g.check(this); type="checkbox" name="area4_g[]" value="058" id="u_058" />
                        國立暨南國際大學</td>
                    <td><input onclick=area4_g.check(this); type="checkbox" name="area4_g[]" value="060" id="u_060" />
                        國立臺灣體育運動大學</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input onclick=area4_p.check(this); type="checkbox" name="area4_p_all" id="area4_p_all" />
                        私立全選</td>
                    <td><input onclick=area4_p.check(this); type="checkbox" name="area4_p[]" value="009" id="u_009" />
                        東海大學</td>
                    <td><input onclick=area4_p.check(this); type="checkbox" name="area4_p[]" value="015" id="u_015" />
                        逢甲大學</td>
                    <td><input onclick=area4_p.check(this); type="checkbox" name="area4_p[]" value="018" id="u_018" />
                        靜宜大學</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input onclick=area4_p.check(this); type="checkbox" name="area4_p[]" value="012" id="u_012" />
                        中國醫藥大學</td>
                    <td><input onclick=area4_p.check(this); type="checkbox" name="area4_p[]" value="026" id="u_026" />
                        中山醫學大學</td>
                    <td><input onclick=area4_p.check(this); type="checkbox" name="area4_p[]" value="042" id="u_042" />
                        大葉大學</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input onclick=area4_p.check(this); type="checkbox" name="area4_p[]" value="134" id="u_134" />
                        亞洲大學</td>
                    <td><input onclick=area4_p.check(this); type="checkbox" name="area4_p[]" value="133" id="u_133" />
                        明道大學</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <hr class="dash">
            <br>
            <table width="810">
                <tr>
                    <td width="123">
                        <div align="center">雲。嘉。南</div>
                    </td>
                    <td width="98"><input onclick=area5_g.check(this); type="checkbox" name="area5_g_all" id="area5_g_all" />
                        公立全選</td>
                    <td width="182"><input onclick=area5_g.check(this); type="checkbox" name="area5_g[]" value="004" id="u_004" />
                        國立成功大學</td>
                    <td width="203"><input onclick=area5_g.check(this); type="checkbox" name="area5_g[]" value="041" id="u_041" />
                        國立中正大學</td>
                    <td width="183"><input onclick=area5_g.check(this); type="checkbox" name="area5_g[]" value="033" id="u_033" />
                        國立臺南大學</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input onclick=area5_g.check(this); type="checkbox" name="area5_g[]" value="100" id="u_100" />
                        國立嘉義大學</td>
                    <td><input onclick=area5_g.check(this); type="checkbox" name="area5_g[]" value="063" id="u_063" />
                        國立臺南藝術大學</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input onclick=area5_p.check(this); type="checkbox" name="area5_p_all" id="area5_p_all" />
                        私立全選</td>
                    <td><input onclick=area5_p.check(this); type="checkbox" name="area5_p[]" value="051" id="u_051" />
                        長榮大學</td>
                    <td><input onclick=area5_p.check(this); type="checkbox" name="area5_p[]" value="059" id="u_059" />
                        南華大學</td>
                    <td><input onclick=area5_p.check(this); type="checkbox" name="area5_p[]" value="111" id="u_111" />
                        台灣首府大學</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input onclick=area5_p.check(this); type="checkbox" name="area5_p[]" value="112" id="u_112" />
                        康寧大學</td>
                    <td><input onclick=area5_p.check(this); type="checkbox" name="area5_p[]" value="113" id="u_113" />
                        中信金融管理學院</td>
                </tr>
            </table>
            <hr class="dash">
            <br>

            <table width="810">
                <tr>
                    <td width="123">
                        <div align="center">高。屏。金門</div>
                    </td>
                    <td width="98"><input onclick=area6_g.check(this); type="checkbox" name="area6_g_all" id="area6_g_all" />
                        公立全選</td>
                    <td width="182"><input onclick=area6_g.check(this); type="checkbox" name="area6_g[]" value="027" id="u_027" />
                        國立中山大學</td>
                    <td width="203"><input onclick=area6_g.check(this); type="checkbox" name="area6_g[]" value="022" id="u_022" />
                        國立高雄師範大學</td>
                    <td width="183"><input onclick=area6_g.check(this); type="checkbox" name="area6_g[]" value="036" id="u_036" />
                        國立屏東大學</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input onclick=area6_g.check(this); type="checkbox" name="area6_g[]" value="101" id="u_101" />
                        國立高雄大學</td>
                    <td><input onclick=area6_g.check(this); type="checkbox" name="area6_g[]" value="153" id="u_153" />
                        國立金門大學</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input onclick=area6_p.check(this); type="checkbox" name="area6_p_all" id="area6_p_all" />
                        私立全選</td>
                    <td><input onclick=area6_p.check(this); type="checkbox" name="area6_p[]" value="007" id="u_007" />
                        高雄醫學大學</td>
                    <td><input onclick=area6_p.check(this); type="checkbox" name="area6_p[]" value="045" id="u_045" />
                        義守大學</td>
                    <td><input onclick=area6_p.check(this); type="checkbox" name="area6_p[]" value="050" id="u_050" />
                        實踐大學(高雄校區)</td>
                </tr>
            </table>
            <hr class="dash">
            <br>

            <table width="810">
                <tr>
                    <td width="123">
                        <div align="center">宜。花。東</div>
                    </td>
                    <td width="98"><input onclick=area1_g.check(this); type="checkbox" name="area1_g_all" id="area1_g_all" />
                        公立全選</td>
                    <td width="182"><input onclick=area1_g.check(this); type="checkbox" name="area1_g[]" value="150" id="u_150" />
                        國立宜蘭大學</td>
                    <td width="201"><input onclick=area1_g.check(this); type="checkbox" name="area1_g[]" value="034" id="u_034" />
                        國立東華大學</td>
                    <td width="183"><input onclick=area1_g.check(this); type="checkbox" name="area1_g[]" value="038" id="u_038" />
                        國立臺東大學</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input onclick=area1_p.check(this); type="checkbox" name="area1_p_all" id="area1_p_all" />
                        私立全選</td>
                    <td><input onclick=area1_p.check(this); type="checkbox" name="area1_p[]" value="130" id="u_130" />
                        佛光大學</td>
                    <td><input onclick=area1_p.check(this); type="checkbox" name="area1_p[]" value="108" id="u_108" />
                        慈濟大學</td>
                    <td>&nbsp;</td>
                </tr>
            </table>


        </div>

-->
        <br>
        <div id="wrap" style= " margin-left: auto;
  margin-right: auto;"> <input type="button" value="自訂模糊搜尋" style="width:150px;height:50px;border:0;background-color:#498efc;color:#fff;border-radius:10px; text-align: center;" onclick="fuzzy()"></div>

        <br>
        </div>
    </form>




    <?php include "footer.php" ?>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        /* counter js */

        (function($) {
            $.fn.countTo = function(options) {
                options = options || {};

                return $(this).each(function() {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
                    }, options);

                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof(settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof(settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0, // the number the element should start at
                to: 0, // the number the element should end at
                speed: 1000, // how long it should take to count between the target numbers
                refreshInterval: 100, // how often the element should be updated
                decimals: 0, // the number of decimal places to show
                formatter: formatter, // handler for formatting the value before rendering
                onUpdate: null, // callback method for every time the element is updated
                onComplete: null // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function($) {
            // custom formatting example
            $('.count-number').data('countToOptions', {
                formatter: function(value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });
    </script>
</body>

</html>