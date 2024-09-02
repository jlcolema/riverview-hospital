<!doctype html>

<html lang="en" manifest="riverviews.manifest">

<head>

	<meta charset="utf-8" />

	<title>Riverviews : Legal</title>

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

<body class="article legal" id="top">

	<!-- Header -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/header.php");?>

	<!-- Settings -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/settings.php");?>

	<!-- Article -->

	<section class="main">

		<article>

			<p class="category">Category</p>

			<h2>Legal</h2>

			<p>Riverviews is published for the health of the Hamilton County Community.</p>

			<ul>
				<li><strong>Riverview Hospital</strong> CEO Pat Fox</li>
				<li><strong>Marketing Director</strong> Sarah Estell</li>
				<li><strong>Public Relations Coordinator</strong> Jennifer Atkinson</li>
				<li>Public Relations Coordinator</strong> Julia Lowe</li>
				<li><strong>Marketing Coordinator</strong> Stacy Schleeter</li>
			</ul>

			<p>Questions or Comments? Call: (317) 776-7235</p>

			<p>Riverview does not use patient data or endanger patient privacy to mail Riverviews. You are not receiving this publication because you have been a patient of Riverview. Your address has been purchased through a national service. Riverview does not have the ability to remove any names from this list. If you wish to no longer receive unsolicited mail, please contact the Direct Marketing Association for more information at <a href="www.dmaconsumers.org">www.dmaconsumers.org</a>. If you&rsquo;d rather not receive this publication, please pass it on to a friend or family member.</p>

			<p>Thank you for your understanding.</p>

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
		
					<a href="#"></a>
		
				</article>

			</section>

		</section>

	</section>

	<!-- Footer -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/footer.php");?>

</body>

</html>