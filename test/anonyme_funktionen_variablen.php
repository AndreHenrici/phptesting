<?php
function ausgabe($trenner) {
	$anrede = 'Meine ';
	$ausgabe = function($parameter) use ($anrede, $trenner) {
			return $anrede . $parameter . $trenner;
	};
	
	$ausgabe('Ausgabe 1');
	$ausgabe('Ausgabe 2');
}
ausgabe('<br />');

function($a) use ($b, $c){

}

?>
