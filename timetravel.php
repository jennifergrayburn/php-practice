<html>
<head>
	<title>Time traveler</title>
</head>


<body>	
	<p><?php

$tests = [1823, 1995, 3043];

/**
*Test if a year is from the past, present or future
*/
function test_year($year)
{

	$value = "nope";

	if($year < 1990){
		$value = "something";
	} elseif ($year <=2020){
		$value = "something else";
} else {
		$value = "even something else";
}
	return $value;
}

echo test_year(1823);
echo test_year(1995);
echo test_year(3043);

/**
*another option I tried below each below
*/
?>

<p><?php
	$yearorigin = 1823;
	
switch($yearorigin) {
	case($yearorigin < "1900"):
		echo "Greetings ye olde visitor! You should try indoor plumbing! It's great!";
		break;
	case($yearorigin < "2020"):
		echo "Hello. I like your shirt.";
		break;
	default:
		echo "We are so so sorry. When does the apocalyse begin?";
		
}

	?></p>

<p>	<?php

	$yearorigin = 1995;
	
switch($yearorigin) {
	case($yearorigin < "1900"):
		echo "Greetings ye olde visitor! You should try indoor plumbing! It's great!";
		break;
	case($yearorigin < "2020"):
		echo "Hello. I like your shirt.";
		break;
	default:
		echo "We are so so sorry. When does the apocalyse begin?";
		
}

	?></p>

	<p><?php

	$yearorigin = 3043;
	
switch($yearorigin) {
	case($yearorigin < "1900"):
		echo "Greetings ye olde visitor! You should try indoor plumbing! It's great!";
		break;
	case($yearorigin < "2020"):
		echo "Hello. I like your shirt.";
		break;
	default:
		echo "We are so so sorry. When does the apocalyse begin?";
		
}

	?></p>
