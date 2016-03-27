<?php
    session_start();
    ini_set("display_errors", 1);

    define("__APPLICATION_PATH", (__dir__ ));
    define("__APPLICATION_FOLDER_MODEL", "Applications/Model");
    define("__APPLICATION_FOLDER_CONTROLLER", "Applications/Controller");
    define("__APPLICATION_FOLDER_VIEW", "Applications/View");

    require_once "Spry/Spry.Configure.php";


    require_once "Public/layout.php";



?>