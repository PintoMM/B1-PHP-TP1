<?php
	echo "Saisir la temperature (en C° )  :\n" ;
	$C = fgets( STDIN ) ;
	echo "Temperature : " , $C , " C\n";
	$F = $C * 1.8 + 32 ;
	echo " Resultat de la conversion : $F " ;
?>
