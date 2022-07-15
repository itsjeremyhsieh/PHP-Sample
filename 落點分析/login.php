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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<!--additional method - for checkbox .. ,require_from_group method ...-->
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<!--中文錯誤訊息-->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js "></script>
	

	<style>
		#outer {
			background-color: #95afba;
			position: relative;
			/* ★ */
			height: 400px;
			display: flex;
			/* ★ */
			align-items: center;
			/* ★ */
		}

		.container {
			display: flex;
			justify-content: center;
			align-items: center;
		}
	</style>

	<script>
		$(document).ready(function($) {
			$.validator.addMethod("notEqualsto", function(value, element, arg) {
				return arg != value;
			}, "您尚未選擇!");

			$("#login_form").validate({
				submitHandler: function(form) {
					form.submit();
				},
				rules: {
					email: {
						required: true,
					},
					password: {
						required: true,
						minlength: 6,
						maxlength: 12
					}
				},
				messages: {
					email: {
						required: "帳號為必填欄位"
					},
					password: {
						required: "密碼為必填欄位",

					},
				}
			});
		});
	</script>

<style type="text/css">
.error {
     color: #D82424;
     font-weight: normal;
     font-family: "微軟正黑體";
     display: inline;
     padding: 1px;
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
						<h3>會員登入</h3>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- end section -->

	<!-- section -->
	<div class="section layout_padding contact_section" style="background:#f6f6f6;">
		<div class="container">



			<div class="col-md-auto col-lg-4  justify-content-center">



				<form action="loginfunc.php" method= "POST" name="login_form" id="login_form" >
					<div class="login_form">
					<fieldset>

						<div class=" row justify-content-center">
							<input type="email" placeholder="Email" name="email" />
						</div>
						<div class=" row justify-content-center ">
							<input type="password" placeholder="密碼" name="password" />
						</div>

						<div class=" row justify-content-center ">
							<div class="center"><button>登入</button></div>
						</div>

						<!--<div class="row justify-content-center">
								<div class="col-4 mb-10"><a class="form-link" href="forgetpsw.php">忘記帳號/密碼</a> </div>
							</div>
							-->

						<div class="row justify-content-center">
							<div class="col-4 mb-10"><a class="form-link" href="register.php">尚未註冊?</a></div>
						</div>
					</fieldset>
					</div>
				</form>


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