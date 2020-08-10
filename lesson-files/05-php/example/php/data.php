<?php
$servername = "160.153.133.168";
$username = "editor";
$password = "RQgH8xZnF2dvewf";
$dbname = "testDB";
$table = "messages";

// Get the form fields and remove whitespace.
$name = strip_tags(trim($_POST["name"]));
$name = str_replace(array("\r","\n"),array(" "," "),$name);
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$message = trim($_POST["message"]);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO $table (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    $response = "New record created successfully";
} else {
    $response = "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<html>
<head>
<meta charset="UTF-8">
<title>Data Form</title>
</head>

<body>
	
	<main class="content">
		<section>
			<h2><?php echo $response ?></h2>
		 </section>
	</main>
	
</body>
</html>