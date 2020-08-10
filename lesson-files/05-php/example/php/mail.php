<?php

 
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
		$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);
		$response = "";
		$recipient = "info@brightdaystudio.co.uk";
        $subject = "New contact from $name";
        $content = "Name: $name \n Email: $email \n\n Message: \n$message";
		$headers = "From: $name <$email>" . "\r\n" . "Reply-to: $name <$email>";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html\r\n";

        // Check the data.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response = "Oops! There was a problem with your submission. Please try again.";
            exit;
        }
		//send mail
        if (mail($recipient, $subject, $content, $headers)) {
			$response = "Thank You $name! Your message has been sent.";
        } else { 
            $response = "Oops! Something went wrong and we couldn't send your message.";
        }


?>





<html>
<head>
<meta charset="UTF-8">
<title>Email Form</title>
	<link rel="stylesheet" type="text/css" href="../css/normalise.css">
	<link rel="stylesheet" type="text/css" href="../css/base.css">
	
</head>

<body>
	
	
		<main class="content">
		<section>
			<h2><?php echo $response ?></h2>
			
		 </section>
		</main>
	
</body>
</html>
