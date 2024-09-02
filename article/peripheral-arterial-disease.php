<!doctype html>

<html lang="en">

<head>

	<meta charset="utf-8" />

	<title>Riverviews : Peripheral Arterial Disease</title>

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

<body class="article peripheral-arterial-disease" id="top">

	<!-- Header -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/header.php");?>

	<!-- Settings -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/settings.php");?>

	<!-- Article -->

	<section class="main">

		<article>

			<p class="category">Screenings</p>

			<h2>Peripheral Arterial Disease: The Silent Killer</h2>

			<p class="byline">By Russell Dilley, MD</p>

			<figure class="full-width">

				<img src="/-/media/photos/couple-golfing.jpg" alt="Couple golfing." />

			</figure>

			<p>Between 8 and 10 million Americans may be affected by peripheral arterial disease (PAD), a potentially crippling disease that can lead to serious heart and circulatory diseases if left untreated. Statistics show that people with PAD are at an increased risk to suffer from a heart attack, stroke or transient ischemic attack.</p>

			<p>PAD is mostly caused by atherosclerosis or &ldquo;hardening of the arteries.&rdquo; Plaque builds up in the blood vessels that carry oxygen throughout the body, reduces the blood flow, and in serious cases, can even block major arteries completely.</p>

			<p>The most serious risk factors are high blood pressure, diabetes, smoking, age, metabolic syndrome, coronary heart disease and high cholesterol. As you would expect, PAD tends to run in families.</p>

			<p>PAD typically begins with minor leg or foot discomfort. People often feel tiredness or cramping in their leg muscles when they walk or exercise. They may not even bother to tell their doctor about it because the symptoms go away when they stop and rest. However, rest is a double-edged sword. When exercise is reduced or eliminated, risks of heart attacks and other complications from the artherosclerosis increase greatly.</p>

			<p>But there is some good news. The most serious complications of PAD can be prevented. When a patient presents with PAD, the first course of action is often &lsquo;risk factor modification.&rsquo; What does this mean?</p>

			<p>If PAD is more advanced, the treatment options become more advanced as well. A board certified specialist in vascular disease can help determine the best course of treatment for your particular situation.</p>

			<p>Balloon angioplasty, with or without stent placement, is one option. Many people think of this as a heart procedure, but they are also successfully performed in the legs. Balloon angioplasty can open blocked arteries and improve circulation. An arteriogram is required to determine whether or not this is the best course of treatment.</p>

			<p>When balloon angioplasty is not enough, surgery may be required. In surgical revascularization, a vein from the leg is taken and used as a replacement artery. This procedure typically results in the return of normal circulation to the leg and foot.</p>

			<p><i>Russell Dilley, MD is board certified vascular surgeon. He is on staff at the Riverview Heart and Vascular Center. Dr. Dilley shares his Riverview location with Jeffrey Weinberger, MD, who is also a board eligible vascular surgeon. He can be reached at (317) 353-9338.</i></p>

		</article>

		<section class="read-more">

			<div class="read-more-options group">

				<h3>Read More</h3>

				<p><a href="#top">Back to Top &uarr;</a></p>

			</div>

			<section class="group">

				<article class="previous">
		
					<a href="/article/upcoming-events.php">

						<i>&laquo; Previous</i>
		
						<h2>Upcoming Events</h2>

					</a>
		
				</article>

				<article class="next">
		
					<a href="/article/what-shape-is-your-vascular-system-in.php">

						<i>Next &raquo;</i>
		
						<h2>What Shape is Your Vascular System In?</h2>

					</a>
		
				</article>

			</section>

		</section>

	</section>

	<!-- Footer -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/footer.php");?>

</body>

</html>