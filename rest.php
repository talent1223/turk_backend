<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

function db_connect(){
    $host = "localhost";
    $port = "3306";
    $database   = "turk_db";
    $user = "root";
    $password = "";

    $dbConnection = new mysqli($host, $user, $password, $database);
    if($dbConnection->connect_error){
        die("Error failed to connect to MySQL: " . $dbConnection->connect_error);
    } else {
        return $dbConnection;
    }
}

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );
$uri = end($uri);
$method = $_SERVER['REQUEST_METHOD'];

if ($uri = "data" && $method = "POST"){

    $connection = db_connect();

    // print_r(isset($data['ship_from_city']) ? $data['ship_from_city'] : "");

    // $ship_from_city = isset($data['ship_from_city']) ? $data['ship_from_city'] : "";

    $params = file_get_contents('php://input');
    $data = json_decode($params, true);

    $sql = "INSERT INTO data (ship_from_name, ship_from_address1, ship_from_address2, ship_from_city, ship_from_state, ship_from_zip, ship_to_name, ship_to_address1, ship_to_address2, ship_to_city, ship_to_state, ship_to_zip, return_address_name, return_address_address1, return_address_address2, return_address_city, return_address_state, return_address_zip, flat_rate, services, weight_ibs, weight_oz, dimensions) VALUES ('" . (isset($data['ship_from_name']) ? $data['ship_from_name'] : "")
    . "','" . (isset($data['ship_from_address1']) ? $data['ship_from_address1'] : "")
    . "','" . (isset($data['ship_from_address2']) ? $data['ship_from_address2'] : "")
    . "','" . (isset($data['ship_from_city']) ? $data['ship_from_city'] : "")
    . "','" . (isset($data['ship_from_state']) ? $data['ship_from_state'] : "") 
    . "','" . (isset($data['ship_from_zip']) ? $data['ship_from_zip'] : "")
    . "','" . (isset($data['ship_to_name']) ? $data['ship_to_name'] : "")
    . "','" . (isset($data['ship_to_address1']) ? $data['ship_to_address1'] : "") 
    . "','" . (isset($data['ship_to_address2']) ? $data['ship_to_address2'] : "")
    . "','" . (isset($data['ship_to_city']) ? $data['ship_to_city'] : "")
    . "','" . (isset($data['ship_to_state']) ? $data['ship_to_state'] : "")
    . "','" . (isset($data['ship_to_zip']) ? $data['ship_to_zip'] : "")
    . "','" . (isset($data['return_address_name']) ? $data['return_address_name'] : "")
    . "','" . (isset($data['return_address_address1']) ? $data['return_address_address1'] : "")
    . "','" . (isset($data['return_address_address2']) ? $data['return_address_address2'] : "")
    . "','" . (isset($data['return_address_city']) ? $data['return_address_city'] : "")
    . "','" . (isset($data['return_address_state']) ? $data['return_address_state'] : "")
    . "','" . (isset($data['return_address_zip']) ? $data['return_address_zip'] : "")
    . "','" . (isset($data['flat_rate']) ? $data['flat_rate'] : "")
    . "','" . (isset($data['service']) ? $data['service'] : "")
    . "','" . (isset($data['weight_ibs']) ? $data['weight_ibs'] : "")
    . "','" . (isset($data['weight_oz']) ? $data['weight_oz'] : "")
    . "','" . (isset($data['dimensions']) ? $data['dimensions'] : "")
    . "')";
    // echo $sql;

}
    
if ($connection->query($sql) === TRUE) {
    $data = array('status' => true, 'message' => "Data saved successfully!");

    echo json_encode($data);

  } else {
    $data = array('status' => false, 'message' => $connection->error.message);

    echo json_encode($data);
  }
  
  $connection->close();

?>