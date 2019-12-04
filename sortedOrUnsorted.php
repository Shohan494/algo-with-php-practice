<?php

// Applicable for ascending order, means elements are lower to greater

// for Descending order the program will be vice versa

$sortedArray = [5, 10, 15, 20, 25, 30, 30];

$fullUnsortedArray = [30, 25, 20, 15, 10, 5];

$partialSortedArray = [1, 2, 3, 9, 8, 7, 6, 5];


function sortedOrUnsorted($array)
{
	$sizeOfArray = sizeof($array);

	$sorted = false;

	for ($i = 0; $i < $sizeOfArray - 1; $i++)
	{
		if($array[$i] > $array[$i + 1])
		{
			$sorted = false;
			break;
		}
	}

	if($sorted == false)
	{
		echo "Not Sorted";
	}
	else
	{
		echo "Sorted";
	}

}

sortedOrUnsorted($partialSortedArray);