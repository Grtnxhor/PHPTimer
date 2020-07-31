<?php

session_start();

?>

<div id="response"></div>
<div id="demo"></div>

<script>
	
	setInterval(function()
	{

		var xhr = new  XMLHttpRequest();
		xhr.open("GET","response.php", false);
		xhr.send(null);

		document.getElementById("response").innerHTML = xhr.responseText;


		var hms = xhr.responseText;   // your input string
		var a = hms.split(':'); // split it at the colons

		// minutes are worth 60 seconds. Hours are worth 60 minutes.
		var seconds = (+a[0]) * 60 * 60 + (+a[1]) * 60 + (+a[2]); 


		if(seconds == 30){
			alert("you have 10inutes left");
		} else {

		if(seconds == 0){

			clearInterval();
			alert("timep");
		}
	}
		
	},1000);

	

</script>