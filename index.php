<?php
require_once("./createForm.php");
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Questionnaire</title>
  </head>
  <body>
    <?php
        echo openForm("./script.php");
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
        echo closeTag("form");
    ?>
  </body>
</html>
