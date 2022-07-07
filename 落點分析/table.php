<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Perfect - Responsive HTML5 Template</title>
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
            height:fit-content;
        }
        
        label {
            display: inline-block;
            padding: 5px 10px;
            background-color:#61A3CF;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
			width: 20%;
			color:beige;
        }
        
        label:hover {
            cursor: pointer;
        }
        /* 隐藏radio，只显示标签文字 */
        
        input[type="radio"] {
            display: none;
        }
        
        input[type="radio"]:checked+label {
            background-color:#A5CCE6;
            color: white;
        }
        
        input[type="radio"]:checked+label+div {
            display: block;
        }
        
        .content {
			position: relative;
			width:100%;
			
            height:fit-content;
            background-color: aliceblue;
        }
        
        .content div {
            display: none;
        }
        
        #navi1:checked~.content>#content1,
        #navi2:checked~.content>#content2,
        #navi3:checked~.content>#content3,
        #navi4:checked~.content>#content4 {display: block;}
		
		#wrap
        {
            display :flex;
            justify-content: space-around;
            font-weight: 500;
            font-size: 20px;
            font-family:KaiTi;
            color: black;
            height: auto;
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

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
						<li><a class="nav-link active" href="index.html">Home</a></li>
                        <li><a class="nav-link" href="GSAT.html">學測</a></li>
                        <li><a class="nav-link" href="AST.html">分科測驗</a></li>
                        <li><a class="nav-link" href="register.html">會員註冊</a></li>
						<li><a class="nav-link" href="news.html">更新消息</a></li>
						<li><a class="nav-link" href="contact.html">聯絡我們</a></li>
					</ul>
                </div>
                <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Search">
                    <a class="search-btn">
                        <img src="images/search_icon.png" alt="#" />
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

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
	<table align="center" style="width: 95%;text-align: center;border-collapse:collapse;">
						<tr>
							<td colspan="6" align="center" bgcolor="#E3E3E3" style="border: 1px solid #E3E3E3;"><span style="font-size: 16px;font-weight: bold;">優勢科目組合排名</span></td>
						</tr>
						<tr>
							<td bgcolor="#F4FF83" style="border: 1px  solid #E3E3E3;">排名</td>
								<td style="color: #FF3299;border: 1px solid #E3E3E3;">1</td>
								<td style="color: #FF3299;border: 1px solid #E3E3E3;">2</td>
								<td style="color: #FF3299;border: 1px  solid #E3E3E3;">3</td>
								<td style="color: #FF3299;border: 1px solid #E3E3E3;">4</td>
								<td style="color: #FF3299;border: 1px  solid #E3E3E3;">5</td>
																
							<!--td bgcolor="#F4FF83" style="border: 1px solid #E3E3E3;">全國累積人數百分比</td-->
						</tr>
						   <tr>
							   <td bgcolor="#F9FFBF" style="border: 1px solid #E3E3E3;">科目組合</td>
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
		<div class="wrap">
			<input type="radio" id="navi2" name="radio" />
			<label for="navi1" >落點分析</label>
			<input type="radio" id="navi1" name="radio" checked/>
			<label for="navi2">校系推薦</label>
			
			<div class="content">
				<div id="content1">
				<table  wide=”200” height=”800” border =”4”  >
				<tr>
				<td align="center"><b>順位</b></td>
				<td align="center"><b>校系代碼</b></td>
				<td align="center"><b>校系名稱</b></td>
				<td align="center"><b>檢定標準</b></td>
				<td align="center"><b>篩選倍率</b></td>	
				<td align="center"><b>順序一</b></td>
				<td align="center"><b>順序二</b></td>
				<td align="center"><b>順序三</b></td>
				<td align="center"><b>興趣類型</b></td>     
				<td align="center"><b>通過機率</b></td>
				<td align="center"><b>甄試日期</b></td></tr>
				<tr><td> 1 </td><td>023152</td><td> 國立彰化師範大學資訊工程學系</td><td>英文(底)</td><td>國文[3.00]</td><td>國文(7)</td><td>英文(3)</td><td>數學A(3)</td><td>社會型</td><td>☆☆☆☆☆</td><td>無</td></tr> 
				<tr><td> 2 </td><td>001572</td><td> 國立台灣大學電機工程學系</td><td>英文(底)</td><td>國文[3.00]</td><td>國文(7)</td><td>英文(3)</td><td>數學A(3)</td><td>社會型</td><td>☆</td><td>3/10</td></tr> 
				</p>
				</table>
				</div>


				<div id="content2">内容区域B</div>
				
			</div>		
		</div>

	</div>


	<br>


	<!-- end section -->
   
	
  <!-- Start Footer -->
  <footer class="footer-box">
	<div class="container">
	
	   <div class="row">
	   
		  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			 <div class="footer_blog">
				<div class="full margin-bottom_30">
				   <img src="images/footer_logo.png" alt="#" />
				 </div>
				 <div class="full white_fonts">
					<p>梅子黃時，道了無數的珍重，寫了無數的祝福，合了無數張留影，隨處可見夏日的繁茂。我們以為是終點，其實只是一個攜帶祝福的開端。 </p>
				 </div>
			 </div>
		  </div>
		  
		  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			   <div class="footer_blog footer_menu white_fonts">
						<h3>快速連結</h3>
						<ul> 
						  <li><a href="#">> Home</a></li>
						  <li><a href="#">> 學測</a></li>
						  <li><a href="#">> 分科測驗</a></li>
						  <li><a href="#">> 會員註冊</a></li>
						  <li><a href="#">> 更多消息</a></li>
						  <li><a href="#">> 聯絡我們</a></li>
						</ul>
					 </div>
			 </div>
			 
			 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			 <div class="footer_blog full white_fonts">
						 <h3>訂閱電子報</h3>
						 <p>訂閱電子報以獲得更多消息</p>
						 <div class="newsletter_form">
							<form action="index.html">
							   <input type="email" placeholder="Email" name="#" required />
							   <button>送出</button>
							</form>
						 </div>
					 </div>
				</div>	 
		  
		  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			 <div class="footer_blog full white_fonts">
						 <h3>Contact us</h3>
						 <ul class="full">
						   <li><img src="images/i5.png"><span>500彰化縣彰化市進德路1號<br>寶山校區</span></li>
						   <li><img src="images/i6.png"><span>csie@cc2.ncue.edu.tw</span></li>
						   <li><img src="images/i7.png"><span>04-7232105 分機8401~8405</span></li>
						 </ul>
					 </div>
				</div>	 
		  
	   </div>
	
	</div>
</footer>
<!-- End Footer -->

<div class="footer_bottom">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="crp">© 國立彰化師範大學資訊工程學系</p>
			</div>
		</div>
	</div>
</div>

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

(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
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
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
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