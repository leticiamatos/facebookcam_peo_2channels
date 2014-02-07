
<script src="https://connect.facebook.net/en_US/all.js"></script>
<script>
	$("#ch1").click(function(e){
		e.preventDefault();
		if (document.referrer.match(/facebook[.]com/gi) != null){
			top.location.href = $(this).attr('href');
		}else{
			top.location.href = "http://portalexamedeordem.com.br/canal2";
		}
	});
	$("#ch2").click(function(e){
		e.preventDefault();
		if (document.referrer.match(/facebook[.]com/gi) != null){
			top.location.href = $(this).attr('href');
		}else{
			top.location.href = "http://portalexamedeordem.com.br/canal1";
		}
	});
</script>
</body>
</html>