<?php
/**
* Ajout d'une fonction de personnalisation en utilisant la classe WP_Customizer
* Le hook : 'customize_register' qui sera utilisé dans le l'écouteur add_action()
* La fonction de rappel : function(WP_Customizer $manager)
* Pour utiliser dans header.php    get_theme_mod($background_body)
*/

add_action('customize_register', function(WP_Customize_Manager $manager){
    $manager->add_section( "apparence_body",
                            [
                             "title"=>"Apparence body"
                            ]);
    $manager->add_setting('background_body',
                          ["default"=>"#ffffff",
                           "sanitize_callback"=>"sanitize_hex_color"
                        ]);

    $manager->add_setting('background_clippath',
                        ["default"=>"#ffffff",
                         "sanitize_callback"=>"sanitize_hex_color"
                      ]);

    $manager->add_setting('background_header',
                        ["default"=>"#3674ED",
                         "sanitize_callback"=>"sanitize_hex_color"
                      ]);
                      
    $manager->add_setting('couleur_oeil',
                      ["default"=>"#3674ED",
                       "sanitize_callback"=>"sanitize_hex_color"
                    ]);  

    $manager->add_control(new WP_Customize_Color_Control($manager, 'background_body',
        [ "section" => "apparence_body", 
          "label" => "Choisir la couleur pour d'arrière plan"
        ]));

    $manager->add_control(new WP_Customize_Color_Control($manager, 'background_clippath',
    [ "section" => "apparence_body", 
      "label" => "Choisir la couleur du clip path"
    ]));

    $manager->add_control(new WP_Customize_Color_Control($manager, 'background_header',
    [ "section" => "apparence_body", 
      "label" => "Choisir la couleur du header"
    ]));

    $manager->add_control(new WP_Customize_Color_Control($manager, 'couleur_oeil',
    [ "section" => "apparence_body", 
      "label" => "Choisir la couleur de l'oeil"
    ]));

});

?>