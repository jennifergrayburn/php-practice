<html>
<head>
	<title>Author Assignment</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>	
	<h1>Charles Dickens died in 1870.</h1>
	<?php $authors = array('Charles Dickens, 1870',
	'William Thackeray, 1863',
	'Anthony Troliope, 1882',
	'Gerard Manley Hopkins, 1889',
	);?>
	
	<ul id="authors">
	<?php foreach ($authors as $author) {
		print "<li>$author</li>";
	}
	
	?>	
	</ul>


