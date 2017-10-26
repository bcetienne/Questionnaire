<?php
  /**
  * Open form tag
  * @return string Debut balise form
  */
  function openForm($action = "#")
  {
      return "<form action = '" . $action . "'>";
  }

  /**
   * Close tag
   * @return string Fin balise form
   */
  function closeTag($tag)
  {
      return "</" . $tag . ">";
  }

  /**
   * Create input
   * @param  string $type  Type de l'input
   * @param  string $name  Name de l'input
   * @param  string $label Label de l'input
   * @param  string $value Value de l'input (vide par défaut)
   * @return string        Retourne le label et l'input
   */
  function createInput($type, $name, $label, $value = "")
  {
      return "<label>" . $label ."</label><input type = '" . $type . "' name = '" . $name . "' value = '" . $value . "'>";
  }

  /**
   * Generate a select
   * @param  string $name    Name du select
   * @param  string $label   Label a afficher
   * @param  string $options Les options sous forme de tableaux
   * @return string          Un select complet en HTML
   */
  function createSelect($name, $label, $options)
  {
      /*$options =  [
                    [
                      'value' => 'fr',
                      'content' => 'Français',
                    ],
                    [
                      'value' => 'en',
                      'content' => 'English',
                    ],
                    [
                      'value' => 'de',
                      'content' => 'Deutsch',
                    ],
                  ];*/
      $html = "<label>" . $label . "</label>";
      $html .= "<select name = '" . $name . "'>";

      foreach ($options as $key => $value) {
          $html .= "<option value = '" . $value['value'] . "'>" . $value['content'] . "</option>";
      }
      $html .= "</select>";

      return $html;
  }

  /**
   * Create a button
   * @param  string $value Value du bouton
   * @return string        Le bouton en HTML
   */
  function createSubmit($value)
  {
    return "<input type = 'submit' value = '" . $value . "'>";
  }
