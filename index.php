<?php
require_once "Compte.php";
require_once "Titulaire.php";

$titu1 = new Titulaire('RAIHANI ','Rayan ',"27-01-2004 ",'Strasbourg');
$titu2 = new Titulaire('MOHAMMED ',' Foued',"05-11-1997 ",'Strasbourg');


$compte1 =new Compte("Livret B",500,"euro",$titu1);
$compte2 =new Compte("Livret A",20,"euro",$titu2);
$titu1->DispInfo();
$titu2->DispInfo();


$montantVirement = 300;
$compte1->virementVersCompte($compte2, $montantVirement);
$titu2->DispInfo();
?>