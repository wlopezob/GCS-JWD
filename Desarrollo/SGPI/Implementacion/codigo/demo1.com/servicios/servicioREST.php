<?php
header("Content-Type:application/json");
 
    $nombre = $_GET['nombre'];
    if(!empty($nombre))
    {
        $peso = $_GET['peso'];
        $estatura = $_GET['estatura'];
 
        if(!empty($peso) && !empty($estatura))
        {
            $estatura /= 100;
            $imc = $peso / ($estatura * $estatura);
            $imc = round($imc, 2);
            deliver_response(200, "$nombre tu IMC es de $imc", $imc);
        }
        else
        {
            deliver_response(200, "peso o estatura no validos", null);
        }

    }
    else
    {
        deliver_response(200, "Nombre no valido", null);
    }
 
    function deliver_response($status, $status_message, $data)
    {
        header("HTTP/1.1 $status $status_message");
        $response['status'] = $status;
        $response['status_message'] = $status_message;
        $response['data'] = $data;
 
        $json_response = json_encode($response);
        echo $json_response;
    }
 
?>