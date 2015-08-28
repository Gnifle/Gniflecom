<?php include_once('dir.php'); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>I am not good With PC</title>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Base URL -->

		<!-- Styles -->
		<link rel="stylesheet" href="stylesheets/scss/global.css">

		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

		<!-- JQuery plugins -->
		<script type="text/javascript" src="javascripts/jQuery/jquery-1.11.3.min.js"></script>

		<!-- Custom Javascripts -->

	</head>
<body>

	<div id="page">
		<header>

			<section>
				<img src="images/layout/pix.png" class="logo">
				<h1><span class="white">Goodmorning</span> ! My name's <span class="white">Daniel</span>, a young web designer from <span class="white">Denmark</span>.</h1>
				<h1>Welcome to my <span class="white">portfolio</span> !</h1>
			</section>

			<div id="scroll"></div>

		</header>

		<div id="content">

			<aside>
				<div class="showcase show50">
					<a href="projects/da-claudio">
						<p>Fine Italian dining in central Copenhagen</p>
					</a>
					<article class="showcase-inner" id="da-claudio">
						<a href="projects/da-claudio"></a>
					</article>
				</div>
				<div class="showcase show50">
					<a href="projects/tina-scharff">
						<p>Men's haircut with a touch of variation</p>
					</a>
					<article class="showcase-inner" id="tina-scharff">
						<a href="projects/tina-scharff"></a>
					</article>
				</div>
			</aside>

			<aside>
				<div class="showcase show33">
					<a href="projects/fyns-rejse">
						<p>Taking care of your perfect holiday</p>
					</a>
					<article class="showcase-inner" id="travel">
						<a href="projects/fyns-rejse"></a>
					</article>
				</div>
				<div class="showcase show33">
					<a href="projects/ecoteck">
						<p>Staying warm the eco-way</p>
					</a>
					<article class="showcase-inner" id="ecoteck">
						<a href="projects/ecoteck"></a>
					</article>
				</div>
				<div class="showcase show33">
					<a href="projects/asae">
						<p>Rent your place - the easy way</p>
					</a>
					<article class="showcase-inner" id="asae">
						<a href="projects/asae"></a>
					</article>
				</div>
			</aside>

		</div>

	</div>

	<script>

		$(window).scroll(function() {

			if($(this).scrollTop() > 20) {
				$('#scroll').hide();
			} else {
				$('#scroll').show();
			}

		})

		$(document).ready(function() {

		})

	</script>

</body>
</html>