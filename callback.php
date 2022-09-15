<?php 
    if(isset($_GET['status']))
    {
        session_start(); 
        // connect to db
        include "db/connect.php";

  
        $id = $_SESSION['u_id'];
    

        $query = "SELECT * FROM users WHERE unique_id = ?";  
           $stmt = mysqli_prepare($Conn, $query);
           mysqli_stmt_bind_param($stmt, "s", $id);
           mysqli_stmt_execute($stmt);
           $result = mysqli_stmt_get_result($stmt);
           while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
             
                // fetch results 
                

                $email = $row['email'];
            
           }

        //* check payment status
        if($_GET['status'] == 'cancelled')
        {
            // echo 'YOu cancel the payment';
            header('Location: failed.php');
        }
        elseif($_GET['status'] == 'successful')
        {
            $txid = $_GET['transaction_id'];

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$txid}/verify",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                  "Content-Type: application/json",
                  "Authorization: Bearer FLWSECK_TEST-830a52a5a253a010e07e8d63b6c0226f-X"
                ),
              ));
              
              $response = curl_exec($curl);
              
              curl_close($curl);
              
              $res = json_decode($response);
              if($res->status)
              {
                $amountPaid = $res->data->charged_amount;
                $amountToPay = $res->data->meta->price;
                if($amountPaid >= $amountToPay)
                {

                    $no= "1";

                    $query = "UPDATE food_order SET `status` = ? WHERE email = ?";
                    $stmt = mysqli_prepare($Conn, $query);
                    mysqli_stmt_bind_param($stmt, "is", $no, $email);
                    mysqli_stmt_execute($stmt);
                   

                    echo 'Payment successful';
                    //* Redirect to sucess page
                    header('Location: suc.html');
                    exit();

                    
                }
                else
                {
                    echo 'Hmmm!! are you a yahoo bou huh..? Fraud transactio detected';
                }
              }
              else
              {
                  echo 'Can not process payment';
              }
        }
    }
?>