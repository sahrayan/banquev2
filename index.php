<?php
require_once "Compte.php";
require_once "Titulaire.php";

$titu1 = new Titulaire('RAIHANI ','Rayan ',"27-01-2004 ",'Strasbourg');
$titu2 = new Titulaire('MOHAMMED ',' Foued',"05-11-1997 ",'Strasbourg');


$compte1 =new Compte("Livret B",500,"euro",$titu1);
$compte2 =new Compte("Livret A",20,"euro",$titu2);
$compte3 =new Compte("Livret A",100,"euro",$titu1);
// $titu1->DispInfo();
// $titu2->DispInfo();
$compte1->afficherInformationsCompte();


// $compte1->virementVersCompte($compte2, 600);
// $titu2->DispInfo();
// $titu1->DispInfo();
?>