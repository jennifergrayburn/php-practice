<html>
<head>
	<title>Seconds to Years</title>
</head>

<body>	
	<?php

	function divide($seconds, $conversion)
	{
		return $seconds / $conversion;
	}

	$seconds = array("600000000", "60", "40000.33");

	foreach($seconds as $second){
		$years = divide($second, 31536000);
		echo "$second seconds is $years years.</br>";
	}

	 

	?>
