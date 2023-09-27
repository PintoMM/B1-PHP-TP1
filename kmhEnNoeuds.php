<?php
	echo "Saisir la vitesse (en noeuds ) du bateau \"Ar Solen\" :\n" ;
	$vitesse = fgets( STDIN ) ;
	echo "Vitesse : " , $vitesse , " noeuds\n";
	$vitesseNoeuds = $vitesse / 1.852 ;
	echo " Resultat de la conversion : $vitesseNoeuds " ;
?>
