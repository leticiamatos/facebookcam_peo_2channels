<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>FacebookCam - PEO</title>

	<link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,300,400italic,700,900' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="style/reset.css" type="text/css"/>
	<link rel="stylesheet" href="style/screen.css" type="text/css"/>
</head>

<body>
	
	<!-- Facebook Root -->
	<!-- ========================================================================================================== -->
	<div id="fb-root"></div>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
	      appId      : '372248136241124',                  					        // App ID from the app dashboard
	      channelUrl : 'http://fbcam-qgdoenem.herokuapp.com/',							// Channel file for x-domain comms
	      status     : false,							                                  // Check Facebook Login status
	      xfbml      : true               							                    // Look for social plugins on the page
		  });

			$(document).trigger('fbload');  //  <---- THIS RIGHT HERE TRIGGERS A CUSTOM EVENT CALLED 'fbload'
		};

		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=372248136241124";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<!-- ========================================================================================================== -->
