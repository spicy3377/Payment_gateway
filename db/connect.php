<?php
// defined connection
    define('SERVER', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'Payment');


$Conn = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);

    // Evaluate connection
	if(mysqli_connect_errno()) {
		echo 'A problem occured when connecting to this Gateway, please try again later';
		exit();
	}

?>