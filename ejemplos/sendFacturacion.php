<?php

/*
Api de conexión a Fidbox: Método sendFacturación
---------------------------
www.fidbox.es
*/

//Incluimos clase
include('../fidbox-api.php');

//Llamamos a clase
$fidbox = new Fidbox();

//Activamos DEBUG: Se recibirán respuestas pero no se añadirán datos a la DB ni se enviarán notificaciones.
$fidbox->debug = false; //"false" para produccion.

//Creamos facturación en Fidbox
$response = $fidbox->sendFacturacion(array(
    'id_cliente' => '165',
    'ct' => '10555', //Facturacion total
    'cc' => '6854', //Facturacion promocional
    'mes' => '03/2017',
    'comentario' => 'Facturación de marzo 2017'
));

//Imprimimos respuesta
echo $response;

?>
