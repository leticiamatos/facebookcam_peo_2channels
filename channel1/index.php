<?php

	include("header.php");
	include("../google_analytics.php");
	
	// create the Facebook Graph SDK object
	require '../src/facebook.php';
	$facebook = new Facebook(array(
		'appId'=>'325693580861604', // replace with your value
		'secret'=>'44e2ac23f94c7056b382565d91639566' // replace with your value
	));

	$signedRequest = $facebook->getSignedRequest();
	
	// Inspect the signed request
	$unlike = ($signedRequest['page']['liked'] == 1)? "" : "_unlike";
	include("video" . $unlike . ".php");

	include("../footer.php");
	
?>