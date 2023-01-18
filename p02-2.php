<!DOCTYPE html>
<html>
	<body>

		<?php
		
		$notaDelExamen = 6;
			
		switch($notaDelExamen){
				case 5:
					echo "Aprobado";
					break;
				case 6:
					echo "Aprobado";
					break;
				case 7 :
					echo "Notable";
					break;
				case 8:
					echo "Notable";
					break;
				case 9:
					echo "Sobresaliente";
					break;
				case 10:
					echo "Sobresaliente";
					break;
				default: 
					echo "Has sacado menos de un 5, suspenso";
			}
			
		?> 

	</body>
</html>