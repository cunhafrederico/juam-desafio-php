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
		for($amp2; $amp2 == 0; $amp2--){
			$amp1--;
			echo "amp1 = ".$amp1." amp2 = ".$amp2;
		}
	}
}
calcula(3, 5, 7);
?>
