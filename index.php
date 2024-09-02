<!doctype html>

<html lang="en" manifest="riverviews.manifest">

<head>

	<meta charset="utf-8" />

	<title>Riverviews</title>

	<meta name="description" content="Here is the description of your project." />
	<meta name="keywords" content="" />

	<meta name="author" content="Your Name Here" />
	<meta name="Copyright" content="Copyright 2011 Riverviews. All Rights Reserved." />

	<meta name="DC.title" content="Riverviews" />
	<meta name="DC.subject" content="What this site is about." />
	<meta name="DC.creator" content="Who made this site." />

	<meta name="google-site-verification" content="" />

	<link rel="apple-touch-startup-image" href="http://mobile.riverview.org/-/media/poster.png">

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

<body class="home" id="top">

	<!-- Header -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/header.php");?>

	<!-- Settings -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/settings.php");?>

	<!-- Articles -->

	<section class="articles">

		<article class="highlighted">

			<a href="/article/mammograms-save-lives.php">

				<img src="/-/media/photos/thumbnail/featured-thumbnail.png" alt="Featured Thumbnail" />

				<div class="header">

					<h2>Mammograms Save Lives</h2>

					<p>August 23</p>

				</div>

				<h3>Featured</h3>

			</a>

		</article>

		<h2>Inside This Issue <i>Summer 2011</i></h2>

		<article>

			<a href="/article/a-note-from-pat-fox.php">

				<img src="/-/media/photos/thumbnail/pat-fox.png" alt="Pat Fox, Riverview Hospital CEO" />

				<div class="header">

					<h2>A Note From Pat Fox: Riverview Hospital CEO</h2>

					<p>August 23 &bull; By Pat Fox</p>

				</div>

			</a>

		</article>

		<article>

			<a href="/article/upcoming-events.php">

				<img src="/-/media/art/calendar.png" alt="Calendar" />

				<div class="header">

					<h2>Upcoming Events Calendar</h2>

					<p>August 23</p>

				</div>

			</a>

		</article>

		<article>

			<a href="/article/peripheral-arterial-disease.php">

				<img src="/-/media/photos/thumbnail/peripheral-arterial-disease.png" alt="Peripheral Arterial Disease" />

				<div class="header">

					<h2>Peripheral Arterial Disease: The Silent Killer</h2>

					<p>August 23 &bull; By Russell Dilley, MD</p>

				</div>

			</a>

		</article>

		<article>

			<a href="/article/what-shape-is-your-vascular-system-in.php">

				<img src="/-/media/photos/thumbnail/vascular-system.png" alt="What Shape is Your Vascular System In?" />

				<div class="header">

					<h2>What Shape is Your Vascular System In?</h2>

					<p>August 23</p>

				</div>

			</a>

		</article>

		<article>

			<a href="/article/prostate-cancer-screening.php">

				<img src="/-/media/photos/thumbnail/no-thumbnail.png" alt="Thumbnail" />

				<div class="header">

					<h2>Prostate Cancer Screening</h2>

					<p>August 23</p>

				</div>

			</a>

		</article>

		<article>

			<a href="/article/prevention-is-key.php">

				<img src="/-/media/photos/thumbnail/no-thumbnail.png" alt="Thumbnail" />

				<div class="header">

					<h2>Prevention is Key!</h2>

					<p>August 23</p>

				</div>

			</a>

		</article>

		<article>

			<a href="/article/breast-cancer-survivor-celebration.php">

				<img src="/-/media/photos/thumbnail/celebration.png" alt="Breast Cancer Survivor Celebration" />

				<div class="header">

					<h2>Breast Cancer Survivor Celebration</h2>

					<p>August 23</p>

				</div>

			</a>

		</article>

		<article>

			<a href="/article/riverview-health-fair.php">

				<img src="/-/media/photos/thumbnail/no-thumbnail.png" alt="Thumbnail" />

				<div class="header">

					<h2>Riverview Health Fair</h2>

					<p>August 23</p>

				</div>

			</a>

		</article>

		<article>

			<a href="/article/kids-day.php">

				<img src="/-/media/photos/thumbnail/kids-day.png" alt="Kid's Day" />

				<div class="header">

					<h2>Kid&rsquo;s Day</h2>

					<p>August 23</p>

				</div>

			</a>

		</article>

		<article>

			<a href="/article/impacting-the-community.php">

				<img src="/-/media/photos/thumbnail/dedicated.png" alt="M&I Bank is Dedicated to Impacting the Community" />

				<div class="header">

					<h2>M&amp;I Bank is Dedicated to Impacting the Community</h2>

					<p>August 23</p>

				</div>

			</a>

		</article>

		<article>

			<a href="/article/free-nutrition-seminars.php">

				<img src="/-/media/photos/thumbnail/free-nutrition-seminars.png" alt="Free Nutrition Seminars" />

				<div class="header">

					<h2>Free Nutrition Seminars</h2>

					<p>August 23</p>

				</div>

			</a>

		</article>

		<article>

			<a href="/article/eat-healthfully-live-fully-healthy.php">

				<img src="/-/media/photos/thumbnail/eat-healthfully.png" alt="Eat Healthfully, Live Fully Healthy" />

				<div class="header">

					<h2>Eat Healthfully, Live Fully Healthy</h2>

					<p>August 23</p>

				</div>

			</a>

		</article>

		<article>

			<a href="/article/a-revolution-in-speech-therapy.php">

				<img src="/-/media/photos/thumbnail/speech-therapy.png" alt="A Revolution in Speech Therapy" />

				<div class="header">

					<h2>A Revolution in Speech Therapy</h2>

					<p>August 23</p>

				</div>

			</a>

		</article>

		<article>

			<a href="/article/letter-from-the-president.php">

				<img src="/-/media/photos/thumbnail/president.png" alt="Letter from the President" />

				<div class="header">

					<h2>Letter from the President</h2>

					<p>August 23</p>

				</div>

			</a>

		</article>

		<article>

			<a href="/article/gifting-opportunity.php">

				<img src="/-/media/photos/thumbnail/riverview-hospital-foundation.png" alt="Don&rsquo;t Miss Out on Gifting Opportunity" />

				<div class="header">

					<h2>Don&rsquo;t Miss Out on Gifting Opportunity</h2>

					<p>August 23</p>

				</div>

			</a>

		</article>

		<article>

			<a href="/article/a-heartfelt-thanks.php">

				<img src="/-/media/photos/thumbnail/a-heartfelt-thanks.png" alt="A Heartfelt Thanks" />

				<div class="header">

					<h2>A Heartfelt Thanks</h2>

					<p>August 23</p>

				</div>

			</a>

		</article>

		<section class="read-more">

			<div class="read-more-options group">

				<h3>Read More</h3>

				<p><a href="#top">Back to Top &uarr;</a></p>

			</div>

			<section class="group">

				<article class="previous">
		
					<a href="#"></a>

				</article>

				<article class="next">
		
					<a href="/article/a-note-from-pat-fox.php">

						<i>Next &raquo;</i>
		
						<h2>A Note From Pat Fox: Riverview Hospital CEO</h2>

					</a>
		
				</article>

			</section>

		</section>

	</section>

	<!-- Footer -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/footer.php");?>

	<div id="prompt" class="add-to-home-screen">

		<h5>For Quicker Access&hellip;</h5>

		<p>Install this web app on your phone. Tap on the arrow below and choose <b>Add to Home Screen</b>.</p>

		<div class="riser"></div>

		<div class="close-prompt"></div>

	</div>

</body>

</html>