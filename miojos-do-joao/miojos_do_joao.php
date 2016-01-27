<?php
function calcula($tempoPrep, $amp1, $amp2){
	if($amp1<$tempoPrep || $amp2<$tempoPrep){
		echo "Tempo da ampulheta menor que o tempo de preparo";
	}else{
		if ($amp1>$amp2) {
			$maior = $amp1;
			$amp1 = $amp2;
			$amp2 = $maior;
		}
		if ($amp1 == $amp2 || $amp2-$amp1 == 1 || $amp1-$tempoPrep == 1){
			echo "<br/>Que pena!<br/>Não é possível cozinhar o miojo com as ampulhetas disponíveis.";
		}else{
			echo "Tempo de preparo = ".$tempoPrep."<br/>";
			echo "Virou as duas ampulhetas<br/>";
			for($i = $amp1; $i > 0; $i--){
				echo "amp1 = ".$i.", amp2 = ".$amp2."<br/>";
				$amp2--;
			}
			echo "amp1 esgotou, virou novamente<br/>";
			for($j = $amp2; $j > 0; $j--){
				echo "amp1 = ".$amp1.", amp2 = ".$j."<br/>";
				$amp1--;
			}
			if ($amp1==$tempoPrep) {
				echo "Começou a fazer o miojo<br/>";
				for(; $amp1 > 0; $amp1--){
					echo "amp1 = ".$amp1."<br/>";
				}
				echo "Miojo pronto, bom apetite!";
			}else{
				echo "<br/>Que pena!<br/>Não é possível cozinhar o miojo com as ampulhetas disponíveis.";
			}
		}
	}
}
calcula(3, 5, 7);
?>
