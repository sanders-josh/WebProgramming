<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h3 align="center">PHP Practice</h3>
<?php

echo "<p><i>\"Good morning, Dave,\" said HAL.</i></p>";

$radius = 12;
$area = pi()*$radius*$radius;

echo "The area of a circle with radius ".$radius." is ".$area."<br>";

$f = -479.67;
$celFahr = (5/9)*($f-32);

echo "The celcius equivalent of -479.67F is: {$celFahr}<br>";

$lie = " PHP is fun ";
$lie2 = trim($lie);
$lieLen = strlen($lie2);

echo "The number of characters in \"{$lie}\" is {$lieLen}<br>";

$string = "WDWWLWWWLDDWDLL";
$wwwPos = strpos($string,"WWW");
$letterPos = $wwwPos+3;
$letter = substr($string, $letterPos, 1);
echo "The letter that comes after the first appearance of \"WWW\" in {$string} is {$letter}<br>";


$palindrome = "kayak";
$capPalindrome = "Hannah";
$nonPalindrome = "Able";
$reversedPalindrome = strrev($palindrome);
$reversedCapPalindrome = strrev($capPalindrome);
$reversedNonPalindrome = strrev($nonPalindrome);

echo "{$palindrome} reversed is {$reversedPalindrome}: ";
if (strcmp($palindrome, $reversedPalindrome) == 0) {
	echo "{$palindrome} is a palindrome.<br>";
}
else {
	echo "{$palindrome} is not a palindrome.<br>";
}

echo "{$capPalindrome} reversed is {$reversedCapPalindrome}: ";
if (strcmp($capPalindrom, $reversedCapPalindrome) == 0) {
	echo "{$capPalindrome} is a palindrome.<br>";
}
else {
	echo "{$capPalindrome} is not a palindrome.<br>";
}

echo "{$nonPalindrome} reversed is {$reversedNonPalindrome}: ";
if (strcmp($nonPalindrome, $reversedNonPalindrome) == 0) {
	echo "{$nonPalindrome} is a palindrome.<br>";
}
else {
	echo "{$nonPalindrome} is not a palindrome.<br>";
}

$num = 7;
if ($num%2 == 0) {
	echo "The number {$num} is even.<br>";
}
else {
	echo "The number {$num} is odd.<br>";
}
$date = 2018;
echo "The date function returns {$date}. ";
if ($date%4 == 0 || $date%100 == 0) {
	echo "{$date} is a leap year.<br>";
}
else {
	echo "{$date} is not a leap year.<br>";
}


?>

</body>
</html>

