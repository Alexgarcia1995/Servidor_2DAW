<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
include 'modules/Habitaciones/utils/functions_Habitaciones.inc.php';

if ($_POST) {
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
        */);

        $mensaje = "User has been successfully registered";

        $_SESSION['user'] = $arrArgument;
        $_SESSION['msje'] = $mensaje;

        $callback = "index.php?module=Habitaciones&view=result_Habitaciones";
        redirect($callback);
    } else {
        $error = $result['error'];
    }
}
include 'modules/Habitaciones/view/create_Habitaciones.php';
