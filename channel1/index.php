<?php

	include("header.php");
	include("../google_analytics.php");
	
	// create the Facebook Graph SDK object
	require '../src/facebook.php';
	$facebook = new Facebook(array(
		'appId'=>'510114585744962', // replace with your value
		'secret'=>'a807d022e73d9c2716d5d6915d6967ff' // replace with your value
	));

	$signedRequest = $facebook->getSignedRequest();
	
	// Inspect the signed request
	$unlike = ($signedRequest['page']['liked'] == 1)? "" : "_unlike";
	include("video" . $unlike . ".php");

	include("../footer.php");
	
?>