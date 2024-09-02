<!doctype html>

<html lang="en">

<head>

	<meta charset="utf-8" />

	<title>Riverviews : Letter from the President</title>

	<meta name="description" content="Here is the description of your project." />
	<meta name="keywords" content="" />

	<meta name="author" content="Your Name Here" />
	<meta name="Copyright" content="Copyright 2011 Riverviews. All Rights Reserved." />

	<meta name="DC.title" content="Riverviews" />
	<meta name="DC.subject" content="What this site is about." />
	<meta name="DC.creator" content="Who made this site." />

	<meta name="google-site-verification" content="" />

	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

	<link rel="shortcut icon" href="/-/media/art/favicon.png" />
	<link rel="apple-touch-icon-precomposed" href="/-/media/art/apple-touch-icon.png">

	<link rel="stylesheet" href="/-/css/master.css" />
	<link rel="stylesheet" href="/-/css/print.css" media="print" />

	<script>

		// by https://github.com/irae
		(function(document,navigator,standalone) {
		    // prevents links from apps from oppening in mobile safari
		    // this javascript must be the first script in your <head>
		    if ((standalone in navigator) && navigator[standalone]) {
		        var curnode, location=document.location, stop=/^(a|html)$/i;
		        document.addEventListener('click', function(e) {
		            curnode=e.target;
		            while (!(stop).test(curnode.nodeName)) {
		                curnode=curnode.parentNode;
		            }
		            // Condidions to do this only on links to your own app
		            // if you want all links, use if('href' in curnode) instead.
		            if('href' in curnode && ( curnode.href.indexOf('http') || ~curnode.href.indexOf(location.host) ) ) {
		                e.preventDefault();
		                location.href = curnode.href;
		            }
		        },false);
		    }
		})(document,window.navigator,'standalone');

	</script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

	<script src="/-/script/functions.js"></script>

	<script type="text/javascript" src="http://use.typekit.com/lvm1lpf.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>

<body class="article letter-from-the-president" id="top">

	<!-- Header -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/header.php");?>

	<!-- Settings -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/settings.php");?>

	<!-- Article -->

	<section class="main">

		<article>

			<p class="category">Foundation</p>

			<h2>Letter from the President</h2>

			<img src="/-/media/photos/dave-cox.jpg" alt="President Dave Cox" style="width: 120px; margin: 0 10px 0 0; float: left; display: block;" />

			<p>On behalf of the Riverview Hospital Foundation Board of Directors and myself, we express our gratitude to Bob Ballard for his leadership over the past three years as board chair and for his years of service and dedication as a board director. I am excited about the opportunity to build upon the momentum established by the previous board leadership.Thanks to the guidance of our board and hard work of all board directors, we will continue to be successful.</p>

			<p>As I embark on this new opportunity as board chair, my vision is to finalize the Heart of Your Community Capital Campaign by year end 2011. This is a feasible goal we can all accomplish together. I have witnessed first-hand the philanthropic spirit and generosity of the community as a long-time resident and business owner. With your support, we can continue to develop the services and enhance the technology that Riverview Hospital has to offer you and your loved ones. Thank you for your continued support of Riverview Hospital Foundation.</p>

		</article>

		<section class="read-more">

			<div class="read-more-options group">

				<h3>Read More</h3>

				<p><a href="#top">Back to Top &uarr;</a></p>

			</div>

			<section class="group">

				<article class="previous">
		
					<a href="/article/a-revolution-in-speech-therapy.php">

						<i>&laquo; Previous</i>
		
						<h2>A Revolution in Speech Therapy</h2>

					</a>
		
				</article>

				<article class="next">
		
					<a href="/article/gifting-opportunity.php">

						<i>Next &raquo;</i>
		
						<h2>Don&rsquo;t Miss Out on Gifting Opportunity</h2>

					</a>
		
				</article>

			</section>

		</section>

	</section>

	<!-- Footer -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/footer.php");?>

</body>

</html>