<?php

function findMinimumElement($array)
{
	$min = $array[0];
	
	for($i = 0; $i < sizeof($array) - 1; $i++)
	{
		if($min > $array[$i + 1])
		{
			$min = $array[$i + 1];
		}
	}

	echo $min;
}

$array = array(2,3,4,5,6,8,9,1);

findMinimumElement($array);

?>