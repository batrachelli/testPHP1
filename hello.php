<?php
error_reporting( E_ERROR );
ini_set("soap.wsdl_cache_enabled", "0" );

$client = new SoapClient("http://156.67.52.87:8080/Shop/ws/Hello.1Cws?wsdl",
    array(
        'login' => 'WS', //логин
        'password' => '1', //пароль
        'trace' => true,
        'features' => SOAP_USE_XSI_ARRAY_TYPE,
    )
);
$result = $client->Hello();
var_dump($result);

