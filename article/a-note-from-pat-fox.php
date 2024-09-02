<!doctype html>

<html lang="en">

<head>

	<meta charset="utf-8" />

	<title>Riverviews : A Note from Pat Fox, Riverview Hospital CEO</title>

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

<body class="article a-note-from-pat-fox" id="top">

	<!-- Header -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/header.php");?>

	<!-- Settings -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/settings.php");?>

	<!-- Article -->

	<section class="main">

		<article>

			<p class="category">Welcome</p>

			<h2>A Note From Pat Fox: Riverview Hospital CEO</h2>

			<img src="/-/media/photos/thumbnail/pat-fox.png" alt="Thumbnail" style="width: 25%; margin: 0 10px 10px 0; float: left; display: block;" />

			<p>As an employer, we understand addressing the health and wellness needs of our employees is paramount to a positive and productive work environment. Riverview employees are offered multiple opportunities throughout the year to participate in activities that will help them achieve their wellness goals. We feel that if we are going to promote wellness to local businesses and the community, it is important that we do more than simply &ldquo;talk the talk.&rdquo;</p>

			<p>Riverview&rsquo;s Corporate Wellness program, HealthyWorks, offers these same services to a number of companies in Hamilton County. Our services assist employers in keeping their employees healthy through on-site screenings, flu vaccines, educational seminars, and program management.</p>

			<p>This fall, Riverview Hospital and Community Health Network are partnering on an endeavor that will provide an on-site employee health center to Noblesville School employees and their families. The Noblesville Schools Employee Health Center will improve the health status of school district employees and reduce medical costs for the district.</p>

			<p>Of course, we also like for our friends in the community to focus on wellness, because taking care of your health today will benefit you for years to come. Our annual Health Fair will take place on Saturday, October 1 from 8 to 11 a.m. in the lower level of the Women&rsquo;s Pavilion. This year&rsquo;s event will offer low cost screenings as well as flu vaccines. <a href="/article/riverview-health-fair.php">Click here for more information on this year&rsquo;s event</a>.</p>

		</article>

		<section class="read-more">

			<div class="read-more-options group">

				<h3>Read More</h3>

				<p><a href="#top">Back to Top &uarr;</a></p>

			</div>

			<section class="group">

				<article class="previous">
		
					<a href="/">

						<i>&laquo; Previous</i>
		
						<h2>Inside this Issue</h2>

					</a>
		
				</article>

				<article class="next">
		
					<a href="/article/upcoming-events.php">

						<i>Next &raquo;</i>
		
						<h2>Upcoming Events Calendar</h2>

					</a>
		
				</article>

			</section>

		</section>

	</section>

	<!-- Footer -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/footer.php");?>

</body>

</html>