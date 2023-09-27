<?php
define ( "prixreduit" , 15 ) ;
define ( "pleintarif" , 18 ) ;
	
echo "Saisir le nombre d'adultes : \n" ;
$nbAdultes = fgets ( STDIN ) ;
$nbTarifreduit = min($nbAdultes, 7);

if $nbAdultes < $nbTarifreduit ;
	$prix = $nbAdultes * 18 ;
	echo "Prix :" , $prix ;
		
else $nbAdultes > $nbTarifreduit ;
	$nbPleintarif = $nbAdultes - $nbTarifreduit ;
	$prixpromo = ( $nbPleintarif * 18 ) + ( $nbTarifreduit * 15 ) ;
	echo "Prix : " , $prixpromo
		
		
	
?>
