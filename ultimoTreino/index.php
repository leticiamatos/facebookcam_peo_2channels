<?php

	include("header.php");
	include("../google_analytics.php");
	
	$fb = 0;
	echo "FB FALSE ->  " . $fb;
	echo "<script>";
		echo "alert(document.referrer.match(/facebook[.]com/gi));";
		$fb = echo "document.referrer.match(/facebook[.]com/gi)";
	echo "</script>";
	
		echo "FB ->  " . $fb;

	if ($fb == "facebook.com"){
		// create the Facebook Graph SDK object
		require '../src/facebook.php';
		$facebook = new Facebook(array(
			'appId'=>'372248136241124', // replace with your value
			'secret'=>'585350d769d4e1f67a32b5b5c34bd256' // replace with your value
		));

		$signedRequest = $facebook->getSignedRequest();
		
		// Inspect the signed request
		$unlike = ($signedRequest['page']['liked'] == 1)? "" : "_unlike";
		include("video" . $unlike . ".php");
	}else{
		include("video.php");
	}

	include("../footer.php");
	
?>