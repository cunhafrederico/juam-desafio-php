<?php

function calcula($tempoPrep, $amp1, $amp2){
	// Tempo da empulheta não pode ser menor que o tempo de preparo.
	if($amp1<=$tempoPrep || $amp2<=$tempoPrep){
		echo "Tempo da ampulheta não é maior que o tempo de preparo.\n";
	}else{
		// Coloca o número menor na variável $amp1.
		if ($amp1>$amp2){
			$maior = $amp1;
			$amp1 = $amp2;
			$amp2 = $maior;
		}
		// Testa se é possível cozinhar o miojo.
		if ($amp1 == $amp2 || $amp2-$amp1 == 1 || $amp1-$tempoPrep == 1){
			echo "\nQue pena!\nNão é possível cozinhar o miojo com as ampulhetas disponíveis.\n";
		}else{
			echo "Tempo de preparo = ".$tempoPrep."\n";
			echo "Virou as duas ampulhetas\n";
			for($i = $amp1; $i > 0; $i--){
				echo "ampulheta1 = ".$i.", ampulheta2 = ".$amp2."\n";
				$amp2--;
			}
			echo "amp1 esgotou, virou novamente\n";
			//segunda virada da ampulheta que já terminou.
			for($j = $amp2; $j > 0; $j--){
				echo "ampulheta1 = ".$amp1.", ampulheta2 = ".$j."\n";
				$amp1--;
			}
			// Neste ponto se a ampulheta1 atingir o mesmo valor do tempo de preparo continua a execução se não é encerrado.
			if ($amp1==$tempoPrep) {
				echo "Começou a fazer o miojo\n";
				for(; $amp1 > 0; $amp1--){
					echo "ampulheta1 = ".$amp1."\n";
				}
				echo "Miojo pronto, bom apetite!\n";
			}else{
				echo "\nQue pena!<br/>Não é possível cozinhar o miojo com as ampulhetas disponíveis.\n";
			}
		}
	}
}
echo calcula(3, 5, 7); // informe no primeiro parâmetro o tempo de preraro, depois os tempos das ampulhetas.
?>
