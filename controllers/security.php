<?php
require_once(ROOT_LIB."validator.php");
$array_error=[];
if(isset($_POST["btn_submit"])){
    if ($_POST["btn_submit"]=="btn_login"){

        
        if(!est_vide($_POST["login"], "login",$array_error)){
            est_mail($_POST["login"], "login",$array_error);
        }
        est_vide($_POST["password"], "password",$array_error);

        if(form_valide($array_error)){

            

        }
   
}

?>