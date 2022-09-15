<?php

if (isset($_GET['dialogue'])) {
     if ($_GET['dialogue'] == "") {
         header("location: index.php");
          exit();
    } else {
      $typfood = $_GET['dialogue']; //getting the food
  }
    } else {

        header("location: page_not_found/invalid");
        exit();
  }

    $sql = "SELECT * FROM `all_food` WHERE `food` = ? ";
if ($stmt = mysqli_prepare($Conn, $sql))
        mysqli_stmt_bind_param($stmt, "s", $typfood);
        mysqli_stmt_execute($stmt);
    
     while (mysqli_stmt_fetch($stmt)) {
        // fetch results

        }

if (mysqli_stmt_num_rows($stmt) > 0) {
        // true
    } else {

        header("location: page_not_found/invalid");
        exit();
    }