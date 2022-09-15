<?php

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

    $u_id = generateRandomString(); //Variable that holds my generated string.
 
    //  defining my sessions variable
    $_SESSION["key"] = md5(time());
    $_SESSION['u_id'] = $u_id;

include "names.php";

    $a_name = randomName();

$insert = "INSERT INTO users (unique_id, auto_name, email, date_n_time) VALUES(?, ?, ?,  NOW())";
    $stmt = mysqli_prepare($Conn, $insert);
    mysqli_stmt_bind_param($stmt, "sss", $u_id, $a_name, $user_email);
    mysqli_stmt_execute($stmt);
    

?>