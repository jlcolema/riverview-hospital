<!doctype html>

<html lang="en">

<head>

	<meta charset="utf-8" />

	<title>Riverviews : M&amp;I Bank is Dedicated to Impacting the Community</title>

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

<body class="article impacting-the-community" id="top">

	<!-- Header -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/header.php");?>

	<!-- Settings -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/settings.php");?>

	<!-- Article -->

	<section class="main">

		<article>

			<p class="category">Events</p>

			<h2>M&amp;I Bank is Dedicated to Impacting the Community</h2>

			<figure>

				<img class="full-width" src="/-/media/photos/donation.jpg" alt="M&amp;I Bank graciously donated $25,000 to support Pediatric Services at Riverview Hospital. Cheryl Watson, Greg O’Connor, Trish Oman, Bob Ballard." />

				<figcaption>

					<p>Pictured: M&amp;I Bank graciously donated $25,000 to support Pediatric Services at Riverview Hospital. [LEFT TO RIGHT] Cheryl Watson, Greg O&rsquo;Connor, Trish Oman, Bob Ballard.</p>

				</figcaption>

			</figure>

			<p>Philanthropy has always been an integral part of M&I Bank’s business philosophy. Now, as M&amp;I Bank alongside Harris Bank have joined forces with one of the strongest financial institutions in North America, BMO Harris Bank, they are steadfast to maintaining their commitment to enhance the communities where their employees work and live.</p>

			<p>“Our mission is to continue to support local organizations actively. BMO Harris is committed to this market and our customers. We believe providing support to organizations like the Riverview Hospital Foundation brings value to the community and to our customers as well,” said Greg O’Connor, Senior Vice President at M&I Bank and Riverview Hospital Foundation Board Vice Chair.</p>

		</article>

		<section class="read-more">

			<div class="read-more-options group">

				<h3>Read More</h3>

				<p><a href="#top">Back to Top &uarr;</a></p>

			</div>

			<section class="group">

				<article class="previous">
		
					<a href="/article/kids-day.php">

						<i>&laquo; Previous</i>
		
						<h2>Kid&rsquo;s Day</h2>

					</a>
		
				</article>

				<article class="next">
		
					<a href="/article/free-nutrition-seminars.php">

						<i>Next &raquo;</i>
		
						<h2>Free Nutrition Seminars</h2>

					</a>
		
				</article>

			</section>

		</section>

	</section>

	<!-- Footer -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/footer.php");?>

</body>

</html>