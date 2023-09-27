<?php
	echo "Saisir le nombre d'adultes :\n" ;
	$Adultes = fgets( STDIN ) ;
	echo "Nombres d'adultes : " , $Adultes , "\n";
	$Prix = $Adultes * 17 ;
	echo " Resultat de la conversion : $Prix €" ;
?>
