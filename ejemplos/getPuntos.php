<?php

/*
Api de conexión a Fidbox: Método getPuntos
---------------------------
www.fidbox.es
*/

//Incluimos clase
include('../fidbox-api.php');

//Llamamos a clase
$fidbox = new Fidbox();

//Activamos DEBUG: Se recibirán respuestas pero no se añadirán datos a la DB ni se enviarán notificaciones.
$fidbox->debug = false; //"false" para produccion.

//Obtenemos puntos de un cliente desde Fidbox
$response = $fidbox->getPuntos(array(
    'id_cliente' => '165',
));

//Imprimimos respuesta
echo $response;

?>
