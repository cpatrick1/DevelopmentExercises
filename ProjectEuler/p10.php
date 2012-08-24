<?php
/*
Problem 10

The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.

Find the sum of all the primes below two million.
*/

function IsPrime($number) {

	if ($number <= 1) {
        return false;
    }
 
    if ($number == 2){
        return true;
    }
 
    if ($number % 2 == 0) {
        return false;
    }

	for ($i=3; ($i * $i) <= $number; $i+=2) { 
		if ($number % $i == 0) {
			return false;
		}
	}
	
	return true;
}

$finalSum = 0;

for ($i=1; $i < 2000000; $i++) { 
	if (IsPrime($i)) {
		$finalSum += $i;
	}
}

echo $finalSum;


?>