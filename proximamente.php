<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="SHIELD - Free Bootstrap 3 Theme">
	<meta name="author" content="Carlos Alvarez - Alvarez.is - blacktie.co">
	<link rel="shortcut icon" href="assets/ico/favicon.png">

	<title>Aula5 - Mentorías y Capacitación IT</title>

	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="assets/css/aula5.css" rel="stylesheet">
	<link href="assets/css/aula5-animate.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/icomoon.css" rel="stylesheet">
	<link href="assets/css/animate-custom.css" rel="stylesheet">

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/modernizr.custom.js"></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		body {
			background-attachment: fixed !important;
			background-image: url("assets/img/fondos/header.jpg") !important;
			background-position: center center;
			background-repeat: no-repeat;
			padding: 0 !important;
			margin: 0 !important;
		}
		#launching {
			font-family: "LeagueGothicRegular";
			color: #FFF;
			font-size: 40px;
			text-align: center;
			text-shadow: 0px 0px 5px #555;
			position: absolute;
			top: 50%;
			width: 100%;
		}
		#launching h1 {
			background-image: url("assets/img/aula5.png");
			background-position: center top;
			background-repeat: no-repeat;
			background-size: auto 100%;
			text-indent: -9999px;
			width: 150px;
			height: 200px;
			margin: auto;
		}
		#launching h2 {
			font-family: "LeagueGothicRegular" !important;
			color: #FFF;
			text-transform: uppercase;
			font-size: 60px;
		}
		#newsletter {
			background: #0092bf;
			padding-top: 15px;
		}
		#mc-embedded-subscribe-form {
			border: none;
		}
		.btn { float: left; width: 100%; }
		.form-control {
			height: 40px;
			font-size: 14px;
			font-family: "MuseoSlab100";
		}
		.social-nav {
			float: none;
			clear: both;
			margin: 0;
			padding: 15px 0 0 0;
			font-size: 0;
		}
		.social-nav li {
			padding: 0;
			float: none;
			display: inline-block;
			text-align: center;
		}
		.response {
			background: #0092bf;
			position: absolute;
			top: 0;
			font-size: 25px;
			width: 100%;
			height: 55%;
			line-height: 200%;
		}
	</style>
</head>


<body data-spy="scroll" data-offset="0" data-target="#navbar-main">

<div id="launching">
	<header class="clearfix">
		<h1>Aula5</h1>
		<h2>Aprendizaje sin fronteras</h2>
	</header>
	<p>Lanzamiento el 10/10</p>
	<p></p>
	<div id="clock"></div>

	<div id="newsletter" class="col-lg-12">
		<form class="form-horizontal validate" role="form" action="//aula5.us3.list-manage.com/subscribe/post?u=b4710ff6bed0bd8d32bf82ad0&amp;id=98b68dc1e2" method="post"	id="mc-embedded-subscribe-form"	name="mc-embedded-subscribe-form" target="_blank" novalidate>

			<div id="mc_embed_signup_scroll" class="form-group">

				<div class="mc-field-group col-lg-3 col-md-offset-2">
					<input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME" placeholder="Tu nombre...">
				</div>

				<div class="mc-field-group col-lg-3">
					<input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL" placeholder="Tu e-mail...">
				</div>
				
				<div class="mc-field-group col-lg-2">
					<input style="display:none" type="text" name="b_b4710ff6bed0bd8d32bf82ad0_98b68dc1e2" tabindex="-1" value="">
					<input type="submit" value="Suscribirme" name="subscribe" id="mc-embedded-subscribe" class="btn btn-success call button">

				</div>

				<!--ol class="col-lg-12 nav navbar-nav social-nav">
					<li><a href="https://twitter.com/smessina_/lists/aula5" target="_blank" class="icon icon-twitter">1</a></li>
					<li><a href="#inicio" class="icon icon-googleplus">2</a></li>
					<!--li><a href="skype:aula5_?call" class="icon icon-skype">3</a></li-->
				</ol-->

				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>
			</div>

		</form>
	</div>
		
</div>



<script src="http://cdn.rawgit.com/hilios/jQuery.countdown/2.0.4/dist/jquery.countdown.min.js"></script>
<script>
	$('#clock').countdown('2014/10/10', function(event) {
		$(this).html(event.strftime('%D dia%!d %Hhs %Mmin %Ssec'));
	});
	var margin = $("#launching").height();

	$("#launching").css("margin-top", -margin/2)
</script>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>
	(function($) {
		window.fnames = new Array();
		window.ftypes = new Array();
		fnames[0]='EMAIL';
		ftypes[0]='email';
		fnames[1]='FNAME';
		ftypes[1]='text';
	}(jQuery));
	var $mcj = jQuery.noConflict(true);
</script>

<?php include_once("analyticstracking.php") ?>

</body>
</html>
