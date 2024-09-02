<!doctype html>

<html lang="en">

<head>

	<meta charset="utf-8" />

	<title>Riverviews : Prevention is Key!</title>

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

<body class="article prevention-is-key" id="top">

	<!-- Header -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/header.php");?>

	<!-- Settings -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/settings.php");?>

	<!-- Article -->

	<section class="main">

		<article>

			<p class="category">Health &amp; Wellness</p>

			<h2>Prevention is Key!</h2>

			<p>In keeping with our mission to improve and preserve the health and well-being of those we serve, we are pleased to offer a variety of health profiles (conducted by the Riverview Laboratory), designed to evaluate your current health status via a simple blood draw at a discounted price. A physician order is not required.</p>

			<p>To purchase any of the profiles, visit <a href="riverview.org">riverview.org</a>. There, you will have the opportunity to select the profile(s) you would like to purchase.You are welcome to have your test(s) conducted at a time of your choosing, during Outpatient Lab regular business hours. Additional instructions are provided during the registration process. Results will be provided to you via mail within one week.</p>

			<h3>Women’s Health Profile: $110</h3>

			<p>Please fast for 12 hours for the most accurate results. This profile is a combination of tests specifically designed for women and includes:</p>

			<ul>
				<li>Heart health/lipids (test: Lipid)</li>
				<li>Anemia (tests: Iron Panel and HGB)</li>
				<li>Kidney function (test: BMP)</li>
				<li>Liver function (test: Liver)</li>
				<li>Diabetic (test:A1c)</li>
				<li>Thyroid (tests:TSH and T4)</li>
			</ul>

			<h3>Men’s Health Profile: $110</h3>

			<p>Please fast for 12 hours for the most accurate results. This profile is a combination of tests specifically designed for men and includes:</p>

			<ul>
				<li>Heart health/lipids (test: Lipid)</li>
				<li>Anemia (tests: Iron Panel and HGB)</li>
				<li>Kidney function (test: BMP)</li>
				<li>Liver function (test: Liver)</li>
				<li>Diabetic (test:A1c)</li>
				<li>Thyroid (tests:TSH and T4)</li>
				<li>Prostate (tests: PSA)</li>
			</ul>

			<h3>Nutrition Profile: $65</h3>

			<p>Please fast for 12 hours for the most accurate results. This profile is designed to evaluate your current nutrition status and includes:</p>

			<ul>
				<li>Vitamin B12 (test:Vitamin B12)</li>
				<li>Folate (test: Folate)</li>
				<li>Hemoglobin (test: HGB)</li>
				<li>Heart health/lipids (test: Lipid)</li>
				<li>Glucose (test: Glucose)</li>
			</ul>

			<h3>Heart Health Profile: $55</h3>

			<p>Please fast for 12 hours for the most accurate results. This profile provides an overview of your risk of coronary heart disease and includes:</p>

			<ul>
				<li>Heart health/lipids (test: Lipid)</li>
				<li>High-sensitivity CRP</li>
				<li>Homocysteine</li>
			</ul>

			<h3>Diabetic Profile: $15</h3>

			<p>This profile provides an overview of your risk of Diabetes and includes:</p>

			<ul>
				<li>Diabetic (test:A1c)</li>
				<li>Estimated average glucose</li>
			</ul>

			<h3>Prostate Screening: $25</h3>

			<p>This test includes a prostate screen, which tests for prostate cancer. (test: PSA)</p>

			<h3>Thyroid Profile: $34</h3>

			<p>This test evaluates thyroid function and/or symptoms of hyperthyroidism or hypothyroidism. (tests: TSH and T4)</p>

			<h3>Children’s Health Profile (ages 6-16): $40</h3>

			<p>This test is designed specifically for children. Fasting is not required. Please note this test requires a regular blood draw. This test includes:</p>

			<ul>
				<li>Complete Blood Count</li>
				<li>Heart health/lipids (test: Lipid)</li>
				<li>Diabetic (test: A1c)</li>
			</ul>

			<h3>Blood Typing: $20</h3>

			<p>This test determines your blood group and Rh type. (test: ABO/RH)</p>

			<p><i>A la Carte Tests</i></p>

			<ul>
				<li>Complete Blood Count: $13</li>
				<li>Liver function: $14 (test: Liver)</li>
				<li>Heart health/lipids: $12, Please fast for 12 hours for the most accurate results. (Test: Lipid)</li>
				<li>Kidney function: $14 (test: BMP)</li>
				<li>Diabetic: $18 (test: A1c)</li>
			</ul>

			<aside>

				<h4>Key:</h4>
	
				<dl>
	
					<dt>Anemia (Iron Panel and HGB)</dt>
					<dd>Anemia is a condition that occurs when the number of red blood cells and/or the amount of hemoglobin found in the red blood cells drops below normal. This test is used to evaluate the used to evaluate iron stores in the body.</dd>
	
					<dt>Complete Blood Count</dt>
					<dd>This test evaluates the number of red blood cells in your blood.</dd>
	
					<dt>Diabetic (A1C)</dt>
					<dd>Screens for Diabetes and gives a picture of the average amount of glucose in the blood over the last few months.</dd>
	
					<dt>Glucose (Estimated Glucose Average)</dt>
					<dd>Determines if your blood glucose level is within healthy ranges; to screen for hyperglycemia, hypoglycemia, diabetes, and pre-diabetes.</dd>
	
					<dt>Heart Health (Lipids, hs-CRP and Homocysteine)</dt>
					<dd>This group of tests determines the risk of coronary heart disease. This includes total cholesterol, HDL (High density lipoprotein cholesterol), often called good cholesterol, LDL (low density lipoprotein cholesterol), often called bad cholesterol, and triglycerides.</dd>
	
					<dt>Hemoglobin (HGB)</dt>
					<dd>This test measures the amount of hemoglobin, a protein found in red blood cells, in a blood sample, which is a good indication of the blood’s ability to deliver oxygen to tissues and organs and to transport the waste product carbon dioxide to the lungs, where it is exhaled. If your hemoglobin levels are low, you may have anemia, a condition in which your body is not getting enough oxygen, causing fatigue and weakness.</dd>
	
					<dt>High-sensitivity CRP</dt>
					<dd>Assesses the risk of developing heart disease and cardiovascular risk.</dd>
	
					<dt>Homocysteine</dt>
					<dd>Homocysteine is an amino acid that is produced by the body, usually as a byproduct of consuming meat. Elevated levels of homocysteine in the blood may be associated with atherosclerosis (hardening and narrowing of the arteries) as well as an increased risk of heart attack, stroke, blood clot formation, and possibly Alzheimer’s disease. This tests measures homocysteine levels.</dd>
	
					<dt>Kidney function (BMP)</dt>
					<dd>This test measures current status of your kidneys, blood sugar, electrolyte, and acid/base balance.</dd>
	
					<dt>Liver function</dt>
					<dd>This test screens for liver inflammation and damage.</dd>
	
					<dt>Prostate (PSA)</dt>
					<dd>Screens for prostate cancer.</dd>
	
					<dt>Thyroid (TSH and T4)</dt>
					<dd>Evaluates thyroid function and/or symptoms of hyperthyroidism or hypothyroidism.</dd>
	
					<dt>Vitamin B12/Folate</dt>
					<dd>B12 and folate are B complex vitamins that are necessary for normal red blood cell formation, tissue and cellular repair, and DNA synthesis. This test screens for a deficiencies in either B12 or folate.</dd>

				</dl>

			</aside>

		</article>

		<section class="read-more">

			<div class="read-more-options group">

				<h3>Read More</h3>

				<p><a href="#top">Back to Top &uarr;</a></p>

			</div>

			<section class="group">

				<article class="previous">
		
					<a href="/article/prostate-cancer-screening.php">

						<i>&laquo; Previous</i>
		
						<h2>Prostate Cancer Screening</h2>

					</a>
		
				</article>

				<article class="next">
		
					<a href="/article/mammograms-save-lives.php">

						<i>Next &raquo;</i>
		
						<h2>Mammograms Save Lives</h2>

					</a>
		
				</article>

			</section>

		</section>

	</section>

	<!-- Footer -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/footer.php");?>

</body>

</html>