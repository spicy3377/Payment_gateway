<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// database connection
include_once '../config/database.php';
  
// instantiate customer object
include_once '../objects/insert.php';
  
$database = new Database();
$db = $database->getConnection();
  
$insert = new Insert($db);
  
// get posted data
$data = json_decode(file_get_contents("php://input"));
  
// making sure data is not empty
if(
    !empty($data->auto_name) &&
    !empty($data->email) &&
    !empty($data->unique_id)
   
){
  
    // set product property values
    $insert->auto_name = $data->auto_name;
    $insert->unique_id = $data->unique_id;
    $insert->email = $data->email;
    $insert->date_n_time = date('Y-m-d H:i:s');
  
    // creating the customer
    if($product->create()){
  
        // set response code - 201 created
        http_response_code(201);
  
       
        echo json_encode(array("message" => "customer created."));
    }
  
    // if unable to create the customer,
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to create customer."));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);

    echo json_encode(array("message" => "Unable to create customer at the moment. Pleaas try from a client side."));
}
?>