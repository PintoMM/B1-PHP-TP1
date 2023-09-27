<?php

echo "Saisir le nombre d'adultes : ";
$nbAdultes = fgets ( STDIN ) ;
$prixreduit = $nbAdultes / 7 ;
$prixplein =  $nbAdultes % 7 ;
echo " prix a payer : " , ( $prixplein * 7 ) * 15 ;

?>
