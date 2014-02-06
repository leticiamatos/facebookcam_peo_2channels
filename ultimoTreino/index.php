<?php
	include("header.php");
	include("../google_analytics.php");
?>



<script>
	if (document.referrer.match(/facebook[.]com/gi) != null){
		window.location.href = "isFace.php";
	}else{
		window.location.href = "noFace.php";
	}

</script>



<?php
	include("../footer.php");
?>