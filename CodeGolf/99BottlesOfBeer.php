<?php
/*
99 Bottles Of Beer

Does your code sing?
Recreate '99 bottles of beers on the wall'. 

//*********************************
2 bottles of beer on the wall, 2 bottles of beer.
Take one down and pass it around, 1 bottle of beer on the wall.
1 bottle of beer on the wall, 1 bottle of beer.
Go to the store and buy some more, 99 bottles of beer on the wall.
//*****************************************
*/

for ($i=99; $i > 2; $i--) { 
	echo "$i bottles of beer on the wall, $i bottles of beer.<br />";
	echo 'Take one down and pass it around, ' . ($i-1) . ' bottles of beer on the wall.<br /><br />';
}

if ($i == 2) {
	echo "$i bottles of beer on the wall, $i bottles of beer.<br />";
	echo 'Take one down and pass it around, ' . ($i-1) . ' bottle of beer on the wall.<br /><br />';
	$i--;
}

if ($i == 1) {
	echo "$i bottle of beer on the wall, $i bottle of beer.<br />";
	echo 'Go to the store and buy some more, 99 bottles of beer on the wall.<br />';
}

?>