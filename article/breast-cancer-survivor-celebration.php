<!doctype html>

<html lang="en">

<head>

	<meta charset="utf-8" />

	<title>Riverviews : Breast Cancer Survivor Celebration</title>

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

<body class="article breast-cancer-survivor-celebration" id="top">

	<!-- Header -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/header.php");?>

	<!-- Settings -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/settings.php");?>

	<!-- Article -->

	<section class="main">

		<article>

			<p class="category">Events</p>

			<h2>Breast Cancer Survivor Celebration</h2>

			<img src="/-/media/photos/beverly-kirkhart.jpg" alt="Beverly Kirkhart" style="width: 120px; margin: 0 10px 0 0; float: left; display: block;" />

			<p>Join us as we celebrate the lives of those who have triumphed over breast cancer on Thursday, October 20 from 6 to 8 p.m. at the beautiful Mill Top Banquet and Conference Center, Noblesville.</p>

			<p>Our speaker will be Beverly Kirkhart. Beverly had a fairy tale life &ndash; or so she thought &ndash; until it all ended in bankruptcy and divorce in 1991 and left her penniless. She was so destitute that she house-sat when she could just to have a place to stay. When there was nowhere to go, she often spent nights sleeping in her car. She joked with friends and family that at least still had her health. Then the diagnosis of breast cancer came along in 1993, setting Beverly up for the fight of her life. Beverly is now a survivor who turned her lemons into lemonade. Come hear her moving story and be inspired.</p>

			<p>Beverly has helped others through their journey with her book My Healing Companion and co-authoring <i>Chicken Soup for the Survivor&rsquo;s Soul</i>.</p>

			<div class="coupon">

				<a href="/-/media/womens-boutique-coupon.pdf">

					<h3>Women&rsquo;s Boutique</h3>

					<p>Click here for 25% off one regularly priced item at the Riverview Women&rsquo;s Boutique.</p>

					<p><i>Expires December 31, 2011</i></p>

				</a>

			</div>

			<aside>

				<h3>You&rsquo;re Invited</h3>

				<p>Join us for a night of celebration, awareness, and inspiration.</p>

				<p>When: Thursday, October 20 Time: 6 to 8 p.m.</p>

				<p>Hors d&rsquo;oeuvres will be served. To register, visit <a href="riverview.org">riverview.org</a> or call (317) 770-5835. Cost for the evening will be $5.</p>

			</aside>

		</article>

		<section class="read-more">

			<div class="read-more-options group">

				<h3>Read More</h3>

				<p><a href="#top">Back to Top &uarr;</a></p>

			</div>

			<section class="group">

				<article class="previous">
		
					<a href="/article/mammograms-save-lives.php">

						<i>&laquo; Previous</i>
		
						<h2>Mammograms Save Lives</h2>

					</a>
		
				</article>

				<article class="next">
		
					<a href="/article/riverview-health-fair.php">

						<i>Next &raquo;</i>
		
						<h2>Riverview Health Fair</h2>

					</a>
		
				</article>

			</section>

		</section>

	</section>

	<!-- Footer -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/footer.php");?>

</body>

</html>