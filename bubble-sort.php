<?php

// first I have to make a program so that for bubble sort we can compare the elements




// minimum 2 elements are needed for any sorting

function bubbleSort($unsortedArray)
{
	$arraysize = sizeof($unsortedArray);

	// for ensuring our sort is done, we have to use the $swapped variable
	// if every elements are compared and checked and no swapping is done, then we can say our sorting is Done

	for ($i = 0; $i < $arraysize; $i++)
	{
		$swapped = false;
		echo "Present Array: ";
		print_r($unsortedArray);
		echo "<br>";

		for ($j = 0; $j < $arraysize - 1; $j++)
		{ 
			if($unsortedArray[$j] > $unsortedArray[$j + 1])
			{
				// Do Swap Positions
				$temp = $unsortedArray[$j];
				$unsortedArray[$j] = $unsortedArray[$j + 1];
				$unsortedArray[$j + 1] = $temp;
				$swapped = true;

				echo "Position Swapped" . "<br>";

				echo "After Swapping: ";
				print_r($unsortedArray);
			}
		}

		if($swapped == false)
		{
			echo "Sorting Done";
			break;
		}

	}


}

$unsortedArray = array(5, 15, 10);  

bubbleSort($unsortedArray); 

?>