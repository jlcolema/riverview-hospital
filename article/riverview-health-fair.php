<!doctype html>

<html lang="en">

<head>

	<meta charset="utf-8" />

	<title>Riverviews : Riverview Health Fair</title>

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

<body class="article riverview-health-fair" id="top">

	<!-- Header -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/header.php");?>

	<!-- Settings -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/settings.php");?>

	<!-- Article -->

	<section class="main">

		<article>

			<p class="category">Events</p>

			<h2>Riverview Health Fair</h2>

			<h3>Saturday, October 1 from 8-11 AM</h3>

			<p>Be sure to mark your calendars for the Riverview Health Fair taking place Saturday, October 1 from 8 to 11 AM. The event will be held in the lower level of the Riverview Women&rsquo;s Pavilion at Riverview Hospital, 395 Westfield Road, Noblesville. For the easiest access to the Health Fair and parking, be sure to enter through entrance 11 on the east side of the hospital. To register for this year&rsquo;s event, visit <a href="riverview.org">riverview.org</a>. For more information, call (317) 770-5835.

			<p>The Health Fair has discounted offerings to help you stay on top of your health!You won&rsquo;t want to miss out on the following:</p>

			<h4>Flu Shots: $20 (Cash, check, charge or Medicare* only)</h4>

			<p>Riverview Hospital will offer flu shots on a first-come, first-served basis. Children age 18 years and younger must be accompanied by an adult.</p>

			<p><i>* If you are a Medicare patient and wish to bill your flu shot to Medicare, you must have your Medicare card with you at the Health Fair.</i></p>

			<h4>Blood Chemistry Profile: $20 (Cash, check or charge) / with liver enzymes, $25</h4>

			<p>Adults age 18 and older can take part in a blood chemistry profile screening. The profile measures &ldquo;good&rdquo; and &ldquo;bad&rdquo; cholesterol; triglycerides; kidney function; protein and electrolytes. All participants must fast for 12 hours prior to this test for an accurate result. Results will be mailed in approximately two weeks.</p>

			<h4>A1C Screening: $20 (Cash, check or charge.)</h4>

			<p>This test screens for diabetes and gives a picture of the average amount of glucose in the blood over the last few months.</p>

			<h4>Blood Type: $20 (Cash, check or charge.)</h4>

			<p>This test determines your blood group and Rh type.</p>

			<aside>

				<h3>Check out this year&rsquo;s Health Fair and it&rsquo;s New Location and Date</h3>

				<p><strong>When:</strong> Saturday, October 1</p>

				<p><strong>Where:</strong> Lower Level of the Riverview Women&rsquo;s Pavilion, Entrance 11</p>

				<p><strong>Time:</strong> 8-11 am</p>

			</aside>

		</article>

		<section class="read-more">

			<div class="read-more-options group">

				<h3>Read More</h3>

				<p><a href="#top">Back to Top &uarr;</a></p>

			</div>

			<section class="group">

				<article class="previous">
		
					<a href="/article/breast-cancer-survivor-celebration.php">

						<i>&laquo; Previous</i>
		
						<h2>Breast Cancer Survivor Celebration</h2>

					</a>
		
				</article>

				<article class="next">
		
					<a href="/article/kids-day.php">

						<i>Next &raquo;</i>
		
						<h2>Kid&rsquo;s Day</h2>

					</a>
		
				</article>

			</section>

		</section>

	</section>

	<!-- Footer -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/footer.php");?>

</body>

</html>