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

    print_r($_POST["ship_from_name"]);
    
    $sql = "INSERT INTO data (ship_from_name, ship_from_address1, ship_from_address2, ship_from_city, ship_from_state, ship_from_zip, ship_to_name, ship_to_address1, ship_to_address2, ship_to_city, ship_to_state, ship_to_zip, return_address_name, return_address_address1, return_address_address2, return_address_city, return_address_state, return_address_zip, flat, padded_bubble_mailer, parcel, flat_rate_envelope, flat_rate_legal_envelope, flat_rate_padded_envelope, small_flat_rate_box, medium_flat_rate_box, large_flat_rate_box, regional_rate_box_a, regional_rate_box_b, weight_lbs, weight_oz, dimensions) VALUES ('" . $_POST['ship_from_name']  
    . "','" . $_POST['ship_from_address1'] 
    . "','" . $_POST['ship_from_address2'] 
    . "','" . $_POST['ship_from_city'] 
    . "','" . $_POST['ship_from_state'] 
    . "','" . $_POST['ship_from_zip'] 
    . "','" . $_POST['ship_to_name'] 
    . "','" . $_POST['ship_to_address1'] 
    . "','" . $_POST['ship_to_address2'] 
    . "','" . $_POST['ship_to_city'] 
    . "','" . $_POST['ship_to_state'] 
    . "','" . $_POST['ship_to_zip'] 
    . "','" . $_POST['return_address_name'] 
    . "','" . $_POST['return_address_address1'] 
    . "','" . $_POST['return_address_address2'] 
    . "','" . $_POST['return_address_city'] 
    . "','" . $_POST['return_address_state'] 
    . "','" . $_POST['return_address_zip'] 
    . "','" . $_POST['flat'] 
    . "','" . $_POST['padded_bubble_mailer'] 
    . "','" . $_POST['parcel'] 
    . "','" . $_POST['flat_rate_envelope'] 
    . "','" . $_POST['flat_rate_legal_envelope'] 
    . "','" . $_POST['flat_rate_padded_envelope'] 
    . "','" . $_POST['small_flat_rate_box'] 
    . "','" . $_POST['medium_flat_rate_box'] 
    . "','" . $_POST['large_flat_rate_box'] 
    . "','" . $_POST['regional_rate_box_a'] 
    . "','" . $_POST['regional_rate_box_b'] 
    . "','" . $_POST['weight_lbs'] 
    . "','" . $_POST['weight_oz'] 
    . "','" . $_POST['dimensions'] 
    . "')";

    print_r($sql);

}
    

if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $connection->error;
  }
  
  $connection->close();

?>