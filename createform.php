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

  /**
   * Create container-fluid div
   * @return string Open a container-fluid div
   */
  function createDivContainer()
  {
    return "<div class='container-fluid'>";
  }

  function createQuestions()
  {
    // Tableau qui regroupe toutes les questions
    $questions =  [
                    [
                      "value" => "Q10",
                      "content" => 'A quelle compositeur doit-on les bandes-son des films comme "Il était une fois en Amérique", "Pour une poignée de dollars ?" ou le "Clan des siciliens" ?',
                    ],
                    [
                      "value" => "Q20",
                      "content" => 'Que signifie l\'expression de Horace, "Carpe Diem" ?',
                    ],
                    [
                      "value" => "Q30",
                      "content" => 'On dit qu\'un cheval...',
                    ],
                    [
                      "value" => "Q40",
                      "content" => 'Comment nomme-t-on les dirigeants de l\'Égypte antique ?',
                    ],
                    [
                      "value" => "Q50",
                      "content" => 'A quel écrivain attribue-t-on l\'oeuvre de "L\'Iliade et l\'Odyssée" ?',
                    ],
                    [
                      "value" => "Q60",
                      "content" => 'Quel est le véritable nom de Lord Voldemort dans Harry Potter ?',
                    ],
                    [
                      "value" => "Q70",
                      "content" => 'Qui a chanté le morceau "Comme un ouragan" en 1986 ?',
                    ],
                    [
                      "value" => "Q80",
                      "content" => 'Zelda est ...',
                    ],
                    [
                      "value" => "Q90",
                      "content" => 'San Goku est un...',
                    ],
                    [
                      "value" => "Q11",
                      "content" => 'De quelle couleur est Sonic le hérisson ?',
                    ]
                  ];

    // Tableau qui regroupe toutes les réponses
    $answers =  [
                  [
                    [
                      "value" => "Q101",
                      "content" => "Ennio Morricone"
                    ],
                    [
                      "value" => "Q102",
                      "content" => "Hans Zimmer"
                    ],
                    [
                      "value" => "Q103",
                      "content" => "James Horner"
                    ],
                    [
                      "value" => "Q104",
                      "content" => "Danny Elfman"
                    ]
                  ],
                  [
                    [
                      "value" => "Q201",
                      "content" => "Je suis venu, j'ai vu, j'ai vaincu !"
                    ],
                    [
                      "value" => "Q202",
                      "content" => "Le sort en est jeté !"
                    ],
                    [
                      "value" => "Q203",
                      "content" => "Cueille le jour !"
                    ],
                    [
                      "value" => "Q204",
                      "content" => "Que l'acheteur soit vigilant !"
                    ]
                  ],
                  [
                    [
                      "value" => "Q301",
                      "content" => "Blatère"
                    ],
                    [
                      "value" => "Q302",
                      "content" => "Abboie"
                    ],
                    [
                      "value" => "Q303",
                      "content" => "Hennit"
                    ],
                    [
                      "value" => "Q304",
                      "content" => "Rugit"
                    ]
                  ],
                  [
                    [
                      "value" => "Q401",
                      "content" => "Les augustes"
                    ],
                    [
                      "value" => "Q402",
                      "content" => "Les pharaons"
                    ],
                    [
                      "value" => "Q403",
                      "content" => "Les shahs"
                    ],
                    [
                      "value" => "Q404",
                      "content" => "Les patrons"
                    ]
                  ],
                  [
                    [
                      "value" => "Q501",
                      "content" => "Molière"
                    ],
                    [
                      "value" => "Q502",
                      "content" => "Virgile"
                    ],
                    [
                      "value" => "Q503",
                      "content" => "Victor Hugo"
                    ],
                    [
                      "value" => "Q504",
                      "content" => "Homère"
                    ]
                  ],
                  [
                    [
                      "value" => "Q601",
                      "content" => "Dumbledor"
                    ],
                    [
                      "value" => "Q602",
                      "content" => "Draco Malfoy"
                    ],
                    [
                      "value" => "Q603",
                      "content" => "Tom Elvis Jedusor"
                    ],
                    [
                      "value" => "Q604",
                      "content" => "Severus Rogue"
                    ]
                  ],
                  [
                    [
                      "value" => "Q701",
                      "content" => "Maitre Gims"
                    ],
                    [
                      "value" => "Q702",
                      "content" => "Céline Dion"
                    ],
                    [
                      "value" => "Q703",
                      "content" => "Jul"
                    ],
                    [
                      "value" => "Q704",
                      "content" => "Stéphanie de Monaco"
                    ]
                  ],
                  [
                    [
                      "value" => "Q801",
                      "content" => "La princesse"
                    ],
                    [
                      "value" => "Q802",
                      "content" => "Le cheval"
                    ],
                    [
                      "value" => "Q803",
                      "content" => "Le méchant"
                    ],
                    [
                      "value" => "Q804",
                      "content" => "Le héros"
                    ]
                  ],
                  [
                    [
                      "value" => "Q901",
                      "content" => "Humain"
                    ],
                    [
                      "value" => "Q902",
                      "content" => "Namek"
                    ],
                    [
                      "value" => "Q903",
                      "content" => "Saiyan"
                    ],
                    [
                      "value" => "Q904",
                      "content" => "Chien"
                    ]
                  ],
                  [
                    [
                      "value" => "Q111",
                      "content" => "Rose"
                    ],
                    [
                      "value" => "Q112",
                      "content" => "Vert"
                    ],
                    [
                      "value" => "Q113",
                      "content" => "Bleu"
                    ],
                    [
                      "value" => "Q114",
                      "content" => "Noir"
                    ]
                  ]
                ];

    $question = "";
    // Affiche chaque questions du tableau $questions
    for ($i=0; $i < 9 ; $i++) {
      $question .= "<p>" . $questions[$i]['content'] . "</p>";
    }
    return $question;

    // $html = "<div class='row'><div class='question-div'><div class='question'><h4>Question " . $questionNumber . "</h4><p> " . $question . "</p></div> </div></div>";

  }

  /**
   * Test paragraph
   * @return string Test paragraph
   */
  function test()
  {
    return "<p>Test</p>";
  }
