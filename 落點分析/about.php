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
		.col-xs-3-tag-title
		{
			
			top:50px; 
			margin:0 auto;
			position:relative; 
			border-width: 3px ; 
			width: 20%; 
			height: 30px ; 
			padding: 5px; 
			text-align: center; 
			background-color: rgba(188, 215, 245, 0.9);
			border-radius: 10px 10px 0 0px;
		}
		.positiontext{
			padding-left:50px;
			
			position: relative; 
			
		}
		.goleft
		{
			margin:0 auto;
			position: relative;
			padding-left:55px;
			top:5px;
			
			
		}
		.golefth
		{
			margin:0 auto;
			position: relative;
			padding-left:55px;
			top:20px;
			
			
		}
		.goleftr
		{
			margin:0 auto;
			position: relative;
			padding-left:75px;
			top:10px;
			
			justify-content: center; 
			align-items: center; 
			
			
		}
		.golefte
		{
			position: relative;
			
			
			top:5px;
			
			display: flex;
    justify-content: center; 
    align-items: center; 
		}
		.positionselect{
			position: relative; 
			padding-left:35px;
			margin:0 auto;
			top: 10px;
			
		}
		.positionselect1{
			position: relative; 
			padding-left:20px;
			margin:0 auto;
			top: 10px;
			
		}
		.block{
			position: relative;
			top: 50px;
			margin:0 auto;
			width:50%;
			
			border-style:solid;
			border-color:#013e99;
			height:auto;
		}
		.habit
		{
			position:relative;
			margin:0 auto;
			text-align: center;
			padding-left:220px;
			top:10px;

		}
		.buttunleft
		{
			position:relative;
			margin:0 auto;
			text-align: center;
			padding-left:270px;
			top:10px;
		}
			
		.hr
		{
			position: relative;
			top:10px;
			width: 70%;
			
			border-top:1px solid rgb(126, 125, 231);
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
				     <h3>學測落點分析查詢</h3>
				 </div>
			  </div>
		  </div>
	  </div>
	</section>
	
	<!-- end section -->
   
	<!-- section -->
    
                        
						
								<div class="col-xs-3-tag-title">篩選條件</div>
								<form action="showGSAT.php" method="post">
									<div class="block">
										<br>
										<a class="goleft">國文</a>
										<a class="goleft">英文</a>
										<a class="goleft">數學A</a>
										<a class="goleft">數學B</a>
										<a class="goleft">社會</a>
										<a class="goleft">自然</a>
										<br>
											<a class="positionselect">
											<select name="chinese" >
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
										</a> 
											
										<a class="positionselect1">
											<select name="english" >
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
										</a> 

										<a class="positionselect1">
											<select name="mathA" >
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
										</a> 

										<a class="positionselect1">
											<select name="mathB" >
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
										</a> 


										<a class="positionselect1">
											<select name="social" >
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
										</a> 


										<a class="positionselect1">
											<select name="science" >
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
										</a> 
										<br>
										
										
										<hr class="hr"   >
										
										<a class="golefte">英文聽力</a>
										<br>
										<a class="goleftr">
											<input type="radio" name="listening" value="A"> A</a>
											<a class="goleftr">
											<input type="radio" name="listening" value="B"> B</a>
											<a class="goleftr">
											<input type="radio" name="listening" value="C"> C</a>
											<a class="goleftr">
											<input type="radio" name="listening" value="F"> F</a>
											<a class="goleftr">
											<input type="radio" name="listening" value="non" checked> 無</a>
										<br>
										<hr class="hr"   >
										
										<a class="habit">請勾選您的興趣量表結果 </a>
										<br>
										<a class="golefth">
										<input type="checkbox" name="interest[]" value="R"><label>實用型(R)</label>
										<input type="checkbox" name="interest[]" value="I"><label>研究型(I)</label>
										<input type="checkbox" name="interest[]" value="A"><label>藝術型(A)</label>
										<input type="checkbox" name="interest[]" value="S"><label>社會型(S)</label>
										<input type="checkbox" name="interest[]" value="E"><label>企業型(E)</label>
										<input type="checkbox" name="interest[]" value="C"><label>事務型(C)</label>
										</a>
										<br>
										<hr class="hr"   >
										<br>
										<a class="buttunleft"><button type='submit'>送出</button></a>
										<br>
										<br>
											
										

									
										
										</div>

								</form>
								
						
							


							




						


						
                   
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>Popular </span>Courses</h2>
                        </div>
					  </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                       <img class="img-responsive" src="images/p1.png" alt="#" /> 
					   <h4>Financial Accounting</h4>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="images/p2.png" alt="#" />
						<h4>Managerial Accounting</h4>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="images/p3.png" alt="#" />
						<h4>Intermediate Accounting</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
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