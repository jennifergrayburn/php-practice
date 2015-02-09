<html>
<head>
	<title>Multiply</title>
</head>

<body>	
	<?php

	function multiply($x, $y)
	{
		return $x * $y;
	}

	?>
	
	<p><?php echo multiply (4, 2); ?></p>
	<p><?php echo multiply (0, 4); ?></p>
	<p><?php echo multiply (900, 32); ?></p>
	<p><?php echo multiply (299999, 23); ?></p>

	</body>