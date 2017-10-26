<?php
// Requires
require_once("./template/head.html");
require_once("./template/foot.html");

// Variables
// $comp = $_GET["responseComp"];
// $exp = $_GET["responseExp"];
// $horse = $_GET["responseHorse"];
// $egypt = $_GET["responseEgypt"];
// $writer = $_GET["responseWriter"];
// $hp = $_GET["responseHP"];
// $song = $_GET["responseSong"];
// $zelda = $_GET["responseZelda"];
// $dbz = $_GET["responseDBZ"];
// $sonic = $_GET["responseSonic"];

$ans = [  $comp   = $_GET["responseComp"],
          $exp    = $_GET["responseExp"],
          $horse  = $_GET["responseHorse"],
          $egypt  = $_GET["responseEgypt"],
          $writer = $_GET["responseWriter"],
          $hp     = $_GET["responseHP"],
          $song   = $_GET["responseSong"],
          $zelda  = $_GET["responseZelda"],
          $dbz    = $_GET["responseDBZ"],
          $sonic  = $_GET["responseSonic"]
       ];

$goodAns = [

           ]

// $i = 0;

/*
Comparer les deux arrays pour voir les bonnes réponses (boucle for each) et envoyer soit bonne ou mauvaise réponse + voir pour le compteur des points à ajouter, décommenter tous les if, les variables sales et le i et commenter les arrays pour voir un résultat fonctionnel.
Faire un var_dump($ans) pour voir les résultats du tableau
*/

/*

if ($comp == "Q101") {
  echo "Bonne réponse ! <br>";
  $i ++;
} else{
  echo "Mauvaise réponse <br>";
}

if ($exp == "Q203") {
  echo "Bonne réponse ! <br>";
  $i = $i + 2;
} else{
  echo "Mauvaise réponse <br>";
}

if ($horse == "Q303") {
  echo "Bonne réponse ! <br>";
  $i = $i + 2;
} else{
  echo "Mauvaise réponse <br>";
}

if ($egypt == "Q402") {
  echo "Bonne réponse ! <br>";
  $i ++;
} else{
  echo "Mauvaise réponse <br>";
}

if ($writer == "Q504") {
  echo "Bonne réponse ! <br>";
  $i ++;
} else{
  echo "Mauvaise réponse <br>";
}

if ($hp == "Q603") {
  echo "Bonne réponse ! <br>";
  $i ++;
} else{
  echo "Mauvaise réponse <br>";
}

if ($song == "Q704") {
  echo "Bonne réponse ! <br>";
  $i ++;
} else{
  echo "Mauvaise réponse <br>";
}

if ($zelda == "Q801") {
  echo "Bonne réponse ! <br>";
  $i ++;
} else{
  echo "Mauvaise réponse <br>";
}

if ($dbz == "Q903") {
  echo "Bonne réponse ! <br>";
  $i ++;
} else{
  echo "Mauvaise réponse <br>";
}

if ($sonic == "Q113") {
  echo "Bonne réponse ! <br>";
  $i ++;
} else{
  echo "Mauvaise réponse <br>";
}

echo "Vous avez totalisé un score de " . $i . " points.";*/
