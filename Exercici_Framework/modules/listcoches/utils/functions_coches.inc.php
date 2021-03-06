<?php
function validate_user($value) {
    $error = array();
    $valido = true;
    $filtro = array(
        'marca' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/^[A-Za-z]{3,30}$/')
        ),
        'matricula' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => "/^([A-Z]{0,2})(\d{4})([A-Z]{0,3})*$/")
        ),
        'title_date' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/^(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d$/')
        ),

          'potencia' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/^[0-9- -.]+$/')
        ),
        'kilometraje' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/^[0-9- -.]+$/')
        ),
        /*'address' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/^[a-z0-9- -.]+$/i')
        ),
        'birth_date' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/^(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d$/')
        ),
        'user' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/^[0-9a-zA-Z]{2,20}$/')
        ),
        'pass' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/^[0-9a-zA-Z]{6,32}$/')
        ),
        'email' => array(
            'filter' => FILTER_CALLBACK,
            'options' => 'valida_email'
        ),*/
    );


    $resultado = filter_var_array($value, $filtro);
    //no filter
    $resultado['Tipo'] = $value['Tipo'];
    $resultado['interests'] = $value['interests'];
    $resultado['combustible'] = $value['combustible'];
    $resultado['descripcion'] = $value['descripcion'];
/*
    if ($resultado['birth_date']) {
        //validate to user's over 16
        $dates = validateAge($resultado['birth_date']);

        if (!$dates) {
            $error['birth_date'] = 'User must have more than 16 years';
            $valido = false;
        }
    }


    if ($resultado['birth_date'] && $resultado['title_date']) {
        //compare date of birth with title_date
        $dates = valida_dates($resultado['birth_date'], $resultado['title_date']);

        if (!$dates) {
            $error['birth_date'] = 'birth date must be before the date of registration and must have more than 16 years.';
            $valido = false;
        }
    }

*/
    if ($resultado['Tipo'] === 'Seleccione Tipo Vehiculo') {
        $error['Tipo'] = "No has seleccionado el tipo de Vehiculo";
        $valido = false;
    }


    if (count($resultado['interests']) <= 1) {
        $error['interests'] = "Select 2 or more.";
        $valido =  false;
    }

    if ($resultado != null && $resultado) {


        if (!$resultado['marca']) {
            $error['marca'] = 'Name must be 2 to 30 letters';
            $valido = false;
        }
        if (!$resultado['matricula']) {
            $error['matricula'] = 'matricula must be 2 to 30 letters';
            $valido = false;
        }
        if (!$resultado['title_date']) {
            if ($resultado['title_date'] == "") {
                $error['title_date'] = "this camp can't empty";
                $valido = false;
            } else {
                $error['title_date'] = 'error format date (mm/dd/yyyy)';
                $valido = false;
            }
        }
    } else {
        $valido = false;
    };
/*
        if (!$resultado['user']) {
            $error['user'] = 'User must be 2 to 20 characters';
            $valido = false;
        }

        if (!$resultado['email']) {
            $error['email'] = 'error format email (example@example.com)';
            $valido = false;
        }


        if (!$resultado['pass']) {
            $error['pass'] = 'Pass must be 6 to 32 characters';
            $valido = false;
        }

        if (!$resultado['address']) {
            $error['address'] = "Address don't have  symbols.";
            $valido = false;
        }
*/


        /*if (!$resultado['birth_date']) {
            if ($resultado['birth_date'] == "") {
                $error['birth_date'] = "this camp can't empty";
                $valido = false;
            } else {
                $error['birth_date'] = 'error format date (mm/dd/yyyy)';
                $valido = false;
            }
        }
*/


    return $return = array('resultado' => $valido, 'error' => $error, 'datos' => $resultado);
}

function valida_dates($start_days, $dayslight) {

    $start_day = date("m/d/Y", strtotime($start_days));
    $daylight = date("m/d/Y", strtotime($dayslight));

    list($mes_one, $dia_one, $anio_one) = split('/', $start_day);
    list($mes_two, $dia_two, $anio_two) = split('/', $daylight);

    $dateOne = new DateTime($anio_one . "-" . $mes_one . "-" . $dia_one);
    $dateTwo = new DateTime($anio_two . "-" . $mes_two . "-" . $dia_two);

    if ($dateOne <= $dateTwo) {
        return true;
    }
    return false;
}

// validate birthday
function validateAge($birthday, $age = 16) {
    // $birthday can be UNIX_TIMESTAMP or just a string-date.
    if (is_string($birthday)) {
        $birthday = strtotime($birthday);
    }

    // check
    // 31536000 is the number of seconds in a 365 days year.
    if (time() - $birthday < $age * 31536000) {
        return false;
    }

    return true;
}

//validate email
function valida_email($email) {
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (filter_var($email, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/^.{5,50}$/')))) {
            return $email;
        }
    }
    return false;
}
