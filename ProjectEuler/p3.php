<?php 

/*
The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?
*/

$inputNumber = 600851475143;

function GetFactors($number) {

	$factors = array();

	for ($i=2; $i <= $number; $i++) { 
		while ($number % $i == 0) {
			$factors[] = $i;
			$number = $number / $i;
		}
	}

	return $factors;

}

$myFactors = GetFactors($inputNumber);

foreach ($myFactors as $factor) {
	echo 'factor: ' . $factor . '<br />';
}

echo 'MaxFactor: ' . max($myFactors);

?>