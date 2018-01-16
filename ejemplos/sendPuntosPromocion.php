<?php

/*
Api de conexión a Recambios y mas: Método sendPuntosPromocion
---------------------------
www.recambiosymas.com
*/

//Incluimos clase
include('../recambios-api.php');

//Llamamos a clase
$rAPI = new RecambiosApi();

//Activamos DEBUG: Se recibirán respuestas pero no se añadirán datos a la DB ni se enviarán notificaciones.
$rAPI->debug = false; //"false" para produccion.

//Creamos puntos de promoción en Fidbox
$response = $rAPI->sendPuntosPromocion(array(
    'id_cliente' => '165',
    'puntos' => '150',
    'comentario' => 'Puntos añadidos por compra de producto'
));

//Imprimimos respuesta
echo $response;

?>
