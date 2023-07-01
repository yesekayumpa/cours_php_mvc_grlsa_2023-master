<?php 
//Front Contronler=> dispatcher
require_once "../models/Personne.php";//importer ou inclure
require_once "../models/Enseignant.php";
$personne=new Personne();//$personne=new Personne;

$personne->setId(1)
         ->setNomComplet("Birane Baila Wane");

echo"<br>";
$enseignant =new Enseignant;
$enseignant->setId(2)
           ->setNomComplet("Birane Baila Wane");
$enseignant->setGrade("Ingenieur");
$personnes=[
    $personne ,$enseignant 
];
require_once "../views/liste.personne.html.php";