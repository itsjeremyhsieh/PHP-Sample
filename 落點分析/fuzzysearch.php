<?php
session_start();
$recommend = $_SESSION['recommend'];
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
	<!--additional method - for checkbox .. ,require_from_group method ...-->
	<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
	<!--中文錯誤訊息-->
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js "></script>


	<style>
		.center {
			display: flex;
			justify-content: center;
		}
	</style>
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
						<h3>模糊查詢</h3>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- end section -->
	<br>

	<!-- section-->
	<form action="savetmp2.php" name="fuzzy" id="fuzzy" method="post">
		<div class="container">
			<table align="center" style="width: 100%;text-align: center;border-collapse:collapse;">
				<tr>
					<td colspan="6" align="center" bgcolor="#E5A8B8" style="border: 1px solid #E3E3E3; width : 30%"><span style="font-size: 18px;font-weight: bold;">校系排名 </span> </td>
					<td colspan="6" align="center" bgcolor="#E5A8B8" style="border: 1px solid #E3E3E3;"><span style="font-size: 18px;font-weight: bold;"> 重要程度 <select id="school_order" name="school_order">
								<option style="display:none" value="0">請選擇</option>
								<option value="1">最重要</option>
								<option value="0.92">非常重要</option>
								<option value="0.75">有點重要</option>
								<option value="0.5">普通重要</option>
								<option value="0.25">不太重要</option>
								<option value="0.08">非常不重要</option>
								<option value="0">完全不重要</option>
							</select></span></td>
				</tr>
			</table>
		</div>
		<br>
		<div class="container">
			<table align="center" style="width: 100%;text-align: center;border-collapse:collapse;">
				<tr>
					<td colspan="6" align="center" bgcolor="#E5A8B8" style="border: 1px solid #E3E3E3; width : 30%"><span style="font-size: 18px;font-weight: bold;">錄取機率 </span>
					<td colspan="6" align="center" bgcolor="#E5A8B8" style="border: 1px solid #E3E3E3;"><span style="font-size: 18px;font-weight: bold;"> 重要程度 <select id="percentage_order" name="percentage_order">
								<option style="display:none" value="0">請選擇</option>
								<option value="1">最重要</option>
								<option value="0.92">非常重要</option>
								<option value="0.75">有點重要</option>
								<option value="0.5">普通重要</option>
								<option value="0.25">不太重要</option>
								<option value="0.08">非常不重要</option>
								<option value="0">完全不重要</option>
							</select></span></td>
				</tr>
			</table>
		</div>
		<br>
		<div class="container">
			<table align="center" style="width: 100%;text-align: center;border-collapse:collapse;">
				<tr>
					<td align="center" bgcolor="#E5A8B8" style="border: 1px solid #E3E3E3; width : 30%"><span style="font-size: 18px;font-weight: bold;">學群領域</span>
					<td align="center" bgcolor="#E5A8B8" style="border: 1px solid #E3E3E3;"><span style="font-size: 18px;font-weight: bold;">重要程度<select id="field_order" name="field_order">
								<option style="display:none" value="0">請選擇</option>
								<option value="1">最重要</option>
								<option value="0.92">非常重要</option>
								<option value="0.75">有點重要</option>
								<option value="0.5">普通重要</option>
								<option value="0.25">不太重要</option>
								<option value="0.08">非常不重要</option>
								<option value="0">完全不重要</option>
							</select> </span></td>
				</tr>
				<tr>
					<td style="color: #FF3299;border: 1px solid #E3E3E3;"><?php if($recommend == 1) echo "⭐";?>教育</td>
					<td style="border: 1px solid #E3E3E3;">符合程度 <select id="education" name="education">
							<option style="display:none" value="0">請選擇</option>
							<option value="1">最符合</option>
							<option value="0.92">非常符合</option>
							<option value="0.75">有點符合</option>
							<option value="0.5">普通</option>
							<option value="0.25">不太符合</option>
							<option value="0.08">非常不符合</option>
							<option value="0">完全不符合</option>
						</select></td>
				</tr>
				<tr>
					<td style="color: #FF3299;border: 1px solid #E3E3E3;"><?php if($recommend == 2) echo "⭐";?>藝術及人文</td>
					<td style="border: 1px solid #E3E3E3;">符合程度 <select id="art" name="art">
							<option style="display:none" value="0">請選擇</option>
							<option value="1">最符合</option>
							<option value="0.92">非常符合</option>
							<option value="0.75">有點符合</option>
							<option value="0.5">普通</option>
							<option value="0.25">不太符合</option>
							<option value="0.08">非常不符合</option>
							<option value="0">完全不符合</option>
						</select></td>
				</tr>
				<tr>
					<td style="color: #FF3299;border: 1px solid #E3E3E3;"><?php if($recommend == 3) echo "⭐";?>社會科學、新聞學及圖書資訊</td>
					<td style="border: 1px solid #E3E3E3;">符合程度 <select id="social" name="social">
							<option style="display:none" value="0">請選擇</option>
							<option value="1">最符合</option>
							<option value="0.92">非常符合</option>
							<option value="0.75">有點符合</option>
							<option value="0.5">普通</option>
							<option value="0.25">不太符合</option>
							<option value="0.08">非常不符合</option>
							<option value="0">完全不符合</option>
						</select></td>
				</tr>
				<tr>
					<td style="color: #FF3299;border: 1px  solid #E3E3E3;"><?php if($recommend == 4) echo "⭐";?>商業、管理及法律</td>
					<td style="border: 1px solid #E3E3E3;">符合程度 <select id="business" name="business">
							<option style="display:none" value="0">請選擇</option>
							<option value="1">最符合</option>
							<option value="0.92">非常符合</option>
							<option value="0.75">有點符合</option>
							<option value="0.5">普通</option>
							<option value="0.25">不太符合</option>
							<option value="0.08">非常不符合</option>
							<option value="0">完全不符合</option>
						</select></td>
				</tr>
				<tr>
					<td style="color: #FF3299;border: 1px solid #E3E3E3;"><?php if($recommend == 5) echo "⭐";?>自然科學、數學及統計</td>
					<td style="border: 1px solid #E3E3E3;">符合程度 <select id="science" name="science">
							<option style="display:none" value="0">請選擇</option>
							<option value="1">最符合</option>
							<option value="0.92">非常符合</option>
							<option value="0.75">有點符合</option>
							<option value="0.5">普通</option>
							<option value="0.25">不太符合</option>
							<option value="0.08">非常不符合</option>
							<option value="0">完全不符合</option>
						</select></td>
				</tr>
				<tr>
					<td style="color: #FF3299;border: 1px solid #E3E3E3;"><?php if($recommend == 6) echo "⭐";?>資訊通訊科技</td>
					<td style="border: 1px solid #E3E3E3;">符合程度 <select id="cs" name="cs">
							<option style="display:none" value="0">請選擇</option>
							<option value="1">最符合</option>
							<option value="0.92">非常符合</option>
							<option value="0.75">有點符合</option>
							<option value="0.5">普通</option>
							<option value="0.25">不太符合</option>
							<option value="0.08">非常不符合</option>
							<option value="0">完全不符合</option>
						</select></td>
				</tr>
				<tr>
					<td style="color: #FF3299;border: 1px solid #E3E3E3;"><?php if($recommend == 7) echo "⭐";?>醫藥衛生及社會福利</td>
					<td style="border: 1px solid #E3E3E3;">符合程度 <select id="med" name="med">
							<option style="display:none" value="0">請選擇</option>
							<option value="1">最符合</option>
							<option value="0.92">非常符合</option>
							<option value="0.75">有點符合</option>
							<option value="0.5">普通</option>
							<option value="0.25">不太符合</option>
							<option value="0.08">非常不符合</option>
							<option value="0">完全不符合</option>
						</select></td>
				</tr>
				<tr>
					<td style="color: #FF3299;border: 1px solid #E3E3E3;"><?php if($recommend == 8) echo "⭐";?>工程、製造及營建</td>
					<td style="border: 1px solid #E3E3E3;">符合程度 <select id="constructure" name="constructure">
							<option style="display:none" value="0">請選擇</option>
							<option value="1">最符合</option>
							<option value="0.92">非常符合</option>
							<option value="0.75">有點符合</option>
							<option value="0.5">普通</option>
							<option value="0.25">不太符合</option>
							<option value="0.08">非常不符合</option>
							<option value="0">完全不符合</option>
						</select></td>
				</tr>
				<tr>
					<td style="color: #FF3299;border: 1px solid #E3E3E3;"><?php if($recommend == 9) echo "⭐";?>農業、林業、漁業及獸醫</td>
					<td style="border: 1px solid #E3E3E3;">符合程度 <select id="agri" name="agri">
							<option style="display:none" value="0">請選擇</option>
							<option value="1">最符合</option>
							<option value="0.92">非常符合</option>
							<option value="0.75">有點符合</option>
							<option value="0.5">普通</option>
							<option value="0.25">不太符合</option>
							<option value="0.08">非常不符合</option>
							<option value="0">完全不符合</option>
						</select></td>
				</tr>
				<tr>
					<td style="color: #FF3299;border: 1px solid #E3E3E3;"><?php if($recommend == 10) echo "⭐";?>服務</td>
					<td style="border: 1px solid #E3E3E3;">符合程度 <select id="service" name="service">
							<option style="display:none" value="0">請選擇</option>
							<option value="1">最符合</option>
							<option value="0.92">非常符合</option>
							<option value="0.75">有點符合</option>
							<option value="0.5">普通</option>
							<option value="0.25">不太符合</option>
							<option value="0.08">非常不符合</option>
							<option value="0">完全不符合</option>
						</select></td>
				</tr>
				<tr>
					<td style="color: #FF3299;border: 1px solid #E3E3E3;">其他</td>
					<td style="border: 1px solid #E3E3E3;">符合程度 <select id="other" name="other">
							<option style="display:none" value="0">請選擇</option>
							<option value="1">最符合</option>
							<option value="0.92">非常符合</option>
							<option value="0.75">有點符合</option>
							<option value="0.5">普通</option>
							<option value="0.25">不太符合</option>
							<option value="0.08">非常不符合</option>
							<option value="0">完全不符合</option>
						</select></td>
				</tr>
			</table>
			⭐表依照興趣量表與級分進行機器學習推薦之學群
		</div>
		<br>
		<div class="container">
			<table align="center" style="width: 100%;text-align: center;border-collapse:collapse;">
				<tr>
					<td align="center" bgcolor="#E5A8B8" style="border: 1px solid #E3E3E3; width : 30%"><span style="font-size: 18px;font-weight: bold;">學校地區
					<td align="center" bgcolor="#E5A8B8" style="border: 1px solid #E3E3E3;"><span style="font-size: 18px;font-weight: bold;">重要程度<select id="location_order" name="location_order">
								<option style="display:none" value="0">請選擇</option>
								<option value="1">最重要</option>
								<option value="0.92">非常重要</option>
								<option value="0.75">有點重要</option>
								<option value="0.5">普通重要</option>
								<option value="0.25">不太重要</option>
								<option value="0.08">非常不重要</option>
								<option value="0">完全不重要</option>
							</select> </span></td>
				</tr>
				<tr>
					<td style="color: #FF3299;border: 1px solid #E3E3E3;">北部地區</td>
					<td style="border: 1px solid #E3E3E3;">符合程度 <select id="north" name="north">
							<option style="display:none" value="0">請選擇</option>
							<option value="1">最符合</option>
							<option value="0.92">非常符合</option>
							<option value="0.75">有點符合</option>
							<option value="0.5">普通</option>
							<option value="0.25">不太符合</option>
							<option value="0.08">非常不符合</option>
							<option value="0">完全不符合</option>
						</select></td>
				</tr>
				<tr>
					<td style="color: #FF3299;border: 1px solid #E3E3E3;">中部地區</td>
					<td style="border: 1px solid #E3E3E3;">符合程度 <select id="central" name="central">
							<option style="display:none" value="0">請選擇</option>
							<option value="1">最符合</option>
							<option value="0.92">非常符合</option>
							<option value="0.75">有點符合</option>
							<option value="0.5">普通</option>
							<option value="0.25">不太符合</option>
							<option value="0.08">非常不符合</option>
							<option value="0">完全不符合</option>
						</select></td>
				</tr>
				<tr>
					<td style="color: #FF3299;border: 1px solid #E3E3E3;">南部地區</td>
					<td style="border: 1px solid #E3E3E3;">符合程度 <select id="south" name="south">
							<option style="display:none" value="0">請選擇</option>
							<option value="1">最符合</option>
							<option value="0.92">非常符合</option>
							<option value="0.75">有點符合</option>
							<option value="0.5">普通</option>
							<option value="0.25">不太符合</option>
							<option value="0.08">非常不符合</option>
							<option value="0">完全不符合</option>
						</select></td>
				</tr>
				<tr>
					<td style="color: #FF3299;border: 1px  solid #E3E3E3;">東部地區</td>
					<td style="border: 1px solid #E3E3E3;">符合程度 <select id="east" name="east">
							<option style="display:none" value="0">請選擇</option>
							<option value="1">最符合</option>
							<option value="0.92">非常符合</option>
							<option value="0.75">有點符合</option>
							<option value="0.5">普通</option>
							<option value="0.25">不太符合</option>
							<option value="0.08">非常不符合</option>
							<option value="0">完全不符合</option>
						</select></td>
				</tr>
				<tr>
					<td style="color: #FF3299;border: 1px solid #E3E3E3;">離島地區</td>
					<td style="border: 1px solid #E3E3E3;">符合程度 <select id="island" name="island">
							<option style="display:none" value="0">請選擇</option>
							<option value="1">最符合</option>
							<option value="0.92">非常符合</option>
							<option value="0.75">有點符合</option>
							<option value="0.5">普通</option>
							<option value="0.25">不太符合</option>
							<option value="0.08">非常不符合</option>
							<option value="0">完全不符合</option>
						</select></td>
				</tr>
			</table>
		</div>
		<br>
		<br>
		<div class="center"> <input type="submit" value="送出" name="按鈕名稱" style="margin-left: auto; margin-right: auto;width:150px;height:50px;border:0;background-color:#498efc;color:#fff;border-radius:10px;" onclick="fuzzy()"></div>
		<br>
	</form>
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