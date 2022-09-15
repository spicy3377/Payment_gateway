<?php

$query = "SELECT * FROM food_order WHERE unique_id = ?";  
$stmt = mysqli_prepare($Conn, $query);
mysqli_stmt_bind_param($stmt, "s", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  
     // fetch results 
     $email = $row['email'];

}



?>