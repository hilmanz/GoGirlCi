
$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide"
	  });
	$( function() {
	  $('.postlist').isotope({
		itemSelector: '.item',
		masonry: {
		  columnWidth: 10
		}
	  });
	});
});

$(document).ready(function() {
	$('#sidebar')
		.theiaStickySidebar({
			additionalMarginTop: 30
		});
	$('#menu').slicknav({
		label: '',
		duration: 1000,
		easingOpen: "easeOutBounce", //available with jQuery UI
		prependTo:'#navbarmobile'
	});
	$( "#showsearch" ).click(function () {
		$( ".searchbox-container" ).show();
	 });
	$( ".close-search" ).click(function () {
		$( ".searchbox-container" ).hide();
	 });
	$('.showPopup').magnificPopup({
	  type: 'inline',

	  fixedContentPos: false,
	  fixedBgPos: true,

	  overflowY: 'auto',

	  closeBtnInside: true,
	  preloader: false,
	  
	  midClick: true,
	  removalDelay: 300,
	  mainClass: 'my-mfp-zoom-in'
	});
});