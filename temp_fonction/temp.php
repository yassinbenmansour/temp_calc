<?php 

$hr = '00';
$min = '00';
$sec = '00';
$mois = '00';
$jr = '00';
$ann = '0000';

$temps = mktime($hr,$min ,$sec  , $mois , $jr ,$ann);

$temp = time() - $temps;

$sec =floor($temp) ;
$min =floor($sec/60) ;
$hr =floor($min/60) ;

$jr =floor($hr/24) ;
$mois =floor($jr/31) ;
$ann =floor($jr/365) ;

echo $ann.' ans / '.$mois.' mois / '.$jr.' jours / '.$hr.' heures / '.$min.' minutes / '. $sec .' secondes ';



?>