<?php
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . "/Servidor_2DAW/Exercici_Dropzone/modules/Habitaciones/utils/functions_Habitaciones.inc.php");
include ($_SERVER['DOCUMENT_ROOT'] . "/Servidor_2DAW/Exercici_Dropzone/utils/upload.php");

//////////////////////////////////////////////////////////////// upload
if ((isset($_GET["upload"])) && ($_GET["upload"] == true)) {
    $result_avatar = upload_files();
    $_SESSION['result_avatar'] = $result_avatar;
    echo debug($_SESSION['result_avatar']); //se mostraría en alert(response); de dropzone.js
}
/*if ($_POST) {
    $result = validate();
    if ($result['resultado']) {
        $arrArgument = array(
            'Tipo' => ucfirst($result['datos']['Tipo']),
            'Nombre hotel' => ucfirst($result['datos']['nombre_hotel']),
            'Fecha disponibilidad' => $result['datos']['fecha_disponibilidad'],
            'Direccion' => $result['datos']['direccion'],
            'opciones' => $result['datos']['opciones'],
            /*'user' => $result['datos']['user'],
            'pass' => $result['datos']['pass'],
            'email' => $result['datos']['email'],
            'en_lvl' => strtoupper($result['datos']['en_lvl']),
            'interests' => $result['datos']['interests'],
        );

        $mensaje = "User has been successfully registered";

        $_SESSION['user'] = $arrArgument;
        $_SESSION['msje'] = $mensaje;

        $callback = "index.php?module=Habitaciones&view=result_Habitaciones";
        redirect($callback);
    } else {
        $error = $result['error'];
    }
}*/
if ((isset($_POST['alta_users_json']))) {
    alta_users();
}
function alta_users() {
    $jsondata = array();
    $usersJSON = json_decode($_POST["alta_users_json"], true);
    $result = validate($usersJSON);

    if (empty($_SESSION['result_avatar'])) {
        $_SESSION['result_avatar'] = array('resultado' => true, 'error' => "", 'datos' => 'media/default-avatar.png');
    }
    $result_avatar = $_SESSION['result_avatar'];

    if (($result['resultado']) && ($result_avatar['resultado'])) {
        $arrArgument = array(
          'Tipo' => ucfirst($result['datos']['Tipo']),
          'Nombre_hotel' => ucfirst($result['datos']['nombre_hotel']),
          'Fecha_disponibilidad' => $result['datos']['fecha_disponibilidad'],
          'Direccion' => $result['datos']['direccion'],
          'Opciones' => $result['datos']['opciones'],
          'avatar' => $result_avatar['datos']
        );

        $mensaje = "User has been successfully registered";

        //redirigir a otra p�gina con los datos de $arrArgument y $mensaje
        $_SESSION['user'] = $arrArgument;
        $_SESSION['msje'] = $mensaje;
        $callback = "index.php?module=Habitaciones&view=result_Habitaciones";

        $jsondata["success"] = true;
        $jsondata["redirect"] = $callback;
        echo json_encode($jsondata);
        exit;
    } else {
        //$error = $result['error'];
        //$error_avatar = $result_avatar['error'];
        $jsondata["success"] = false;
        $jsondata["error"] = $result['error'];
        $jsondata["error_avatar"] = $result_avatar['error'];

        $jsondata["success1"] = false;
        if ($result_avatar['resultado']) {
            $jsondata["success1"] = true;
            $jsondata["img_avatar"] = $result_avatar['datos'];
        }
        header('HTTP/1.0 400 Bad error');
        echo json_encode($jsondata);
        //exit;
    }
}
//////////////////////////////////////////////////////////////// delete
if (isset($_GET["delete"]) && $_GET["delete"] == true) {
    $_SESSION['result_avatar'] = array();
    $result = remove_files();
    if ($result === true) {
        echo json_encode(array("res" => true));
    } else {
        echo json_encode(array("res" => false));
    }
}

//////////////////////////////////////////////////////////////// load
if (isset($_GET["load"]) && $_GET["load"] == true) {
    $jsondata = array();
    if (isset($_SESSION['user'])) {
        //echo debug($_SESSION['user']);
        $jsondata["user"] = $_SESSION['user'];
    }
    if (isset($_SESSION['msje'])) {
        //echo $_SESSION['msje'];
        $jsondata["msje"] = $_SESSION['msje'];
    }
    close_session();
    echo json_encode($jsondata);
    exit;
}

function close_session() {
    unset($_SESSION['user']);
    unset($_SESSION['msje']);
    $_SESSION = array(); // Destruye todas las variables de la sesión
    session_destroy(); // Destruye la sesión
}

/////////////////////////////////////////////////// load_data
if ((isset($_GET["load_data"])) && ($_GET["load_data"] == true)) {
    $jsondata = array();
    if (isset($_SESSION['user'])) {
        $jsondata["user"] = $_SESSION['user'];
        echo json_encode($jsondata);
        exit;
    } else {
        $jsondata["user"] = "";
        echo json_encode($jsondata);
        exit;
    }
}
