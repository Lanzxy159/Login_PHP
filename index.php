
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

    <h1>Login</h1>
	 <!-- The form submits to the same page using the POST method -->
	<form action="Index.php" method="POST">

		<!-- Input field for the username. Take note of the value stored in the name attribute -->
		<p>Username: <input type="text" value="" placeholder="" name="username"></p>
        <p>Password: <input type="text" value="" placeholder="" name="password"></p>
		<!-- Submit button -->
		<p><input type="submit" value="Login" name="Login"></p>
		<p><input type="submit" value="Logout" name=""></p>

	</form>
    <?php 

        if(isset($_POST['Login'])) {

            $username = $_POST['username'];
            echo "<h2>User logged in:," . $username. "</h2>";  
            $password = $_POST['password'];
            echo "<h2>Password:," . $password. "</h2>";  
        }


    ?>
</body>
</html>