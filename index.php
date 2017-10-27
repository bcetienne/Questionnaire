<?php
require_once("./createForm.php");
require_once("./template/head.html");
require_once("./template/foot.html");
?>
  <header class="container-fluid">
    <h1 class="display-1 text-center">Test de culture générale</h1>
  </header>
  <main class="container-fluid">
    <p>Ce test comporte 10 questions, bonne chance.</p>
    <?php
      echo openForm("./script.php");
        echo createDivContainer();
          echo createQuestions();
        echo closeTag("div");
      echo closeTag("form");
    ?>
  </main>




















        <!-- echo openForm("./script.php");
        echo createSelect("country", "Choisissez un pays", [
          [
            "value" => "fr",
            "content" => "Français",
          ],
          [
            "value" => "es",
            "content" => "Espagne",
          ],
          [
            "value" => "de",
            "content" => "Deutsch",
          ],
          [
            "value" => "ch",
            "content" => "Suisse",
          ]
        ]);
        echo createInput("text", "myText", "Mon input texte");
        echo createInput("number", "myNumb", "Mon input nombre");
        echo createInput("radio", "myRadio", "Mon input radio");
        echo createInput("checkbox", "myCheck", "Mon input check");
        echo createSubmit("Envoyer");
        echo closeTag("form"); -->
