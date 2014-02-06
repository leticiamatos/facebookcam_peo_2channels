<?php

	include("header.php");
	include("../google_analytics.php");
	
	// create the Facebook Graph SDK object
	require '../src/facebook.php';
	$facebook = new Facebook(array(
		'appId'=>'280309662087326', // replace with your value
		'secret'=>'0eabe56099b6da99168d7a6d61c2516f' // replace with your value
	));

	$signedRequest = $facebook->getSignedRequest();
	
	// Inspect the signed request
	$unlike = ($signedRequest['page']['liked'] == 1)? "" : "_unlike";
	include("video" . $unlike . ".php");
	
	include("../footer.php");
	
?>