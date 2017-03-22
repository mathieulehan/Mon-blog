<?php

// Renvoie la liste de tous les billets, triés par identifiant décroissant
function getBillets() {
  $bdd = getBdd();
  $billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,'
    . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
    . ' order by BIL_ID desc');
  return $billets;
}

// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8',
  'ts1', 'ts1', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $bdd;
}
?>