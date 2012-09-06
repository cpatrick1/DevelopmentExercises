<?php
/*
Problem 34

145 is a curious number, as 1! + 4! + 5! = 1 + 24 + 120 = 145.

Find the sum of all numbers which are equal to the sum of the factorial of their digits.

Note: as 1! = 1 and 2! = 2 are not sums they are not included.
*/

$sums = array();

for ($i=3; $i < 250000; $i++) { 
	$sum = 0;
	for ($j=0; $j < strlen($i); $j++) { 
		$sum += factorial(substr($i, $j, 1));
	}
	if ($sum == $i) {
		$sums[] = $sum;
		echo "$sum == $i<br />";
	}
	
}

echo array_sum($sums);

function factorial($number) 
{ 
  if($number < 1) $number = 1; 
  return array_product( range( 1, $number )); 
}

?>