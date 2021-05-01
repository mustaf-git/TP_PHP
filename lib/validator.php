<?php
function est_vide(string $val, string $key, array &$array_error,  $sms="champ obligatoire"):bool{
 
    if(empty($val)){
        $array_error[$key] = $sms;
        return true;
    }
    return false;
    
}


//Fonction PHP pour controler une adresse Mail
function est_mail(string $val, string $key, array &$array_error,  $sms="verifier votre saisie email"):bool{
    if (!filter_var($val, FILTER_VALIDATE_EMAIL)){
        $array_error[$key] = $sms;
        return false;
    }
    return true;
}
    
function form_valide(array $array_error):bool {
    return count($array_error)===0;
}
