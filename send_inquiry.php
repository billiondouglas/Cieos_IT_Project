<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $name = htmlspecialchars($_POST['name']);
	    $email = htmlspecialchars($_POST['email']);
	    $message = htmlspecialchars($_POST['message']);
	    
		    // Destination email
		    $to = "billionairedouglas@gmail.com";
	    $subject = "New Inquiry from Website";
	    
		    // Email content
		    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
	    $headers = "From: $email"; 

	    // Send email
		    if (mail($to, $subject, $body, $headers)) {
		        echo "Thank you! Your message has been sent.";
		    } else {
		        echo "Oops! Something went wrong, please try again.";
		    }
}
?>
