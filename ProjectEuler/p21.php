<?php
/*
Problem 21

Let d(n) be defined as the sum of proper divisors of n (numbers less than n which divide evenly into n).
If d(a) = b and d(b) = a, where a <> b, then a and b are an amicable pair and each of a and b are called amicable numbers.

For example, the proper divisors of 220 are 1, 2, 4, 5, 10, 11, 20, 22, 44, 55 and 110; therefore d(220) = 284. The proper divisors of 284 are 1, 2, 4, 71 and 142; so d(284) = 220.

Evaluate the sum of all the amicable numbers under 10000.
*/

$factors = array();

for ($a=0; $a <= 10000; $a++) { 
	$b = array_sum(getFactors($a));
	$c = array_sum(getFactors($b));
	if (($a == $c) && ($a != $b) ) {
		$factors[] = $a;
	}
}

echo array_sum($factors).'<br />';

function getFactors($number) {
//list each factor (28 = 14,7,4,2,1)
//NOT including original number	
	$factors = array();

	for ($i=1; ($i*2) <= $number; $i++) { 
		if ($number % $i == 0) {
			$factors[] = $i;
		}
	}
	return $factors;
}


?>