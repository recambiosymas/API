<?php
/*
Api de conexión a Fidbox
---------------------------
www.fidbox.es
https://github.com/fidbox/API
*/

//Configuración
define('FIDBOX_URL','http://demo.fidbox.es');       //Remplazar por url propia
define('FIDBOX_API_KEY','{TU-API-KEY}');            //Remplazar por KEY propia (Dentro de fidbox, apartado "API").

class Fidbox {

    var $url     = FIDBOX_URL;
    var $api_key = FIDBOX_API_KEY;
    var $debug   = false; //Configurar en "true" para realizar pruebas. Se recibirán respuestas pero no se añadirán datos a la DB ni se enviarán notificaciones.

    /*
    Metodos disponibles:
    --------------------
    sendUsuario -> Creación de usuarios en el sistema
    sendFacturacion -> Creación de facturación dentro del sistema
    sendPuntosPromocion -> Creación de puntos de promocion
    getPuntos -> Obtención de puntos de un cliente en concreto
    */

    /* Creación de usuarios en el sistema */
    public function sendUsuario($data) {

        /*
        Datos a recibir dentro de array "$data"
        ----------------------------------------
        api_key -> obligatorio -> string
        debug -> bool (true|false)
        id_cliente -> obligatorio -> integer
        nombre -> obligatorio -> string
        apellidos -> string
        email -> obligatorio -> string
        dni -> string
        movil -> string
        delegacion -> string
        departamento -> string
        empresa -> string
        tipologia -> string
        categoria -> string
        id_comercial -> integer
        password -> obligatorio -> string
        notificar -> obligatorio -> bool (1|0)
        credencial -> obligatorio -> enum (cliente|personal|comercial)
        */

        $method = 'sendUsuario';
        return $this->CALL($method,$data);

    }

    /* Creación de facturación dentro del sistema */
    public function sendFacturacion($data) {

        /*
        Datos a recoger
        ----------------------------------------
        api_key -> obligatorio -> string
        debug -> bool (true|false)
        id_cliente -> obligatorio -> integer
        ct (Facturación total) -> obligatorio -> integer
        cc (Facturación promocional) -> obligatorio -> integer
        mes -> obligatorio -> string (Fecha formato mm/yyyy );
        comentario -> string
        */

        $method = 'sendFacturacion';
        return $this->CALL($method,$data);

    }

    /* Creación de puntos de promocion */
    public function sendPuntosPromocion($data) {

        /*
        Datos a recoger
        ----------------------------------------
        api_key -> obligatorio -> string
        debug -> bool (true|false)
        id_cliente -> obligatorio -> integer
        puntos -> obligatorio -> integer
        comentario -> string
        */

        $method = 'sendPuntosPromocion';
        return $this->CALL($method,$data);

    }

    /* Obtención de puntos de un cliente en concreto */
    public function getPuntos($data) {

        /*
        Datos a recoger
        ----------------------------------------
        api_key -> obligatorio -> string
        id_cliente -> obligatorio -> integer
        */

        $method = 'getPuntos';
        return $this->CALL($method,$data);

    }

    /* Llamamos a API */
    public function CALL($method,$data) {
        $postData = '';
        $url = $this->url.'/api/'.$method.'/';
        foreach($data as $k => $v) {
            $postData .= $k . '='.$v.'&';
        }
        $debug = $this->debug ? 'true' : 'false';
        $postData .= 'api_key='.$this->api_key.'&debug='.$debug;
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false);
        curl_setopt($ch,CURLOPT_POST, count($postData));
        curl_setopt($ch,CURLOPT_POSTFIELDS, $postData);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

}


?>
