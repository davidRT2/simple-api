<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
$request_method = $_SERVER["REQUEST_METHOD"];
switch ($request_method) {
    case 'GET':
        $uri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        $response = null;
        if (isset($uri[0]) && !empty($uri[0])) {
            if (ctype_alpha($uri[0])) {
                $response = "Hello " . $uri[0];
            } else {
                //echo json_encode(array("status" => 0, "status_message" => "Nama tidak boleh mengandung angka atau symbol"));
                $response = "Nama tidak boleh mengandung angka atau symbol";
            }
        } else {
            $response = "Hello World";
        }
        if(!empty($response)) echo json_encode($response);
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        echo json_encode(array("status" => 0, "status_message" => "Metode yang diminta tidak dikenali oleh API."));
        break;
}
