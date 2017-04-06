<?php

/*
Api de conexión a Fidbox: Método sendUsuario
---------------------------
www.fidbox.es
*/

//Incluimos clase
include('../fidbox-api.php');

//Llamamos a clase
$fidbox = new Fidbox();

//Activamos DEBUG: Se recibirán respuestas pero no se añadirán datos a la DB ni se enviarán notificaciones.
$fidbox->debug = false; //"false" para produccion.

//Creamos cliente en Fidbox
$response = $fidbox->sendUsuario(array(
    'id_cliente' => '165',
    'nombre' => 'Alberto',
    'apellidos' => 'Fernandez',
    'email' => 'alberto.fidbox.test@gmail.com',
    'dni' => '1234567G',
    'movil' => '655239856',
    'delegacion' => 'Delegación del cliente',
    'departamento' => 'Departamento del cliente',
    'empresa' => 'Empresa del cliente',
    'tipologia' => 'Tipología del cliente',
    'categoria' => 'Categoría del cliente',
    'id_comercial' => '1', // No necesario para cuentas Fidbox Lite y Fidbox Lite Mini
    'password' => 'mi-pass-25',
    'notificar' => '1',
    'credencial' => 'cliente' // No necesario para cuentas Fidbox Lite y Fidbox Lite Mini
));

//Imprimimos respuesta
echo $response;

?>
