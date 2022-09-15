<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 //This header will allow user to access service with POST method and get JSON data from the service.

	include "../db/connect.php";

	    //Creating Function that will generate random id's
	function generateRandomString($length = 12){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++){
		$randomString .= $characters[rand(0, $charactersLength - 1)];

	}
	return $randomString;
   }

 if($_SERVER['REQUEST_METHOD'] == "POST"){
        // Get data from the REST client
        $email ="uygugughw";
						
				include "names.php";

				$a_name = randomName();

  
	// Insert data into database
	$sql = "INSERT INTO `users` (`unique_id`, `auto_name`, `email`) VALUES ('$u_id', '$a_name', '$email');";
	$post_data_query = mysqli_query($Conn, $sql);

	if($post_data_query){
			$json = array("status" => 1, "Success" => "Customers has been created successfully!");
		}
		else{
			$json = array("status" => 0, "Error" => "Error Creating! Please try again!");
		}
	}
		else{
	$json = array("status" => 0, "Info" => "Request method not accepted! try posting from a client side");
}
mysqli_close($Conn);


echo json_encode($json);

?>