<?php
// Requires
require_once("./template/head.html");
require_once("./template/foot.html");

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
