<?php
	// Do 4 looping to create 4 row
	for($i = 1; $i <= 4; $i++)
	{
		// Do the looping to print the column
		for($j = 1; $j <= $i; $j++)
		{
			echo "[";
			echo $i;	// Echo the row order (always the same for the same column).
			echo ",";
			echo $j;	// Echo the column order (repeat from 1 after each row).
			echo "] ";
		}
		
		echo "<br>";
	}
?>
