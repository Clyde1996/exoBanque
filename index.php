

<?php

// imprter les 2 classes

spl_autoload_register(function($class_name) {
    require 'classes/'.$class_name . '.php';
});

//instancier au moins 2 titulaires
$client1 =  new Titulaire("HAZIRI", "Clyde", "1996-01-01", "COLMAR" );
$client2 = new Titulaire("BOND", "Savanah", "1990-01-01", "Sidney");
//instancier au moins 2 comptes per titulaire


$compte1 = new CompteBancaire(" Livret A ", 3000, "€", $client1);
$compte2 = new CompteBancaire(" Livret A ", 1044, "€", $client2 );

$compte3 = new CompteBancaire("Compte Courant ", 22000.22, "€", $client1);

// echo "Le compte". $compte1->getLibelle().$compte1->getSolde()."<br>";
// echo $compteBancaire2->getSolde()."<br>";

// $compte1->virement(1000, $compteBancaire2);

// echo $compte1->getSolde(). $compte1->getDevise()."<br>";
// echo $compteBancaire2->getSolde()."<br>";

// echo $client2->getAge()."<br>";
// utiliser toutes les methodes des 2 classes


// echo $compte1->getInfosGenerale();
// echo $compte2->getInfosGenerale();
// echo $compte3->getInfosGenerale();

// $compte2->crediter(1000, $compte2);
// echo $compte2->getInfosGenerale();

// $compte2->debiter(4, $compte2);
// echo $compte2->getInfosGenerale();

// $compte3->virement(1000, $compte1);
// echo $compte1->getInfosGenerale();

// // $compte1->virement(300, $compte2);


// // echo $compte1->getInfosGenerale();
// echo $compte2->getInfosGenerale();
// // echo $compte3->getInfosGenerale();





 
echo $client1->afficherCompte();

$compte1->crediter(1000, $compte1);
echo
"<br><mark>Le compte a etait crediter de 1000€ :</mark></br>" .
$compte1->getInfosGenerale();

$compte3->virement(5000, $compte1);
echo
"<br><mark>Le compte a etait crediter de 5000€ :</mark> </br>" .
$compte1->getInfosGenerale();
echo
"<br><mark>Le compte a etait debiter de 5000€ :</mark></br>" .
$compte3->getInfosGenerale();

echo $client1->afficherCompte();
/***************************** */

echo $client2->afficherCompte();

$compte2->debiter(100, $compte2);
echo "<br><mark>Le compte a etait debiter de 100€ :</mark></br>" .
$compte2->getInfosGenerale();

echo $client2->afficherCompte();











?>    
