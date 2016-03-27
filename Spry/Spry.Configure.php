<?php
    /**
     * Capitan  Spry
     * User: abejarano
     * Date: 15/01/16
     * Time: 09:37 AM
     */
    require_once "Spry.Base.php";
    require_once "Spry.Framework.php";

    /*Servicios disponibles con el framework*/
    require_once "Function/GeneralFunction.php";

    require_once "Service/DataBaseService/Pdo/DataBase.php";
    require_once "Service/EmailService/Email.php";

    /** @var  $file contiene la ruta al archivo package.json que contiene la configuracion general de la aplicacion */
    $file = __APPLICATION_PATH."/package.json";
    if(!file_exists($file)){
        die("por favo configure el archivo package.json");
    }
    $json = file_get_contents($file);
    $conf = json_decode($json, True);


    $framework = new SpryBase();
    $framework->Functions = new SpryFuncions();

    if(isset($conf["services"]["DataBaseSQL"])){
        $framework->DB = new DataBase($conf["services"]["DataBaseSQL"]);
    }
    if(isset($conf["services"]["MongoDB"])){
        require_once "Service/DataBaseService/Mongo/dbMongo.php";
        $framework->Mongo = new dbMongo($conf["services"]["MongoDB"]);
    }
    if(isset($conf["services"]["Correos"])){
        $framework->Mail = new ServiceMail($conf["services"]["Correos"]);
    }

    $Spry = new Spry($framework, $conf);
    $Spry->setLoadApplication();


?>