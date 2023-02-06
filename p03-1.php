<!DOCTYPE html>
<html>
	<body>		
		
		<h1>PHP Form Validation Example</h1>
		
		<?php
			
			$nameErr = $emailErr = $genderErr = $websiteErr = "";
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["name"])) {
					$nameErr = "Name is required";
				}
			} else {
				$name = test_input($_POST["name"]);
				
				if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
				  $nameErr = "Sólo se permiten letras y espacios en blanco";
				}
			}
			if (empty($_POST["email"])) {
				$emailErr = "No has introducido tu email";
			} else {
				$email = test_input($_POST["email"]);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				  $emailErr = "Formato de email inválido";
				}
			}
			if (empty($_POST["website"])) {
				$website = "";
			} else {
				$website = test_input($_POST["website"]);
				if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
				  $websiteErr = "Dirección web no válida";
				}
			}
			if($gender == ''){
				$genderErr = TRUE;
				echo "<p class=\"error\">No has introducido tu género.<\p>\n";
			}
			
			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
			
		?> 
		
		<form action="tus_datos.php" method="post">
		
			Name: <input type="text" name="name"><br><br>
			<span class="error">* <?php echo $nameErr;?></span>
			
			E-mail: <input type="text" name="email"><br><br>
			<span class="error">* <?php echo $emailErr;?></span>
			
			Website: <input type="text" name="website"><br><br>
			<span class="error"><?php echo $websiteErr;?></span>
			
			Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
			Gender:
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="other">Other
				<span class="error">* <?php echo $genderErr;?></span>
				
				<br><br>
			
			<input type="submit">
		</form>		

	</body>
</html>