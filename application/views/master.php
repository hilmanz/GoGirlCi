<!DOCTYPE html>
<!--[if lt IE 7]> <html dir="ltr" lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->
<head>
<?php include("meta.php");?>

</head>
<body id="master-pages">
 <script type="text/javascript">
		$.getScript('//connect.facebook.net/en_US/all.js', function(){
			FB.init({
			  appId: '946337515433122',
			});  
		 });
	
	
		window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
	
        </script>
<section id="container">
	<?php include("header.php");?>
		
	<section id="main-content">
        <div class="container">
		
			<?php include("home.php");?>
		
     		<a href="http://www.cerita-kita.co.id/about" class="aboutlink">About Cerita Kita</a>
            <a href="#" class="copy">&copy; 2015. All rights reserved.</a>
        </div>
    </section><!-- end #main-content-->
</section><!-- end #container-->   
       
{literal}

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-867847-67', 'auto');
  ga('send', 'pageview');

</script>


{/literal}   
        	
</body>
<!--Core js-->

	<script src="assets/vendor/slicknav/jquery.slicknav.min.js"></script>
	<script src="assets/vendor/jquery.stellar.js"></script>
	<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
	<script src="assets/vendor/owl-carousel/owl.carousel.js"></script>
	<script src="assets/vendor/wowanimate/wow.js"></script>
	<script src="assets/vendor/flexslider/jquery.flexslider-min.js"></script>
	<script src="assets/vendor/isotope/isotope.js"></script>
	<script src="assets/vendor/stickysidebar/theia-sticky-sidebar.js"></script>
	<script src="assets/vendor/custom.js"></script>
	

</html>
