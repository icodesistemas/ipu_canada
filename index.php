<?php
    session_start();
    ini_set('display_errors',1);

    define("__APPLICATION_PATH", (__dir__ ));
    define("__APPLICATION_FOLDER_MODEL", "WebSite/Model");
    define("__APPLICATION_FOLDER_CONTROLLER", "WebSite/Controller");
    define("__APPLICATION_FOLDER_VIEW", "WebSite/View");

    require_once "Spry/Spry.Configure.php";


    require_once "Public/template.php";



?>