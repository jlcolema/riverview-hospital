<!doctype html>

<html lang="en">

<head>

	<meta charset="utf-8" />

	<title>Riverviews : Kid&rsquo;s Day</title>

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

<body class="article kids-day" id="top">

	<!-- Header -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/header.php");?>

	<!-- Settings -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/settings.php");?>

	<!-- Article -->

	<section class="main">

		<article>

			<p class="category">Events</p>

			<h2>Kid&rsquo;s Day</h2>

			<h3>Saturday, September 10 from 9 AM to noon</h3>

			<figure class="full-width">

				<img src="/-/media/photos/kid-celebrating.jpg" alt="Kid celebrating." />

			</figure>

			<p>Have you been searching for the perfect pediatrician for your family? We have a great opportunity for you to meet some of the great pediatricians from Riverview Medical Group’s Noblesville Pediatrics. Join us at Kid’s Day on Saturday, September 10 from 9 a.m. to noon at Noblesville Pediatrics, 865 Westfield Road, #B, Noblesville.</p>

			<p>Activities will include:</p>

			<ul>
				<li>Physician Meet and Greet</li>
				<li>Radio Disney</li>
				<li>Bike safety information and complimentary bike helmets while supplies last</li>
				<li>and much more!</li>
			</ul>

			<aside>

				<h3>Healthy Parents, Healthy Kids</h3>

				<p>Riverview Hospital and Promising Futures have partnered on an exciting initiative to promote healthy families. The program, Healthy Parents Healthy Kids, will focus on information, sharing, classes and events related to health and nutrition, school issues, bullying, talking to children about drugs and alcohol and much more. Learn all about it at the Riverview Kid’s Day and receive a free family first aid kit, filled with useful items!</p>

			</aside>

		</article>

		<section class="read-more">

			<div class="read-more-options group">

				<h3>Read More</h3>

				<p><a href="#top">Back to Top &uarr;</a></p>

			</div>

			<section class="group">

				<article class="previous">
		
					<a href="/article/riverview-health-fair.php">

						<i>&laquo; Previous</i>
		
						<h2>Riverview Health Fair</h2>

					</a>
		
				</article>

				<article class="next">
		
					<a href="/article/impacting-the-community.php">

						<i>Next &raquo;</i>
		
						<h2>M&amp;I Bank is Dedicated to Impacting the Community</h2>

					</a>
		
				</article>

			</section>

		</section>

	</section>

	<!-- Footer -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/footer.php");?>

</body>

</html>