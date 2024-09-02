<!doctype html>

<html lang="en">

<head>

	<meta charset="utf-8" />

	<title>Riverviews : Free Nutrition Seminars</title>

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

<body class="article free-nutrition-seminars" id="top">

	<!-- Header -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/header.php");?>

	<!-- Settings -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/settings.php");?>

	<!-- Article -->

	<section class="main">

		<article>

			<p class="category">Nutrition</p>

			<h2>Free Nutrition Seminars</h2>

			<figure class="full-width">

				<img src="/-/media/photos/family-in-the-kitchen.jpg" alt="Family in the kitchen." />

			</figure>

			<p>On a daily basis we are bombarded with information about nutrition that leaves one guessing what route is the right one to reach your goal? Join us for free nutrition seminars presented by registered dietician, Laura Kenny that will guide you through a different topic each month with information. The seminars will be held at the Riverview Rehab &amp; Fitness &ndash; Noblesville, 601 Westfield Road, from 6 to 7 pm. To register, visit <a href="http://www.riverview.org">riverview.org</a> or call (317) 770-5835.</p>

			<aside>

				<h3>Sep 15 (6-7 PM)</h3>

				<p>Grocery Shopping and Reading Labels</p>

				<h3>Oct 20 (6-7 PM)</h3>

				<p>Medication Interactions with Nutrients</p>
				
				<h3>Nov 17 (6-7 PM)</h3>
	
				<p>Healthy Eating for the Holidays</p>

			</aside>

		</article>

		<section class="read-more">

			<div class="read-more-options group">

				<h3>Read More</h3>

				<p><a href="#top">Back to Top &uarr;</a></p>

			</div>

			<section class="group">

				<article class="previous">
		
					<a href="/article/impacting-the-community.php">

						<i>&laquo; Previous</i>
		
						<h2>M&amp;I Bank is Dedicated to Impacting the Community</h2>

					</a>
		
				</article>

				<article class="next">
		
					<a href="/article/eat-healthfully-live-fully-healthy.php">

						<i>Next &raquo;</i>
		
						<h2>Eat Healthfully, Live Fully Healthy</h2>

					</a>
		
				</article>

			</section>

		</section>

	</section>

	<!-- Footer -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/footer.php");?>

</body>

</html>