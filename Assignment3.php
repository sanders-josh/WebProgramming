<!DOCTYPE html>
<html>
<head>
	<title>Assignment 3</title>
	<h1>Assignment 3 - PHP</h1>
</head>
<body>
<?php

echo '<h4>Part 1:</h4><br>';
function isBitten()
{
	
	$num = rand(0, 1);
	if ($num == 0)
	{
		 return false;
	}
	else
	{
		return true;
	}
}


if (isBitten())
{
	echo "<p>Charlie ate my lunch!<br></p>";
}
else
{
	echo "<p>Charlie did not eat my lunch!<br></p>";
}

echo '<h4>Part 2:</h4><br>';
echo '<table width=350px>';
for ($i = 0; $i < 10; $i++)
{
	echo '<tr height=35px>';
	for ($j = 0; $j < 10; $j++)
	{
		if ($i%2 == $j%2)
		{
			echo '<td width=35px border=1px padding=1px bgcolor=#ff0000></td>';
		}
		else
		{
		 	echo '<td width=35px border=1px padding=1px bgcolor=#000000></td>';
		}
	}
	echo '</tr>';
}
echo '</table>';


echo '<h4>Part 3:</h4><br>';
$months = array('January', 'February', 'March', 'April','May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

echo '<p>1.<br>';
for ($i = 0; $i < sizeof($months); $i++)
{
	echo "$months[$i]<br>";
}
echo '</p>';

sort($months, SORT_STRING);
echo '<p>2.<br>';
for ($i = 0; $i < sizeof($months); $i++)
{
	echo "$months[$i]<br>";
}
echo '</p>';

$foreachmonths = array('January', 'February', 'March', 'April','May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
echo '<p>3.<br>';
foreach ($foreachmonths as $key => $value) 
{
	echo "$value<br>";
}
echo '</p>';

sort($foreachmonths, SORT_STRING);
foreach ($foreachmonths as $key => $value) 
{
	echo "$value<br>";
}
echo '</p>';

$restaurants = array('Chama Gaucha' => "40.50", 'Aviva' => "15.00", 'Bones' => "65.00", 'Umi Sushi' => "40.50", 'Fandangles' => "30.00", 'Capital Grill' => "60.50", 'Canoe' => "35.50", 'One Flew South' => "21.00", 'Fox Bros' => "15.00", 'South City Kitchen' => "29.00");

echo '<h4>Part 4:</h4><br>';
echo '<p>';
foreach ($restaurants as $key => $value) 
{
	echo "$key - Average Cost \$$value<br>";
}
echo '</p>';

ksort($restaurants, SORT_STRING);
echo '<p>';
foreach ($restaurants as $key => $value) 
{
	echo "$key - Average Cost \$$value<br>";
}
echo '</p>';

asort($restaurants, SORT_STRING);
echo '<p>';
foreach ($restaurants as $key => $value) 
{
	echo "$key - Average Cost \$$value<br>";
}
echo '</p>';

?>
</body>
</html>