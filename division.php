<html>
<head>
	<title>Division</title>
</head>

<body>	
	<?php

	function divide($x, $y)
	{
		if ($y == 0)
		{
			$y = $x;}
		return $x / $y;
	}

	?>
	
	<p><?php echo divide(4, 2); ?></p>
	<p><?php echo divide(0, 4); ?></p>
	<p><?php echo divide(4, 0); ?></p>
	<p><?php echo divide(900, 32); ?></p>

	</body>