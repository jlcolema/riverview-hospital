/* Declare a namespace for the site */
var Site = window.Site || {};

/* Create a closure to maintain scope of the '$'
   and remain compatible with other frameworks.  */
(function($) {
	
	//same as $(document).ready();
	$(function() {

		/*-------------------------------------------    
			Settings Toggle
		-------------------------------------------*/

		$(".settings-options").hide();
	
		$(".settings").click(function(){
			$(this).toggleClass("active");
			$('.settings-options').toggleClass("active");

		});

		$(".close").click(function(){
			$(".settings-options").hide();
			$('.settings').toggleClass("active");
		});


		/*-------------------------------------------    
			Key Definitions Toggle
		-------------------------------------------*/

		$("dd").hide();

		$("dt").click(function(){
			$(this).toggleClass("active").next().toggle("fast");
		});


		/*-------------------------------------------    
			Show Prompt if Using Mobile Safari
		-------------------------------------------*/

		if (window.navigator.standalone) {
		        $("#prompt").addClass("hide")
		} else {
		        $("#prompt").addClass("alert")
		} 

		$('#prompt').click(function() {
			$('#prompt').hide('');
		});


		/*-------------------------------------------    
			Font Size
		-------------------------------------------*/

		$(".small").click(function(){

			$(this).addClass("active");

			$('.font-size .normal').removeClass("active");
			$('.font-size .large').removeClass("active");

			$('.main').addClass("small");
			$('.main').removeClass("normal");
			$('.main').removeClass("large");

		});

		$(".normal").click(function(){

			$(this).addClass("active");

			$('.font-size .small').removeClass("active");
			$('.font-size .large').removeClass("active");

			$('.main').addClass("normal");
			$('.main').removeClass("small");
			$('.main').removeClass("large");

		});

		$(".large").click(function(){

			$(this).addClass("active");

			$('.font-size .small').removeClass("active");
			$('.font-size .normal').removeClass("active");

			$('.main').addClass("large");
			$('.main').removeClass("small");
			$('.main').removeClass("normal");

		});

		/*-------------------------------------------    
			Cancel Hyperlink Event
		-------------------------------------------*/

		$(".settings a").click(function(event) {event.preventDefault();});

		$(".font-size a").click(function(event) {event.preventDefault();});

		/*-------------------------------------------    
			Smooth Scrolling
		-------------------------------------------*/
		
			$('a[href*=#]').click(function() {
				try	{
						var duration=1000;
						var easing='swing';
						var newHash=this.hash;
						var target=$(this.hash).offset().top;
						var oldLocation=window.location.href.replace(window.location.hash, '');
						var newLocation=this;
							// make sure it's the same location
							if(oldLocation+newHash==newLocation)
							{
							// animate to target and set the hash to the window.location after the animation
							$('html:not(:animated),body:not(:animated)').animate({ scrollTop: target }, duration, easing, function() {
							// add new hash to the browser location
							window.location.href=newLocation;
						});
						return false;
						}
				} catch(e) {}
			});

	});


	$(window).bind("load", function() {
		
		
	
	});
	
})(jQuery);