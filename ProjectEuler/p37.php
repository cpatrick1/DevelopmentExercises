<?php
/*
Problem 37

The number 3797 has an interesting property. Being prime itself, it is possible to continuously remove digits from left to right, and remain prime at each stage: 3797, 797, 97, and 7. Similarly we can work from right to left: 3797, 379, 37, and 3.

Find the sum of the only eleven primes that are both truncatable from left to right and right to left.

NOTE: 2, 3, 5, and 7 are not considered to be truncatable primes.
*/
$trunc = array();

for ($i=8; $i < 1000000; $i++) { 
	if (truncatablePrime($i)) {
		$trunc[] = $i;		
	}

}

foreach ($trunc as $value) {
	echo $value.'<br />';
}
echo '-----------------------<br />';
echo array_sum($trunc);

function truncatablePrime($number) {
	if (IsPrime($number)) {
		for ($j=1; $j < strlen($number); $j++) { 
			if (!IsPrime(substr($number, 0, $j)) || !IsPrime(substr($number, -$j))) {
			 	return false;
			 	//echo 'number='.$i.' / pos='.substr($i, 0, $j).' / neg='.substr($i, 0, -$j).'<br />';
			 	//echo '*****************<br />';
			} 
		} 
		return true;
	}
	return false;
}

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

	for ($i=3; $i <= sqrt($number); $i+=2) { 
		if ($number % $i == 0) {
			return false;
		}
	}
	
	return true;
}


?>