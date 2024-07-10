<?php
	session_start();

	// Check if the form has been submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Set the session variable with the input value
		$_SESSION["userValue"] = $_POST["value"];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Set Session Value - 1st party app</title>
</head>
<body>
<h1>1st party app</h1>
<h2>Current Session Value:</h2>
<p><?php echo $_SESSION["userValue"] ?? "No value set"; ?></p>
<form method="post" action="">
	<label for="value">Enter Value:</label>
	<input type="text" id="value" name="value" required>
	<button type="submit">Set Session Value</button>
</form>
</body>
</html>
