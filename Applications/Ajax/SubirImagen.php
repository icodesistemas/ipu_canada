<?php
    session_start();
    $upload_dir = $_SESSION["__APPLICATION_PATH"]."/Cluster/";

    if(isset($_REQUEST['action'])){
        switch($_REQUEST['action']){
            case 'subir_imagen':
                subirImagen();
                break;
            case 'eliminar_imagen':
                eliminarImagen();
                break;
        }
    }

    function eliminarImagen(){
        global $upload_dir;
        unlink($_SESSION["__APPLICATION_PATH"].$_GET['img']);
    }

    function subirImagen(){
        global $upload_dir;
        $img = $_POST['hidden_data'];
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);

        $file = $upload_dir . mktime() . ".png";

        $success = file_put_contents($file, $data);
        echo "/Cluster/".str_replace($upload_dir,'',$file);
    }
?>