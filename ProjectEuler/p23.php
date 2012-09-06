<?php
/*
Problem 23

A perfect number is a number for which the sum of its proper divisors is exactly equal to the number. For example, the sum of the proper divisors of 28 would be 1 + 2 + 4 + 7 + 14 = 28, which means that 28 is a perfect number.

A number n is called deficient if the sum of its proper divisors is less than n and it is called abundant if this sum exceeds n.

As 12 is the smallest abundant number, 1 + 2 + 3 + 4 + 6 = 16, the smallest number that can be written as the sum of two abundant numbers is 24. By mathematical analysis, it can be shown that all integers greater than 28123 can be written as the sum of two abundant numbers. However, this upper limit cannot be reduced any further by analysis even though it is known that the greatest number that cannot be expressed as the sum of two abundant numbers is less than this limit.

Find the sum of all the positive integers which cannot be written as the sum of two abundant numbers.

//PHP too inefficient to solve
//pseudo solved
*/


$abundantNumbers = array();
$sum = 0;

for ($i=1; $i < 1000; $i++) { 
	if (!isAbundantSum($i)) {
		$sum += $i;
		//echo "Not Sum: $i <br />";
	}
}

echo $sum;


function isAbundantSum($number) {
	for ($j=0,$k=$number; $j <= $k ; $j++,$k-- ) { 
		if (isAbundantNumberSetArray($j) && isAbundantNumberSetArray($k)) {
			return true;
		}
	}
}

function isAbundantNumberSetArray($number) {
	global $abundantNumbers;

	if (array_key_exists($number, $abundantNumbers)) {
		return $abundantNumbers[$number];
	} else {
		return isAbundantNumber($number);
	}
}

function isAbundantNumber($number) {

	if (array_sum(getFactors($number)) > $number) {
		return true;
	} else {
		return false;
	}
}

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