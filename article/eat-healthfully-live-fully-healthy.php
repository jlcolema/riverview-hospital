<!doctype html>

<html lang="en">

<head>

	<meta charset="utf-8" />

	<title>Riverviews : Eat Healthfully, Live Fully Healthy</title>

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

<body class="article eat-healthfully-live-fully-healthy" id="top">

	<!-- Header -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/header.php");?>

	<!-- Settings -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/settings.php");?>

	<!-- Article -->

	<section class="main">

		<article>

			<p class="category">Nutrition</p>

			<h2>Eat Healthfully, Live Fully Healthy</h2>

			<figure class="full-width">

				<img src="/-/media/photos/vegetables.jpg" alt="Vegetables" />

			</figure>

			<p>Eat healthfully,live fully healthy is the mantra of Riverview physician, Dr. Eric Marcotte.While most of us know that choosing the right foods are important for good health and weight-loss we still continue to struggle with these choices.</p>

			<p>As more people struggled with the health and weight-loss battle, he found it important to spread the knowledge he had collected that had helped his patients succeed.</p>

			<p>&ldquo;I was inspired to write the book Food Truths, Food Lies by my patients,&rdquo; explained Dr. Marcotte. &ldquo;Years of watching people struggle with their weight and health led to my research. I looked at why Americans are overweight and what could be done about it. What I found is terrible: the average American eats almost 600 more calories every day now than we did 40 years ago. Combine this with less activity caused by television and computer time and you have our country&rsquo;s current obesity epidemic.&rdquo;</p>

			<figure style="width: 120px; margin: 0 10px 0 0; float: left; display: block;">

				<img src="/-/media/photos/eric-marcotte.jpg" alt="Dr. Eric Marcotte" />

				<figcaption>

					<p>Dr. Eric Marcotte</p>

				</figcaption>

			</figure>

			<p>His research also found that two out of three adults are at least 30 pounds overweight while one in three adult Americans is at least 60 pounds overweight. &ldquo;We eat so many more [calories] because our food has changed but we have not. Fast food was a treat, a novelty 40 years ago and now it&rsquo;s a normal part of most people&rsquo;s lives. Soda pop was served at a fountain or in tiny 8-ounce glass bottles then and now we have self-serve, free refills, and machines filled with 20-ounce bottles.&rdquo;</p>

			<p>What is the most important key to changing the way we eat? Dr. Marcotte says it is to think before you eat. &ldquo;Once people start to realize what they eat and think about whether this or that is a good choice, then change can happen,&rdquo; explains Dr. Marcotte. &ldquo;If I know deep down that the food I put in my mouth actually becomes part of me by tomorrow and stays for years, I&rsquo;ll start thinking about my food and choose to make a change for health.&rdquo;</p>

			<p>By being aware of what is added to the food we eat is vital to our health. Keep in mind, you have to eat better to feel better. Even if that means spending a bit more on organics or purchasing less processed food; the benefits that you reap will be exponential in the end.</p>

			<p><i>Dr. Eric Marcotte is a board certified family practice physician with Riverview Medical Group&rsquo;s Sheridan Family Medicine. He can be reached at (317) 758-4422. Want more information? You can follow Dr. Marcotte at his website, <a href="http://www.doctorfoodtruth.com">DoctorFoodTruth.com</a> and on Twitter <a href="http://www.twitter.com/doctorfoodtruth">@DoctorFoodTruth</a>.</i></p>

		</article>

		<section class="read-more">

			<div class="read-more-options group">

				<h3>Read More</h3>

				<p><a href="#top">Back to Top &uarr;</a></p>

			</div>

			<section class="group">

				<article class="previous">
		
					<a href="/article/free-nutrition-seminars.php">

						<i>&laquo; Previous</i>
		
						<h2>Free Nutrition Seminars</h2>

					</a>
		
				</article>

				<article class="next">
		
					<a href="/article/a-revolution-in-speech-therapy.php">

						<i>Next &raquo;</i>
		
						<h2>A Revolution in Speech Therapy</h2>

					</a>
		
				</article>

			</section>

		</section>

	</section>

	<!-- Footer -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/footer.php");?>

</body>

</html>