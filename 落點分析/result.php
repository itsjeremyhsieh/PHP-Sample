<?php
session_start();
?>

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
		.wrapper {
			position: relative;
			width: 80%;
			height: fit-content;
		}

		label {
			display: inline-block;
			padding: 5px 10px;
			background-color: #61A3CF;
			border-top-left-radius: 8px;
			border-top-right-radius: 8px;
			width: 20%;
			color: beige;
		}

		label:hover {
			cursor: pointer;
		}

		

		input[type="radio"] {
			display: none;
		}

		input[type="radio"]:checked+label {
			background-color: #A5CCE6;
			color: white;
		}

		input[type="radio"]:checked+label+div {
			display: block;
		}

		.content {
			position: relative;
			width: auto;
			
			height: fit-content;
			background-color: white;
		}

		.content div {
			display: none;
		}

		#navi1:checked~.content>#content1,
		#navi2:checked~.content>#content2,
		#navi3:checked~.content>#content3,
		#navi4:checked~.content>#content4 {
			display: block;
		}

		#wrap {
			display: flex;
			justify-content: space-around;
			font-weight: 500;
			font-size: 20px;
			font-family: KaiTi;
			color: black;
			height: auto;
			width: 100%;
		}

		button {
			border: none;
			background-color: transparent;
			outline: none;
			cursor: pointer;
		}

		button:focus {
			border: none;
		}
		
	</style>

	<script>
		function clicktoshow() {
			var x = document.getElementById('toShow');
			if (x.style.display === "none") {
				x.style.display = "block";
			} else {
				x.style.display = "none";
			}
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
						<h3>結果分析</h3>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- end section -->
	<br>

	<!-- section-->
	<div class="container">
		<table align="center" style="width: 100%;text-align: center;border-collapse:collapse;">
			<tr>
				<td colspan="6" align="center" bgcolor="#F1E1FF" style="border: 1px solid #E3E3E3;"><span style="font-size: 16px;font-weight: bold;">優勢科目組合排名</span></td>
			</tr>
			<tr>
				<td bgcolor="#D2E9FF" style="border: 1px  solid #E3E3E3;">排名</td>
				<td style="color: #ff46a3;border: 1px solid #E3E3E3;">1</td>
				<td style="color: #ff46a3;border: 1px solid #E3E3E3;">2</td>
				<td style="color: #ff46a3;border: 1px  solid #E3E3E3;">3</td>
				<td style="color: #ff46a3;border: 1px solid #E3E3E3;">4</td>
				<td style="color: #ff46a3;border: 1px  solid #E3E3E3;">5</td>

				<!--td bgcolor="#F4FF83" style="border: 1px solid #E3E3E3;">全國累積人數百分比</td-->
			</tr>
			<tr>
				<td bgcolor="#ECF5FF" style="border: 1px solid #E3E3E3;">科目組合</td>
				<td style="border: 1px solid #E3E3E3;">英文、數學A、自然</td>
				<td style="border: 1px solid #E3E3E3;">英文、數學B、自然</td>
				<td style="border: 1px solid #E3E3E3;">英文、社會、自然</td>
				<td style="border: 1px solid #E3E3E3;">英文、數學B、社會</td>
				<td style="border: 1px solid #E3E3E3;">英文、數學A、社會</td>
			</tr>
		</table>
	</div>


	<br>




	<div class="container">
		<table align="center" style="width: 100%;text-align: center;border-collapse:collapse;">
		<tr>
				<td colspan="7" align="center" bgcolor="#FFFFDF" style="border: 1px solid #E3E3E3;"><span style="font-size: 16px;font-weight: bold;">我的成績</span></td>
			</tr>
			<tr>
                <td bgcolor="#D2E9FF" style="border: 1px  solid #E3E3E3;">科目</td>
				<td style="color: #ff46a3;border: 1px solid #E3E3E3;">國文</td>
				<td style="color: #ff46a3;border: 1px solid #E3E3E3;">英文</td>
				<td style="color: #ff46a3;border: 1px  solid #E3E3E3;">數A</td>
				<td style="color: #ff46a3;border: 1px solid #E3E3E3;">數B</td>
				<td style="color: #ff46a3;border: 1px  solid #E3E3E3;">自然</td>
				<td style="color: #ff46a3;border: 1px  solid #E3E3E3;">社會</td>
				
				<!--td bgcolor="#F4FF83" style="border: 1px solid #E3E3E3;">全國累積人數百分比</td-->
			</tr>
			<tr>
				<td bgcolor="#ECF5FF" style="border: 1px solid #E3E3E3;">級分</td>
				<?php
				echo "<td style='border: 1px solid #E3E3E3;'>" . $_SESSION['chinese'] . "</td><td style='border: 1px solid #E3E3E3;'>". $_SESSION['english'] . 
				"</td><td style='border: 1px solid #E3E3E3;'>" . $_SESSION['matha'] . "</td><td style='border: 1px solid #E3E3E3;'>". $_SESSION['mathb'] . 
				"</td><td style='border: 1px solid #E3E3E3;'>" . $_SESSION['socialstu'] . "</td><td style='border: 1px solid #E3E3E3;'>". $_SESSION['sciencestu'] . 
                "</td>"
				?>
			</tr>
			
			<tr>
				<td colspan="7" align="center" bgcolor="#E7F6DA" style="border: 1px solid #E3E3E3;"><span style="font-size: 16px;font-weight: bold;">換算歷年級分</span></td>
			</tr>
			
			<tr>
				<td bgcolor="#E5FCF5" style="border: 1px solid #E3E3E3;">110年度</td>
				<?php
				echo "<td style='border: 1px solid #E3E3E3;'" . $_SESSION['ch_pre'][0] ."</td><td style='border: 1px solid #E3E3E3;'>" . $_SESSION['eng_pre'][0] ."</td><td style='border: 1px solid #E3E3E3;'>"
				. $_SESSION['matha_pre'][0] ."</td><td style='border: 1px solid #E3E3E3;'>" . $_SESSION['mathb_pre'][0] ."</td><td style='border: 1px solid #E3E3E3;'>" . $_SESSION['soc_pre'][0] ."</td><td style='border: 1px solid #E3E3E3;'>"
				. $_SESSION['sci_pre'][0] ."</td>"
				?>
			</tr>
			<tr>
				<td bgcolor="#E5FCF5" style="border: 1px solid #E3E3E3;">109年度</td>
				<?php
				echo "<td style='border: 1px solid #E3E3E3;'" . $_SESSION['ch_pre'][1] ."</td><td style='border: 1px solid #E3E3E3;'>" . $_SESSION['eng_pre'][1] ."</td><td style='border: 1px solid #E3E3E3;'>"
				. $_SESSION['matha_pre'][1] ."</td><td style='border: 1px solid #E3E3E3;'>" . $_SESSION['mathb_pre'][1] ."</td><td style='border: 1px solid #E3E3E3;'>" . $_SESSION['soc_pre'][1] ."</td><td style='border: 1px solid #E3E3E3;'>"
				. $_SESSION['sci_pre'][1] ."</td>"
				?>
				
			</tr>
			<tr>
				<td bgcolor="#E5FCF5" style="border: 1px solid #E3E3E3;">108年度</td>
				<?php
				echo "<td style='border: 1px solid #E3E3E3;'" . $_SESSION['ch_pre'][2] ."</td><td style='border: 1px solid #E3E3E3;'>" . $_SESSION['eng_pre'][2] ."</td><td style='border: 1px solid #E3E3E3;'>"
				. $_SESSION['matha_pre'][2] ."</td><td style='border: 1px solid #E3E3E3;'>" . $_SESSION['mathb_pre'][2] ."</td><td style='border: 1px solid #E3E3E3;'>" . $_SESSION['soc_pre'][2] ."</td><td style='border: 1px solid #E3E3E3;'>"
				. $_SESSION['sci_pre'][2] ."</td>"
				?>
			</tr>
		</table>


	</div>

	<br>

	<div class="container">
		<div class="wrap" style="text-align: center">
			<input type="radio" id="navi2" name="radio" />
			<label for="navi1">落點分析</label>
			<input type="radio" id="navi1" name="radio" checked />
			<label for="navi2">校系推薦</label>

			<div class="content">
				<div id="content1">


					<table style=" font-size: 13px;border:2px #D4D4D4 solid; margin-left: auto; margin-right: auto; width:auto">
						<tr>
							<td bgcolor=#DFFFDF style="font-weight:700; border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>我的最愛</td>
							<td bgcolor=#DFFFDF style="font-weight:700; border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>代碼</td>
							<td bgcolor=#DFFFDF style="font-weight:700; border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>校系名稱</td>
							<td bgcolor=#DFFFDF style="font-weight:700; border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>招生名額</td>
							<td bgcolor=#DFFFDF style="font-weight:700; border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>檢定標準</td>
							<td bgcolor=#DFFFDF style="font-weight:700; border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>篩選倍率</td>
							<td bgcolor=#DFFFDF style="font-weight:700; border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>110年最低標準</td>
							<td bgcolor=#DFFFDF style="font-weight:700; border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>備註說明</td>
							<td bgcolor=#DFFFDF style="font-weight:700; border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>學群分類</td>
							<td bgcolor=#DFFFDF style="font-weight:700; border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>興趣量表</td>
							<td bgcolor=#DFFFDF style="font-weight:700; border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>通過率</td>
							<td bgcolor=#DFFFDF style="font-weight:700; border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>甄試日期</td>
							<td bgcolor=#DFFFDF style="font-weight:700; border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>簡章</td>

							<td bgcolor=#DFFFDF style="font-weight:700; border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>分析更多</td>
							<td bgcolor=#DFFFDF style="font-weight:700; border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>校園介紹</td>

						</tr>
						<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


						<tr>
							<td bgcolor=#F0F8FF style="border:1px #D4D4D4 solid ;" align=center cellpadding="8" border=1><button class="button button-1" style="font-size: 20px;">🐰</button></td>
							<td bgcolor=#F0F8FF style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>001242</td>
							<td bgcolor=#F0F8FF style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>國立臺灣大學醫學系</td>
							<td bgcolor=#F0F8FF style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>50</td>
							<td bgcolor=#F0F8FF style="line-height:50px;border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>國文(頂)<br>英文(頂)<br>數A(頂)</td>
							<td bgcolor=#F0F8FF style="line-height:50px;border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>順序1:國(4)<br>順序2:國+英+數A+自(3)<br>順序3:英+數A+自(2)</td>
							<td bgcolor=#F0F8FF style="line-height:50px;border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>順序一：國文(13)<br>順序二：國文+英文+數學A+自然(59)<br>
								順序三：英文+數學A+自然(45)</td>
							<td bgcolor=#F0F8FF style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>採計標準改變</td>

							<td bgcolor=#F0F8FF style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>資訊學群</td>
							<td bgcolor=#F0F8FF style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>I</td>
							<td bgcolor=#F0F8FF style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>53%</td>
							<td bgcolor=#F0F8FF style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>4/7</td>
							<td bgcolor=#F0F8FF style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1>📃</td>
							<td bgcolor=#F0F8FF style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1><button onclick="clicktoshow()" style="font-size: 17.5px;">🌱</button></td>
							<td bgcolor=#F0F8FF style="border:1px #D4D4D4 solid;" align=center cellpadding="8" border=1><button style="font-size: 17.5px;">☁️</button></td>

						</tr>
					</table>
					



					<div id="toShow" style="display: none;">
						<br>

						<table bgcolor="#FCFCFD" style="text-align:center; font-size: 11px;width:auto;margin-left: auto; margin-right: auto;line-height:normal;border:2px #D4D4D4 solid;" align=center cellpadding="10" border=1>

							<thead>
								<tr>
									<th bgcolor="#F1EEFB" colspan="2" rowspan="2">校系名稱</th>
									<th bgcolor="#F1EEFB" colspan="2" rowspan="2">校系代碼</th>
									<th bgcolor="#F1EEFB" colspan="2" rowspan="4">招生名額</th>
									<th  bgcolor="#F1EEFB" colspan="24">通過倍率篩選最低級分</th>
								</tr>
								<tr>
									<th  bgcolor="#F1EEFB"colspan="4">篩選順序一</th>
									<th bgcolor="#F1EEFB"colspan="4">篩選順序二</th>
									<th bgcolor="#F1EEFB"colspan="4">篩選順序三</th>
									<th bgcolor="#F1EEFB"colspan="4">篩選順序四</th>
									
									
								</tr>
								<tr>
									<th bgcolor="#F1EEFB" colspan="2" rowspan="2">國立台灣大學<br>電機工程學系</th>
									<th bgcolor="#F1EEFB" colspan="2" rowspan="2">120458</th>
									<th bgcolor="#F1EEFB" rowspan="2">科目</th>
									<th bgcolor="#F1EEFB" rowspan="2">倍率</th>
									<th bgcolor="#F1EEFB" rowspan="2">通過級分</th>
									<th bgcolor="#F1EEFB" colspan="1" rowspan="2">換算該年級分</th>
									<th bgcolor="#F1EEFB" rowspan="2">科目</th>
									<th bgcolor="#F1EEFB" rowspan="2">倍率</th>
									<th bgcolor="#F1EEFB" rowspan="2">通過級分</th>
									<th bgcolor="#F1EEFB" colspan="1" rowspan="2">換算該年級分</th>
									<th bgcolor="#F1EEFB" rowspan="2">科目</th>
									<th bgcolor="#F1EEFB" rowspan="2">倍率</th>
									<th bgcolor="#F1EEFB" rowspan="2">通過級分</th>
									<th bgcolor="#F1EEFB" colspan="1" rowspan="2">換算該年級分</th>
									<th bgcolor="#F1EEFB" rowspan="2">科目</th>
									<th bgcolor="#F1EEFB" rowspan="2">倍率</th>
									<th bgcolor="#F1EEFB" rowspan="2">通過級分</th>
									<th bgcolor="#F1EEFB" colspan="1" rowspan="2">換算該年級分</th>
									
									
								</tr>
								<tr>
								</tr>
							</thead>
							<tbody>
								
								<tr>
									<td bgcolor="d7e4fe" colspan="4">110年度</td>
									<td colspan="2">18</td>
									<td>國</td>
									<td>4</td>
									<td>13</td>
									<td style="color:#ff46a3;" colspan="1">13</td>
									<td>(英+國+數+自)</td>
									<td>3</td>
									<td>59</td>
									<td style="color:#ff46a3;" colspan="1">59</td>
									<td>(英+數+自)</td>
									<td>2</td>
									<td >45</td>
									<td style="color:#ff46a3;" colspan="1">45</td>
									<td></td>
									<td></td>
									<td></td>
									<td colspan="1"></td>
									
									
								</tr>
								<tr>
									<td bgcolor="d7e4fe" colspan="4">109年度</td>
									<td colspan="2">20</td>
									<td>國</td>
									<td>4</td>
									<td>13</td>
									<td style="color:#ff46a3;">13</td>
									<td>(英+國+數+自)</td>
									<td>3</td>
									<td>59</td>
									<td style="color:#ff46a3;">59</td>
									<td>(英+數+自)</td>
									<td>2</td>
									<td>45</td>
									<td style="color:#ff46a3;">45</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									
									
									

								</tr>
								<tr>
									<td bgcolor="d7e4fe" colspan="4">108年度</td>
									<td colspan="2">21</td>
									<td>國</td>
									<td>4</td>
									<td>13</td>
									<td style="color:#ff46a3;" colspan="1">13</td>
									<td>(英+國+數+自)</td>
									<td>3</td>
									<td>59</td>
									<td style="color:#ff46a3;" colspan="1">59</td>
									<td>(英+數+自)</td>
									<td>2</td>
									<td>45</td>
									<td style="color:#ff46a3;" colspan="1">45</td>
									<td></td>
									<td></td>
									<td></td>
									<td style="color:#ff46a3;" colspan="1"></td>
									
									

								</tr>

							</tbody>
						</table>
					</div>
					<!---TO SHOW--->

					<br>



				</div>


				<div id="content2">
					<table align="center" style="width: 100%;text-align: center;border-collapse:collapse;">

						<tr>
							<td bgcolor="#F4FF83" style="border: 1px  solid #E3E3E3;">順序</td>
							<td style="color: #FF79BC;border: 1px solid #E3E3E3;">推薦學校</td>
							<td style="color: #FF79BC;border: 1px solid #E3E3E3;">推薦校系</td>
							<td style="color: #FF79BC;border: 1px  solid #E3E3E3;">適配度</td>


							<!--td bgcolor="#F4FF83" style="border: 1px solid #E3E3E3;">全國累積人數百分比</td-->
						</tr>
						<tr>
							<td bgcolor="#F9FFBF" style="border: 1px solid #E3E3E3;">1</td>
							<td style="border: 1px solid #E3E3E3;">國立台灣大學</td>
							<td style="border: 1px solid #E3E3E3;">電機工程學系</td>
							<td style="border: 1px solid #E3E3E3;">95%</td>

						</tr>
					</table>
				</div>
			</div>

		</div>

	</div>


	<br>


	<br>


	<!-- end section -->
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


		let btn = document.querySelector(".button-1");

btn.addEventListener("mouseover", function() {
 	this.textContent = "🦊";
})
btn.addEventListener("mouseout", function() {
 	this.textContent = "🐰";
})
	</script>
</body>

</html>