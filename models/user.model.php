<?php
function select_all_user() {
    $array_users=[
        [
            "nom_complet"=>" admin",
            "email"=> "admin@gato.com",
            "password" =>"admin",
            "role" => "ROLE_ADMIN"
        
        ],
        [
            "nom_complet"=>" admin",
            "email"=> "visiteur@gmail.com",
            "password" =>"visiteur",
            "role" => "ROLE_VISITEUR"
        
        ]

    ];
    if(!isset ($_SESSION["users"])){//initialisation 
        $_SESSION["users"]=$array_users;
    }
    return $_SESSION["users"];
}
?>