<?php
//require_once('../views/login.html.php');
//LES CHEMINS ABSOLUE MENANT VERS LES VIEWS( le chemin vers le html, vers le css)
/*var_dump($_SERVER);
die();*/
define("ROOT",str_replace(DIRECTORY_SEPARATOR."public".DIRECTORY_SEPARATOR."index.php", "", $_SERVER["SCRIPT_FILENAME"]));
define("ROOT_VIEWS",ROOT.DIRECTORY_SEPARATOR."views".DIRECTORY_SEPARATOR);

define("ROOT_LIB",ROOT.DIRECTORY_SEPARATOR."lib".DIRECTORY_SEPARATOR);
define("ROOT_MODELS",ROOT.DIRECTORY_SEPARATOR."models".DIRECTORY_SEPARATOR);
define("ROOT_VIEWS_INC",ROOT_VIEWS."inc".DIRECTORY_SEPARATOR);
//le chemin des action de nos formulaires
define("WEB_ROOT",str_replace("index.php", "", $_SERVER["SCRIPT_NAME"]));
define("ROOT_CONTROLLERS",WEB_ROOT."controllers");
if($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['page'])) {
        //on a cliquer sur un lien
        switch ($_GET['page']) {
            case 'login':
                require_once(ROOT_VIEWS."login.html.php");
                break;
            case 'register':
                require_once(ROOT_VIEWS."register.html.php");
                break;
            case 'accueil.visiteur':
                require_once(ROOT_VIEWS."accueil.visiteur.html.php");
                break;
            case 'accueil.admin':
                require_once(ROOT_VIEWS."accueil.admin.html.php");
                break;
            case 'user.list':
                require_once(ROOT_VIEWS."show.user.html.php");
                break;
            case 'logout':
                require_once(ROOT_VIEWS."login.html.php");
                break;
            
        
            default:
                # code...
                break;
        }
    }else {
        require_once(ROOT_VIEWS."login.html.php");
    }
}elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once(ROOT.DIRECTORY_SEPARATOR."controllers".DIRECTORY_SEPARATOR."security.php");
}
?>