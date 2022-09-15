<?php

  $querys = "SELECT * FROM all_food";  
  $stmt = mysqli_prepare($Conn, $querys);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

            // fetch results 
        $fud = $row['food'];

        $price = $row['price'];
                                
    echo '

        <option value="'.$fud.'">'.$fud.'-₦'.$price.'</option>
        
        ';
    
    } 
    
?>