<html>
<head>
<title>Samahan ng mga Mag-aaral ng Sikolohiya</title>
<link rel="stylesheet" type="text/css" href="master.css" />

<!--SLIDER START-->
<meta charset="utf-8">

	<link rel="shortcut icon" href="demos/images/favicon.ico">
	<link rel="apple-touch-icon" href="demos/images/apple-touch-icon.png">

	<!-- jQuery (required) & jQuery UI (for this demo only) -->
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

	<!-- Anything Slider optional plugins -->
	<script src="js/jquery.easing.1.2.js"></script>

	<!-- Anything Slider -->
	<link rel="stylesheet" href="css/anythingslider.css">
	<script src="js/jquery.anythingslider.js"></script>

	<!-- Ideally, add the stylesheet(s) you are going to use here,
	otherwise they are loaded and appended to the <head> automatically and will over-ride the IE stylesheet below -->
	<link rel="stylesheet" href="css/theme-metallic.css" media="screen">

	<!-- AnythingSlider optional FX extension -->
	<script src="js/jquery.anythingslider.fx.js"></script>

	<!-- Demos page only -->
	<link rel="stylesheet" href="demos/css/page.css">
	<link rel="stylesheet" href="demos/colorbox/colorbox.css">
	<script src="demos/js/demo.js"></script>
	<script src="demos/colorbox/jquery.colorbox-min.js"></script>

	<!-- Syntax highlighting -->
	<script src="http://mottie.github.com/tablesorter/docs/js/chili/jquery.chili-2.2.js"></script>
	<script src="http://mottie.github.com/tablesorter/docs/js/chili/recipes.js"></script>
<!--SLIDER END-->


</head>

<body style="background:url('bg.png'); background-size: 100% 100%;">
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '169779793155168', // App ID
      channelUrl : 'http://dlsu-sms.host-ed.me', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    // Additional initialization code here
  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=169779793155168";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class='whole'>
<br><br><br><br><br><br>
<div id="demo2">

   <!-- AnythingSlider #2 -->
   <ul id="slider2">
    <li>
     <img class="expand" src="demos/images/1.jpg" alt="" style="max-height:500px;height:auto;width:100%;"/>
    </li>
	
    <li>
     <img class="expand" src="demos/images/2.jpg" alt="" style="max-height:500px;height:auto;width:100%;"/>
    </li>
	
    <li>
     <img class="expand" src="demos/images/3.jpg" alt="" style="max-height:500px;height:auto;width:100%;"/>
    </li>
	
    <li>
     <img class="expand" src="demos/images/4.jpg" alt="" style="max-height:500px;height:auto;width:100%;"/>
    </li>
	
    <li>
     <img class="expand" src="demos/images/5.jpg" alt="" style="max-height:500px;height:auto;width:100%;"/>
    </li>
	
	<li>
     <img class="expand" src="demos/images/6.jpg" alt="" style="max-height:500px;height:auto;width:100%;"/>
    </li>
	
   </ul>
   <!-- END AnythingSlider #2 -->

  </div>
 
<p align=center>
<div class="fb-comments" data-href="http://dlsu-sms.host-ed.me" data-num-posts="7" data-width="1000"></div>
</p>
</div>


<div class='banner'>

	<div class='cdiv'>
	<br>
	<p align=center>
		<a href="SMS_home.php"><img src="logo.png"/></a>
	</p>
	</div>
	
	<div class='rdiv'><br>
	<br><br><br><br><br><br><br>
	<p align=center>
		<a href="SMS_aboutus.php"><img src="about us.png"/></a>
	</p>
	</div>
	
	<div class='ldiv'>
	<br><br><br><br><br><br><br><br>
	<p align=center>
		<a href="SMS_calendar.php"><img src="calendar.png"/></a>
	</p>
	</div>

</div>

</body>

</html>