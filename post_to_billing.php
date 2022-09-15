 <?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {


        $typfood = $_POST['food'];
        $price= $_POST['price'];



        if (empty(trim($_POST["email"]))) {
			$error = 'input_error';
		} elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
			$error = '<font color="red">Your email address is invalid</font>';
		
		} else {
			$user_email = $_POST['email'];
               
			}

        // Call authorization of user file
        include "includes/auth_user.php";

      
            // BIND VARIABLES TO THE PREPARED STATEMENT AS PARAMETERS
                         
         $insert = "INSERT INTO food_order (unique_id, food, email) VALUES(?, ?, ?)";
         $stmt = mysqli_prepare($Conn, $insert);
         mysqli_stmt_bind_param($stmt, "sss", $u_id, $typfood, $user_email);
         mysqli_stmt_execute($stmt);
         header("Location:billing.php?dialogue=$typfood");
                         
                           
      
         }

?>
        