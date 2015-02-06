<html>
<head>
	<title>Time Travel</title>
</head>

<body>	
	<?php

function divide($x, $y)
	{
		return $x / $y;
	}

	$seconds = array("600000000", "60", "40000.33");
	$sum = 0; 
	
	foreach ($seconds as $second) {
		$sum += $second / 60 / 60 / 24 / 365;
		echo "$second seconds is $sum years.<br/>";
}


	?>
