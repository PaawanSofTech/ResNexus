<?php

    ini_set( 'display_errors', 1 );
    
    error_reporting( E_ALL );
    
    $from = " restaurantalton@gmail.com";
    
    $to = "rgb2k15@gmail.com";
    
    $subject = "Checking PHP mail";
    
    $message = "Delicious Food";
    
    $headers = "From:" . $from;
    
    mail($to,$subject,$message, $headers);
    
    echo "<script>
		alert('Check Your Email Inbox for the details');		
	</script>";
	header('location:http://restaurantalton@gmail.com');
?>
