<?php

echo "Saisir le nombre d'adultes : ";
$nbAdultes = fgets ( STDIN ) ;
$prixreduit = intval ($nbAdultes % 7) ;
$prixplein =  intval ($nbAdultes / 7) ;
$prix = $prixplein*7*15+$prixreduit*18 ; 
echo " prix a payer : " , $prix ;

?>
