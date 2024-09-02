<!doctype html>

<html lang="en">

<head>

	<meta charset="utf-8" />

	<title>Riverviews : Gifting Opportunity</title>

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

<body class="article gifting-opportunity" id="top">

	<!-- Header -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/header.php");?>

	<!-- Settings -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/settings.php");?>

	<!-- Article -->

	<section class="main">

		<article>

			<p class="category">Foundation</p>

			<h2>Don&rsquo;t Miss Out on Gifting Opportunity</h2>

			<img src="/-/media/photos/riverview-hospital-foundation.jpg" alt="Riverview Hospital Foundation" />

			<p>The 2010 Tax Relief Act has extended a favorable tax rule that is set to expire on December 31, 2011. If you are 70 1⁄2, you may be eligible to make a distribution directly from a regular IRA and exclude up to $100,000 from your gross income. Indiana taxpayers do not receive a state or county income tax benefit for charitable gifts, but you could avoid federal, state and county income taxes on the amount withdrawn when the funds are distributed directly to a charity! To learn more about creating your legacy and estate planning, contact Susan Beckwith, Major Gifts Officer for the Riverview Hospital Foundation at (317) 770-2962 or <a href="mailto:sbeckwith@riverview.org">sbeckwith@riverview.org</a>.</p>

		</article>

		<section class="read-more">

			<div class="read-more-options group">

				<h3>Read More</h3>

				<p><a href="#top">Back to Top &uarr;</a></p>

			</div>

			<section class="group">

				<article class="previous">
		
					<a href="/article/letter-from-the-president.php">

						<i>&laquo; Previous</i>
		
						<h2>Letter from the President</h2>

					</a>
		
				</article>

				<article class="next">
		
					<a href="/article/a-heartfelt-thanks.php">

						<i>Next &raquo;</i>
		
						<h2>A Heartfelt Thanks</h2>

					</a>
		
				</article>

			</section>

		</section>

	</section>

	<!-- Footer -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/footer.php");?>

</body>

</html>