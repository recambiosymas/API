<?php

/*
Api de conexión a Recambios y mas: Método sendUsuario
---------------------------
www.recambios.com
*/

//Incluimos clase
include('../recambios-api.php');

//Llamamos a clase
$rAPI = new RecambiosApi();

//Activamos DEBUG: Se recibirán respuestas pero no se añadirán datos a la DB ni se enviarán notificaciones.
$rAPI->debug = false; //"false" para produccion.

//Creamos cliente en Fidbox
$response = $rAPI->sendUsuario(array(
    'id_cliente' => '165',
    'nombre' => 'Alberto',
    'apellidos' => 'Fernandez',
    'email' => 'alberto.test@gmail.com',
    'dni' => '1234567G',
    'movil' => '655239856',
    'delegacion' => 'Delegación del cliente',
    'departamento' => 'Departamento del cliente',
    'empresa' => 'Empresa del cliente',
    'tipologia' => 'Tipología del cliente',
    'categoria' => 'Categoría del cliente',
    'id_comercial' => '1',
    'password' => 'mi-pass-25',
    'notificar' => '1',
    'credencial' => 'cliente'
));

//Imprimimos respuesta
echo $response;

?>
