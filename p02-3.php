<!DOCTYPE html>
<html>
	<body>

		<?php
		
		$motos = array("Honda", "BMW", "Ducati", "Yamaha");
		$coches = array("Opel", "Audi", "Seat", "Citroen");
		
		function mostrarResultadosOrdenados() {
			$motos = array("Honda", "BMW", "Ducati", "Yamaha");
			foreach ($motos as $moto){
				echo "$moto <br>";
			}
			asort($motos);
			foreach ($motos as $moto){
				echo "$moto <br>";
			}
		}
			
		foreach ($motos as $moto){
			echo "$moto <br>";
		}
		
		asort($motos);
		foreach ($motos as $moto){
			echo "$moto <br>";
		}
		
		mostrarResultadosOrdenados();
		
		$numeroCoches = count($coches);
		
		echo "$numeroCoches";

		?> 

	</body>
</html>