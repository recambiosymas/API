<?php

/*
Api de conexión a Fidbox: Método sendPuntosPromocion
---------------------------
www.fidbox.es
*/

//Incluimos clase
include('../fidbox-api.php');

//Llamamos a clase
$fidbox = new Fidbox();

//Activamos DEBUG: Se recibirán respuestas pero no se añadirán datos a la DB ni se enviarán notificaciones.
$fidbox->debug = false; //"false" para produccion.

//Creamos puntos de promoción en Fidbox
$response = $fidbox->sendPuntosPromocion(array(
    'id_cliente' => '165',
    'puntos' => '150',
    'comentario' => 'Puntos añadidos por compra de producto'
));

//Imprimimos respuesta
echo $response;

?>
