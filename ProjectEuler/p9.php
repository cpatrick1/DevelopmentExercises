<?php

/*
A Pythagorean triplet is a set of three natural numbers, a < b < c, for which, a2 + b2 = c2

For example, 32 + 42 = 9 + 16 = 25 = 52.

There exists exactly one Pythagorean triplet for which a + b + c = 1000.
Find the product abc. 
*/

function VerifyPythagoreanTriplet($a, $b, $c) {

	if ($a < $b && $b < $c) {
		if (pow($a, 2) + pow($b, 2) == pow($c, 2)) {
			return true;
		} 
	}

	return false;
}

for ($i=0; $i < 1000; $i++) { 
	for ($j=0; $j < $i; $j++) { 
		for ($k=0; $k < $j; $k++) { 
			if ($k + $j + $i == 1000) {
				if (VerifyPythagoreanTriplet($k, $j, $i)) {
					echo 'Found It: ' . $k . ', ' . $j . ', ' . $i . '<br />';
					echo 'Pythagorean Triplet: ' . pow($k, 2) . ' + ' . pow($j, 2) . ' = ' . pow($i, 2) . '<br />';
					echo 'Sum: ' . $k . ' + ' . $j . ' + ' . $i . ' = ' . ($k + $j + $i) . '<br />';
					echo 'Product (solution): ' . $k . ' X ' . $j . ' X ' . $i . ' = ' . ($k * $j * $i) . '<br />';
					
				}
			}
		}
	}
}






?>