<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

	function factorial($number)
	{
		$factorial = $number;
		for ($i = $number-1; $i > 0; $i--)
		{
			$factorial *= $i;
		}
		return $factorial;
	}

	$num = 5;
	echo "<p>The factorial of {$num} is ".factorial($num)."<br><p>";

	function average($num1, $num2, $num3)
	{
		$sum = $num1 + $num2 + $num3;
		$avg = $sum/3;
		return $avg;
	}

	$answer = average(3,4,5);
	echo "<p>The average of 3, 4, and 5 is $answer</p>";
	echo "<p>The average of 3, 4, and 5 is ".average(3,4,5)."</p>";
?>
</body>
</html>