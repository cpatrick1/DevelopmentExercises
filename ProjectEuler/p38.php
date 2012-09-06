<?php
/*
Problem 38

Take the number 192 and multiply it by each of 1, 2, and 3:

192  1 = 192
192  2 = 384
192  3 = 576
By concatenating each product we get the 1 to 9 pandigital, 192384576. We will call 192384576 the concatenated product of 192 and (1,2,3)

The same can be achieved by starting with 9 and multiplying by 1, 2, 3, 4, and 5, giving the pandigital, 918273645, which is the concatenated product of 9 and (1,2,3,4,5).

What is the largest 1 to 9 pandigital 9-digit number that can be formed as the concatenated product of an integer with (1,2, ... , n) where n >1?
*/

$pan = array();

for ($i=1; $i < 10000; $i++) { 
	$temp = getPandigital($i);
	if ($temp < 1000000000) {
		if (contains('1', $temp)) {
			if (contains('2', $temp)) {
				if (contains('3', $temp)) {
					if (contains('4', $temp)) {
						if (contains('5', $temp)) {
							if (contains('6', $temp)) {
								if (contains('7', $temp)) {
									if (contains('8', $temp)) {
										if (contains('9', $temp)) {
											$pan[$i] = $temp;
											echo "val: $i...pan: $temp<br />";			
										}
									}
								}
							}
						}
					}
				}		
			}
		}	
	} 
}

echo max($pan);

function getPandigital($number) {
	$length = 9;

	$output = $number;

	$i = 2;

	while (strlen($output) < $length) {
		$temp = 0;
		$temp = $number * $i;
		$output = $output.$temp;
		$i++;
	}

	return intval($output);
}

function contains($substring, $string) {
        $pos = strpos($string, $substring);
 
        if($pos === false) {
                // string needle NOT found in haystack
                return false;
        }
        else {
                // string needle found in haystack
                return true;
        }
 
}




?>