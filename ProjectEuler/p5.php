<?php 

/*
2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
*/

$inputNumber = 20;

function GetFactors($number) {

	$factors = array();

	for ($i=2; $i <= $number; $i++) { 
		while ($number % $i == 0) {
			$factors[$i] += 1;
			$number = $number / $i;
		}
	}

	return $factors;

}

$uniqueFactors = array();

for ($i=1; $i <= $inputNumber; $i++) { 

	$myFactors = GetFactors($i);

	foreach ($myFactors as $key => $value) {
		//echo 'key: ' . $key . '; value: ' . $value . '<br />';

		if (!(array_key_exists($key, $uniqueFactors) && ($uniqueFactors[$key] > $value))) {
			$uniqueFactors[$key] = $value;
		}
	}

}

$factorProduct = 1;

foreach ($uniqueFactors as $key => $value) {
	//echo 'key: ' . $key . '; value: ' . $value . '<br />';
	$factorProduct *= pow($key, $value);
	//echo 'factorProduct: ' . $factorProduct . '<br />';
}

echo 'factorProduct: ' . $factorProduct . '<br />';



?>