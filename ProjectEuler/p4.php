<?php

/*
A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 99.

Find the largest palindrome made from the product of two 3-digit numbers.
*/

Function IsPalindrome($number) {

	for ($i=1; $i < strlen($number); $i++) { 
		//show work
		//echo substr($number, $i, 1) . ' : ' .substr($number, (($i*-1)-1) , 1);

		if(substr($number, $i, 1) != substr($number, (($i*-1)-1) , 1)) {
			return false;
		} 
	}

	return true;
}

function cmpTotal($a, $b)
{
    //return strcmp($a["total"], $b["total"]);
	return $b["total"] - $a["total"];
}

$palindromes = array();

for ($i=100; $i < 1000; $i++) { 
	for ($j=10; $j < $i; $j++) { 
		if (IsPalindrome($i*$j)) {
			$palindromes[] = array('val1' => $i, 'val2' => $j, 'total' => ($i*$j));
		}
	}
}

usort($palindromes, "cmpTotal");

echo 'Max Palindrome: ' . $palindromes[0]["val1"] . ' X ' . $palindromes[0]["val2"] . ' = ' . $palindromes[0]["total"];

/*
//display all

foreach ($palindromes as $palindrome) {
	foreach ($palindrome as $key => $value) {
		echo $key . ' : ' . $value . '<br />';
	}
	echo '<br />';
}
*/

?>