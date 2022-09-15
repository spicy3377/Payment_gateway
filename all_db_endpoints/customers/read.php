<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
// database connection will be here

// include database and object files
include_once '../config/database.php';
include_once '../objects/customers.php';
  
// instantiate database a
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$product = new Product($db);
  

// query customers
$stmt = $product->read();
$num = $stmt->rowCount();
  
//  if more than 0 record found
if($num>0){
  
    // customers array
    $products_arr=array();
    $products_arr["Customers"]=array();
  
    // retrieve our table contents
    // fetch() is faster than fetchAll()
   
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
  
        $product_item=array(
            "unique_id" => $unique_id,
            "auto_name" => $auto_name,
            "email" => $email,
            
        );
  
        array_push($products_arr["Customers"], $product_item);
    }
  
    // response code - 200 OK
    http_response_code(200);
  
    // show customer data in json format
    echo json_encode($products_arr);
}
  
?>
