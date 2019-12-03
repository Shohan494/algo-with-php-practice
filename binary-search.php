<?php

include 'memoryAndRuntime.php';

// this search will be applicable for sorted ascending value, low to high

function binarySearch($array, $value)
{
	$middlePoint = ceil(count($array)/2); // or we can use round

	if($array[$middlePoint] == $value)
	{
		echo "Found at index no: " .  $middlePoint . "\n";
	}
	elseif($array[$middlePoint] > $value)
	{
		$startLoop = 0;
		$endLoop = $middlePoint - 1;

		for($i = $startLoop; $i < $endLoop; $i++)
		{
			if($array[$i] == $value)
			{
				echo "Found at index no: " .  $i . "\n";
				// use break if you want to find the first time appearance
				// return 1;
			}
		}
	}
	else // this case will be : $array[$middlePoint] < $value
	{
		$startLoop = $middlePoint + 1;
		$endLoop = count($array);

		for($i = $startLoop; $i < $endLoop; $i++)
		{
			if($array[$i] == $value)
			{
				echo "Found at index no: " .  $i . "\n";
				// use break if you want to find the first time appearance
				// return 1;
			}
		}
	}
}

$array = array(1,2,4,5,7,9,12,15,30);
$value = 15;

binarySearch($array, $value);

print_memory();
print_runtime();

?>