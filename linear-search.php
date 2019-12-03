<?php

include 'memoryAndRuntime.php';

function linearSearch($array, $value)
{
	for($i = 0; $i < sizeof($array); $i++)
	{
		if($array[$i] == $value)
		{
			echo "Found at index no: " .  $i . "\n";
			// use break if you want to find the first time appearance
			// return 1;
		}
	}
}

$array = array(2,3,4,1,4,5,2,5);
$value = 5;

linearSearch($array, $value);

print_memory();
print_runtime();

?>