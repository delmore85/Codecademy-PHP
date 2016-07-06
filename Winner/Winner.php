<html>
    <p>
	<?php
	// Create an array and push on the names
    // of your closest family and friends
    $n = array();
    array_push($n,"Dennis");
    array_push($n,"Nicole");
    array_push($n,"Freya");
    array_push($n,"Winston");
    array_push($n,"Kit");
	// Sort the list
    sort($n);
	// Randomly select a winner!
    $c = rand(0,count($n)-1);
	// Print the winner's name in ALL CAPS
	print strtoupper($n[$c]);
	?>
	</p>
</html>