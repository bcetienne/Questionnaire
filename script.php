<?php
// Requires
require_once("./template/head.html");
require_once("./template/foot.html");

// Tableau contenant les réponses que l'utilisateur a répondu
$ans = [$_GET["responseComp"], $_GET["responseExp"], $_GET["responseHorse"], $_GET["responseEgypt"], $_GET["responseWriter"], $_GET["responseHP"], $_GET["responseSong"], $_GET["responseZelda"], $_GET["responseDBZ"], $_GET["responseSonic"]];

// Tableau des bonnes réponses
$goodAns = ["Q101", "Q203", "Q303", "Q402", "Q504", "Q603", "Q704", "Q801", "Q903", "Q113"];

//Compare les deux arrays des réponses passés en paramètres et retourne les fausses réponses
$diff = array_diff($ans, $goodAns);

$i = 0;
foreach ($diff as $i) {
  $i++;
  echo "Mauvaise réponse " . $i . "<br>";
}














/*******************************************************************************
Version dégueulasse mais fonctionnelle
********************************************************************************
// Variables
$comp = $_GET["responseComp"];
$exp = $_GET["responseExp"];
$horse = $_GET["responseHorse"];
$egypt = $_GET["responseEgypt"];
$writer = $_GET["responseWriter"];
$hp = $_GET["responseHP"];
$song = $_GET["responseSong"];
$zelda = $_GET["responseZelda"];
$dbz = $_GET["responseDBZ"];
$sonic = $_GET["responseSonic"];
if ($comp == "Q101") {
  echo "Bonne réponse ! <br>";
} else{
  echo "Mauvaise réponse <br>";
}
if ($exp == "Q203") {
  echo "Bonne réponse ! <br>";
} else{
  echo "Mauvaise réponse <br>";
}
if ($horse == "Q303") {
  echo "Bonne réponse ! <br>";
} else{
  echo "Mauvaise réponse <br>";
}
if ($egypt == "Q402") {
  echo "Bonne réponse ! <br>";
} else{
  echo "Mauvaise réponse <br>";
}
if ($writer == "Q504") {
  echo "Bonne réponse ! <br>";
} else{
  echo "Mauvaise réponse <br>";
}
if ($hp == "Q603") {
  echo "Bonne réponse ! <br>";
} else{
  echo "Mauvaise réponse <br>";
}
if ($song == "Q704") {
  echo "Bonne réponse ! <br>";
} else{
  echo "Mauvaise réponse <br>";
}
if ($zelda == "Q801") {
  echo "Bonne réponse ! <br>";
} else{
  echo "Mauvaise réponse <br>";
}
if ($dbz == "Q903") {
  echo "Bonne réponse ! <br>";
} else{
  echo "Mauvaise réponse <br>";
}
if ($sonic == "Q113") {
  echo "Bonne réponse ! <br>";
} else{
  echo "Mauvaise réponse <br>";
}
*******************************************************************************/
