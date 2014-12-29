<?php

	for($i = 1; $i <= 4; $i++)
	{
		echo "[";
		
		for($j = 1; $j <= $i; $j++)
		{
			
			echo $i;
			
		}
		
		echo ",";
		
		for($k = 1; $k <= $i; $k++)
		{
			echo $k;
			
		}
		
		echo "]";
		echo "<br>";
	}
?>
