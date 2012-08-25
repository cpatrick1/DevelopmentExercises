<?php
/*
Numeric Diamonds

Make some pretty diamonds for us.
*/

//unsolved
/*
$inHeight = '10';
$inWidth = '30';
$inCharacter = '+';


//square
function makeSquare($height, $width, $character) 
{
	$out = '';
	for ($j=1; $j <= $height; $j++) { 

		if ($j == 1 || $j == $height) {
			for ($i=0; $i < $width; $i++) { 
				$out .= $character;
			}
			$out .= '<br />';
		} else {
			for ($i=1; $i <= $width; $i++) { 
				if ($i == 1 || $i == $width) {
					$out .= $character;
				} else {
					$out .= '&nbsp';
				}
			}
			$out .= '<br />';
		}
	}
	return $out;
}

//triangle
function makeTriangle($height, $character) 
{

	$out = '';

	$rowLength = (($height * 2) - 1);
	$base = '';
	$spaces = '';

	for ($j=0; $j < $height; $j++) {

		for ($i=0; $i < $rowLength; $i++) { 
			$base .= $character;
		}

		if ($rowLength == 1) {
			$out = $spaces . $base . $out;
		} else {
			$out = '<br />' . $spaces . $base . $out ;	
		}

		$rowLength -= 2;
		$spaces .= '&nbsp';
		$base = '';

	}

	return $out;
}

//Diamond
function makeDiamond($height, $width) {
	$out = '';


}



echo '<p style="font-family: monospace;">';
echo makeSquare($inHeight, $inWidth, $inCharacter);
echo '<br />';
echo makeTriangle($inHeight, $inCharacter);
echo '</p>';
*/
?>