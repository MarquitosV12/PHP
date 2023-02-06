<!DOCTYPE html>
<html>
	<body>		
		
		<h1>Your Inpunt:</h1>
		
		<?php
		
			function recogeDatos($campo){
				return isset($_REQUEST[$campo])?$_REQUEST[$campo]:'';
			}
			
			$name = recogeDatos('name');
			$email = recogeDatos('email');
			$website = recogeDatos('website');
			$comment = recogeDatos('comment');
			$gender = recogeDatos('gender');
			$hayError = FALSE;
			
			
			
			echo $name, "<br>";
			echo $email, "<br>";
			echo $website, "<br>";
			echo $comment, "<br>";
			echo $gender, "<br>";
			
		?> 

	</body>
</html>