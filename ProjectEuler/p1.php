<?php
/*
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

Find the sum of all the multiples of 3 or 5 below 1000.
*/

$maxVal = 1000;

$multiples = array();

for ($i=0; $i < $maxVal; $i++) { 
	if (($i % 3 == 0)||($i % 5 == 0)) {
		$multiples[] = $i;
	}
}

$sum = 0;

foreach ($multiples as $multiple) {
	$sum += $multiple;
}

echo $sum;

?>