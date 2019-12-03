<?php 

function jumpSearch($array, $value)
{
	$arraySize = sizeof($array);
	$stepsToJump = sqrt($arraySize);

	for($i=0; $i < $arraySize; $i = $i + $stepsToJump)
	{
		if($array[$i] >= $value)
		{
			if($array[$i] == $value)
			{
				echo "Found at index no: " .  $i . "\n";
			}
			else
			{
				for($j = $i - $stepsToJump; $j < $i + $stepsToJump ; $j++)
				{
					if($array[$j] == $value)
					{
						echo "Found at index no: " .  $j . "\n";
					}
				}				
			}
		}
	}
}


$array = array( 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610 ); 
$value = 55; 

jumpSearch($array, $value);

 ?>