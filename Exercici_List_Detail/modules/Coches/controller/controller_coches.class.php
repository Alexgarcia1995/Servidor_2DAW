<?php
session_start();
//include  with absolute route
include ($_SERVER['DOCUMENT_ROOT'] . "/Servidor_2DAW/Exercici_Alta_Dropdowns/modules/Coches/utils/functions_coches.inc.php");
include ($_SERVER['DOCUMENT_ROOT'] . "/Servidor_2DAW/Exercici_Alta_Dropdowns/utils/upload.php");
include ($_SERVER['DOCUMENT_ROOT'] . "/Servidor_2DAW/Exercici_Alta_Dropdowns/utils/common.inc.php");

/////////////////////////////////////////////////// upload
if ((isset($_GET["upload"])) && ($_GET["upload"] == true)) {
    $result_avatar = upload_files();
    $_SESSION['result_avatar'] = $result_avatar;
    //echo debug($_SESSION['result_avatar']); //se mostraría en alert(response); de dropzone.js
}

/////////////////////////////////////////////////// alta_users_json
if ((isset($_POST['alta_users_json']))) {
    alta_users();
}

function alta_users() {
    $jsondata = array();
    $usersJSON = json_decode($_POST["alta_users_json"], true);
    $result = validate_user($usersJSON);

    if (empty($_SESSION['result_avatar'])) {
        $_SESSION['result_avatar'] = array('resultado' => true, 'error' => "", 'datos' => '/Servidor_2DAW/Exercici_Alta_Dropdowns/media/default-avatar.png');
    }
    $result_avatar = $_SESSION['result_avatar'];

    if (($result['resultado']) && ($result_avatar['resultado'])) {
        $arrArgument = array(
            'Tipo' => ucfirst($result['datos']['Tipo']),
            'marca' => ucfirst($result['datos']['marca']),
            'matricula' => $result['datos']['matricula'],
            'title_date' => $result['datos']['title_date'],
            'Potencia' => $result['datos']['potencia'],
            'Combustible' => $result['datos']['combustible'],
            'kilometraje' => $result['datos']['kilometraje'],
            'Descripcion' => strtoupper($result['datos']['descripcion']),
            'interests' => $result['datos']['interests'],
            'avatar' => $result_avatar['datos']
        );

        /////////////////insert into BD////////////////////////
        $arrValue = false;
        $path_model = $_SERVER['DOCUMENT_ROOT'] . '/Servidor_2DAW/Exercici_Alta_Dropdowns/modules/Coches/model/model/';
        $arrValue = loadModel($path_model, "coche_model", "create_coche", $arrArgument);
        //echo json_encode($arrValue);
        //die();

        if ($arrValue)
            $mensaje = "Su registro se ha efectuado correctamente, para finalizar compruebe que ha recibido un correo de validacion y siga sus instrucciones";
        else
            $mensaje = "No se ha podido realizar su alta. Intentelo mas tarde";

        $_SESSION['user'] = $arrArgument;
        $_SESSION['msje'] = $mensaje;
        $callback = "index.php?module=users&view=results_users";
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
        header('HTTP/1.0 400 Bad error', true, 404);
        echo json_encode($jsondata);
        //exit;
    }
}

/////////////////////////////////////////////////// delete
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

if(  (isset($_GET["load_country"])) && ($_GET["load_country"] == true)  ){
		$json = array();

    	$url = 'http://www.oorsprong.org/websamples.countryinfo/CountryInfoService.wso/ListOfCountryNamesByName/JSON';
		$path_model=$_SERVER['DOCUMENT_ROOT'] . '/Servidor_2DAW/Exercici_Alta_Dropdowns/modules/Coches/model/model/';
		$json = loadModel($path_model, "coche_model", "obtain_countries", $url);

		if($json){
			echo $json;
			exit;
		}else{
			$json = "error";
			echo $json;
			exit;
		}
	}

/////////////////////////////////////////////////// load_provinces
if(  (isset($_GET["load_provinces"])) && ($_GET["load_provinces"] == true)  ){
    	$jsondata = array();
        $json = array();

		$path_model=$_SERVER['DOCUMENT_ROOT'] . '/Servidor_2DAW/Exercici_Alta_Dropdowns/modules/Coches/model/model/';
		$json = loadModel($path_model, "coche_model", "obtain_provinces");

		if($json){
			$jsondata["provinces"] = $json;
			echo json_encode($jsondata);
			exit;
		}else{
			$jsondata["provinces"] = "error";
			echo json_encode($jsondata);
			exit;
		}
	}

/////////////////////////////////////////////////// load_cities
if(  isset($_POST['idPoblac']) ){
	    $jsondata = array();
        $json = array();

		$path_model=$_SERVER['DOCUMENT_ROOT'] . '/Servidor_2DAW/Exercici_Alta_Dropdowns/modules/Coches/model/model/';
		$json = loadModel($path_model, "coche_model", "obtain_cities", $_POST['idPoblac']);

		if($json){
			$jsondata["cities"] = $json;
			echo json_encode($jsondata);
			exit;
		}else{
			$jsondata["cities"] = "error";
			echo json_encode($jsondata);
			exit;
		}
	}
