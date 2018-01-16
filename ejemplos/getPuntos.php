<?php

/*
Api de conexión a Recambios y mas: Método getPuntos
---------------------------
www.recambiosymas.com
*/

//Incluimos clase
include('../recambios-api.php');

//Llamamos a clase
$rAPI = new RecambiosApi();

//Activamos DEBUG: Se recibirán respuestas pero no se añadirán datos a la DB ni se enviarán notificaciones.
$rAPI->debug = false; //"false" para produccion.

//Obtenemos puntos de un cliente desde Fidbox
$response = $rAPI->getPuntos(array(
    'id_cliente' => '165',
));

//Imprimimos respuesta
echo $response;

?>
