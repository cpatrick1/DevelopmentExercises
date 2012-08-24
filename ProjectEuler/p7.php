<?php
/*
By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.

What is the 10 001st prime number?
//104743
*/


$maxRecords = '10001';


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


//for ($i=0; $i < 100; $i++) { 
//	echo $i . ' : ' . IsPrime($i) . '<br />';
//}

$primes = array();
$k = 1;

while (count($primes) < $maxRecords) {
	if (IsPrime($k)) {
		$primes[] = $k;
	}
	$k++;
}

echo 'The ' . $maxRecords . ' prime number is: ' . $primes[$maxRecords - 1];

//echo count($primes) . '<br />';

/*
//print all
foreach ($primes as $key => $value) {
	echo 'key: ' . ($key + 1) . ' value: ' . $value . '<br />';
}
*/


?>