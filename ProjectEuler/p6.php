<?php

/*
The sum of the squares of the first ten natural numbers is,

1^2 + 2^2 + ... + 10^2 = 385
The square of the sum of the first ten natural numbers is,

(1 + 2 + ... + 10)^2 = 55^2 = 3025
Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025  385 = 2640.

Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.
*/

$inputNumber = 100;
$sumOfSquare = 0;
$squareOfSum = 0;

for ($i=1; $i <= $inputNumber; $i++) { 
	$sumOfSquare += pow($i, 2);
	$squareOfSum += $i;
}

$squareOfSum = pow($squareOfSum, 2);

$difference = $squareOfSum - $sumOfSquare;

echo '<br />sumOfSquare: ' . $sumOfSquare;
echo '<br />squareOfSum: ' . $squareOfSum;
echo '<br />difference: ' . $difference;



?>