<?php /* Problem 22

Using names.txt, a 46K text file containing over five-thousand first names,
begin by sorting it into alphabetical order. Then working out the alphabetical
value for each name, multiply this value by its alphabetical position in the
list to obtain a name score.

For example, when the list is sorted into alphabetical order, COLIN, which is
worth 3 + 15 + 12 + 9 + 14 = 53, is the 938th name in the list. So, COLIN
would obtain a score of 938  53 = 49714.

What is the total of all the name scores in the file? */

$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

$fp = fopen("$DOCUMENT_ROOT/code/DevelopmentExercises/ProjectEuler/SupportFiles/names.txt", 'rb');

//echo $DOCUMENT_ROOT;

$names = array();
$names = fgetcsv($fp,50,","); 

sort($names);

$output = 0;

foreach ($names as $key => $value) {
	//echo ($key+1).'='.$value.'='.nameScore($value).'='.(nameScore($value)*($key + 1)).'<br />';
	$output += (nameScore($value)*($key + 1));
}

echo "Sum of all the Name Scores is: $output";



function nameScore($name) {
	$splitName = array();
	$splitName = str_split($name);

	$score = 0;
	foreach ($splitName as $value) {
		$score += letterScore($value);
		//echo 'letter:'.$value.'<br />';
	}

	return $score;
}

function letterScore($letter) {
	switch (strtoupper($letter)) {
		case 'A': return 1;
		case 'B': return 2;
		case 'C': return 3;
		case 'D': return 4;
		case 'E': return 5;
		case 'F': return 6;
		case 'G': return 7;
		case 'H': return 8;
		case 'I': return 9;
		case 'J': return 10;
		case 'K': return 11;
		case 'L': return 12;
		case 'M': return 13;
		case 'N': return 14;
		case 'O': return 15;
		case 'P': return 16;
		case 'Q': return 17;
		case 'R': return 18;
		case 'S': return 19;
		case 'T': return 20;
		case 'U': return 21;
		case 'V': return 22;
		case 'W': return 23;
		case 'X': return 24;
		case 'Y': return 25;
		case 'Z': return 26;
		default:
			return 0;
			
	}
}

/*
foreach ($names as $value) {
	echo $value.'<br />';
}
*/
?>