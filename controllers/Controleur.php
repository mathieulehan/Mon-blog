<?php

require '../models/Modele.php';

// Affiche la liste de tous les billets du blog
function accueil() {
  $billets = getBillets();
  require '../views/vueAccueil.php';
}

// Affiche les détails sur un billet
function billet($idBillet) {
  $billet = getBillet($idBillet);
  $commentaires = getCommentaires($idBillet);
  require '../views/vueBillet.php';
}

// Affiche une erreur
function erreur($msgErreur) {
  require '../views/vueErreur.php';
}