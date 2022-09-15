<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

            // start session
        session_start(); 
        // connect to db
        include "../db/connect.php";

        $id = $_SESSION['u_id'];

	$sql = "SELECT * FROM `food_order` WHERE `unique_id` = '$id'";
	$get_data_query = mysqli_query($Conn, $sql) or die(mysqli_error($Conn));
		if(mysqli_num_rows($get_data_query)!=0){
		$result = array();
		
		while($r = mysqli_fetch_array($get_data_query)){
			extract($r);
			$result[] = array("email" => $email, "food" => $food, 'unique_id' => $id);
		}
		$json = array("status" => 1, "info" => $result);
	}
	else{
		$json = array("status" => 0, "error" => "Customer has no payment records");
	}
mysqli_close($Conn);

echo json_encode($json);

?>