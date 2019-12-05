<?php

function insertionSort($unsortedArray)
{
	$arraysize = sizeof($unsortedArray);

	for ($i = 1; $i < $arraysize; $i++)
	{
		echo "Iteration No: " . $i;
		echo "<br>";

		echo "Present Array: ";
		print_r($unsortedArray);
		echo "<br>";

		for ($j = 0; $j < $i; $j++)
		{
			if($unsortedArray[$j] > $unsortedArray[$i])
			{
				// Do Swap Positions
				$temp = $unsortedArray[$j];
				$unsortedArray[$j] = $unsortedArray[$i];
				$unsortedArray[$i] = $temp;

				$swapped = true;

				echo "Position Swapped" . "<br>";

				echo "After Swapping: ";
				print_r($unsortedArray);

				echo "<br>";			
			}
		}

	echo "sorted";

	}
}

$unsortedArray = array(5, 15, 10, 9, 8, 6, 2, 1);
$sortedArray = array(1, 2, 4, 5, 6, 7, 8, 9);  


insertionSort($sortedArray); 

?>