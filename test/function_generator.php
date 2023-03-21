<?php
  function addieren($start, $ende, $schritt = 2) {
  	
    if ($start < $ende) {
    	$erg = 0;
		for ($i = $start; $i <= $ende; $i += $schritt) {
			$erg += $i;
			yield $erg;
		}      


    }
  }
  
  foreach (addieren(2, 10, 2) as $erg) {
  	echo $erg . '<br />';
	
  }

?>