<?php

$sortedArray = [5, 10, 15, 20, 25, 30, 30];

$fullUnsortedArray = [30, 25, 20, 15, 10, 5];


function biggerSmallerOrEqual($array)
{
	$sizeOfArray = sizeof($array);

	for ($i = 0; $i < $sizeOfArray - 1; $i++)
	{
		echo "Comparing array index no: " . $i . " and " . ($i + 1) . " value: " .  $array[$i] . " with " . " value: " .  $array[$i + 1];

		echo "<br>";

		if($array[$i] > $array[$i + 1])
		{
			echo $array[$i] . " is bigger than " . $array[$i + 1];
			echo "<br>";
		}
		elseif($array[$i] < $array[$i + 1])
		{
			echo $array[$i] . " is smaller than " . $array[$i + 1];
			echo "<br>";
		}
		else
		{
			echo "elements are equal";
			echo "<br>";
		}
	}

}

biggerSmallerOrEqual($sortedArray);