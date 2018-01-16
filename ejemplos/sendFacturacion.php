<?php

/*
Api de conexión a Recambios y mas: Método sendFacturación
---------------------------
www.recambiosymas.com
*/

//Incluimos clase
include('../recambios-api.php');

//Llamamos a clase
$rAPI = new RecambiosApi();

//Activamos DEBUG: Se recibirán respuestas pero no se añadirán datos a la DB ni se enviarán notificaciones.
$rAPI->debug = false; //"false" para produccion.

//Creamos facturación en Recambios y mas
$response = $rAPI->sendFacturacion(array(
    'id_cliente' => '165',
    'ct' => '10555', //Facturacion total
    'cc' => '6854', //Facturacion promocional
    'mes' => '03/2017',
    'comentario' => 'Facturación de marzo 2017'
));

//Imprimimos respuesta
echo $response;

?>
